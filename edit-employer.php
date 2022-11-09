<?php
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
            <div class="card">
                <div class="card-header">
                    <h4>Registered Employers</h4>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['id'])) {
                        $user_id = $_GET['id'];
                        $users = "select * from emp_details where emp_id='$user_id'";
                        $user_run = mysqli_query($conn, $users);

                        if (mysqli_num_rows($user_run) > 0) {
                            foreach ($user_run as $user) {
                    ?>
                                <form action="code_employer.php" method="post">
                                    <div class="row">
                                        <input type="text" name="user_id" value="<?= $user['emp_id'];?>">
                                        <div class="col-md-6 mb-3">
                                            <label for="">Name</label>
                                            <input type="text" name="fname" value="<?= $user['name']; ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Email Address</label>
                                            <input type="text" name="email" value="<?= $user['email_id']; ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Phone</label>
                                            <input type="text" name="phone" value="<?= $user['mobile']; ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Password</label>
                                            <input type="text" name="pass" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Gender</label>
                                            <input type="text" name="gender" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <button type="submit" name="update_user" class="btn btn-primary">Update Employer Details</button>
                                        </div>
                                    </div>
                                </form>
                            <?php

                            }
                        } else {
                            ?>
                            <h4>No records</h4>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');

?>