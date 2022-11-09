<?php
session_start();

include('includes/header.php');
include('config/dbcon.php');
?>


<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <a href="add-job.php" class="btn btn-primary float-end">Add Job</a>
                    <h4>Available Jobs</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bodered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Profile</th>
                                <th>Key_Skill</th>
                                <th>Location</th>
                                <th>CTC</th>
                                <th>Experience_Required</th>
                                <th>Vacancies</th>
                                <th>Website</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $q = "Select * from job_details";
                            $q_run = mysqli_query($conn, $q);
                            if (mysqli_num_rows($q_run) > 0) {
                                foreach ($q_run as $row) {
                            ?>
                                    <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['name']; ?></td>
                                        <td><?= $row['profile']; ?></td>
                                        <td><?= $row['key_skill']; ?></td>
                                        <td><?= $row['location']; ?></td>
                                        <td><?= $row['ctc']; ?></td>
                                        <td><?= $row['exp_required']; ?></td>
                                        <td><?= $row['vacancies']; ?></td>
                                        <td><?= $row['website']; ?></td>
                                        <td><a href="edit-job.php?id=<?= $row['id']; ?>" class="btn btn-success">Edit</a></td>
                                        <td>
                                            <form action="code_job.php" method="post">
                                                <button type="submit" name="job_delete" value="<?= $row['id']; ?>" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                }
                            } else { ?>
                                <tr>
                                    <td colspan="6">No Records Found</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');

?>