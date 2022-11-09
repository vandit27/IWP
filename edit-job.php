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
                    <h4>Jobs Available</h4>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['id'])) {
                        $user_id = $_GET['id'];
                        $users = "select * from job_details where id='$user_id'";
                        $user_run = mysqli_query($conn, $users);

                        if (mysqli_num_rows($user_run) > 0) {
                            foreach ($user_run as $user) {
                    ?>
                                <form action="code_job.php" method="post">
                                    <div class="row">
                                        <input type="text" name="user_id" value="<?= $user['id']; ?>">
                                        <div class="col-md-6 mb-3">
                                            <label for="">Name</label>
                                            <input type="text" name="name" value="<?= $user['name']; ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Profile</label>
                                            <input type="text" name="profile" value="<?= $user['profile']; ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Key Skill</label>
                                            <input type="text" name="skill" value="<?= $user['key_skill']; ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Location</label>
                                            <input type="text" name="loc" value="<?= $user['location']; ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">CTC</label>
                                            <input type="text" name="ctc" value="<?= $user['ctc']; ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Experience_Required</label>
                                            <input type="number" name="exp" value="<?= $user['exp_required']; ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Vacancies</label>
                                            <input type="number" name="vacan" value="<?= $user['vacancies']; ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Website</label>
                                            <input type="text" name="website" value="<?= $user['website']; ?>" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <button type="submit" name="update_job" class="btn btn-primary">Update Job</button>
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