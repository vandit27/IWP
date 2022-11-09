<?php
session_start();

include('includes/header.php');
include('config/dbcon.php');
?>


<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <div class="row">
        <div class="col-md-12">
        <?php include('message.php'); ?>

        
            <div class="card">
                <div class="card-header">
                    <a href="add-employer.php" class="btn btn-primary float-end">Add Employer</a>
                    <h4>Registered Employers</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bodered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
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
                            $q = "Select * from emp_details";
                            $q_run = mysqli_query($conn, $q);
                            if (mysqli_num_rows($q_run) > 0) {
                                foreach ($q_run as $row) {
                            ?>
                                    <tr>
                                        <td><?= $row['emp_id']; ?></td>
                                        <td><?= $row['name']; ?></td>
                                        <td><?= $row['email_id']; ?></td>
                                        <td><?= $row['mobile']; ?></td>
                                        <td><?= $row['country']; ?></td>
                                        <td><?= $row['gender']; ?></td>
                                        <td><a href="edit-employer.php?id=<?= $row['emp_id']; ?>" class="btn btn-success">Edit</a></td>
                                        <td>
                                            <form action="code_employer.php" method="post">
                                            <button type="submit" name="user_delete" value="<?= $row['emp_id']; ?>" class="btn btn-danger">Delete</button>
                                            </form></td>
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