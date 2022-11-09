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
                    <h4>Registered Job Seekers</h4>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['id'])) {
                        $user_id = $_GET['id'];
                        echo $user_id;
                        $users = "select * from seeker_details";
                        $user_run = mysqli_query($conn, $users);
                        echo mysqli_num_rows($user_run);
                        if (mysqli_num_rows($user_run) > 0) {
                            foreach ($user_run as $user) {
                            ?>
                                <form action="" method="get">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="">First Name</label>
                                            <input type="text" name="fname" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Last Name</label>
                                            <input type="text" name="lname" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Email Address</label>
                                            <input type="text" name="email" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Phone</label>
                                            <input type="text" name="phone" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Password</label>
                                            <input type="text" name="pass" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Role as</label>
                                            <select name="role" required class="form-control">
                                                <option value="">--Select Role--</option>
                                                <option value="1" <?= $user['id'] == '1' ? 'selected' : '' ?>Admin</option>
                                                <option value="0" <?= $user['id'] == '4' ? 'selected' : '' ?>User</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Status</label>
                                            <input type="checkbox" name="status" width="70px" height="70px">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <button type="submit" class="btn btn-primary">Update Seeker Details</button>
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