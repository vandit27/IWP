<?php
include('includes/header.php');
include('config/dbcon.php');
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Job Seeker</h4>
                </div>
                <div class="card-body">
                    <form action="code_seeker.php" method="post">
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
                                <label for="">Country</label>
                                <input type="text" name="country" class="form-control">
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
                                <button type="submit" name="add_user" class="btn btn-primary">Add Employer Details</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');

?>