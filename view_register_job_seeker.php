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
                    <a href="add-seeker.php" class="btn btn-primary float-end">Add Job Seeker</a>
                    <h4>Registered Job Seekers</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bodered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Country</th>
                                <th>Gender</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $q = "Select * from seeker_details";
                            $q_run = mysqli_query($conn, $q);
                            if (mysqli_num_rows($q_run) > 0) {
                                foreach ($q_run as $row) {
                            ?>
                                    <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['fname']; ?></td>
                                        <td><?= $row['lname']; ?></td>
                                        <td><?= $row['email_id']; ?></td>
                                        <td><?= $row['phone']; ?></td>
                                        <td><?= $row['country']; ?></td>
                                        <td><?= $row['gender']; ?></td>
                                        <td><a href="edit-seeker.php?id=<?= $row['id']; ?>" class="btn btn-success">Edit</a></td>
                                        <td>
                                            <form action="code_seeker.php" method="POST">
                                                <button type="submit" name="user_delete" value="<?= $row['id']; ?>" class="btn btn-danger">Delete</button>
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