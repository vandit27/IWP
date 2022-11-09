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
                    <h4>Add Job</h4>
                </div>
                <div class="card-body">
                    <form action="code_seeker.php" method="post">
                        <div class="row">
                            <input type="text" name="user_id">
                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name"  class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Profile</label>
                                <input type="text" name="profile"  class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Key Skill</label>
                                <input type="text" name="skill"  class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Location</label>
                                <input type="text" name="loc"  class="form-control" >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">CTC</label>
                                <input type="text" name="ctc"  class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Experience_Required</label>
                                <input type="text" name="exp"  class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Vacancies</label>
                                <input type="text" name="vacan" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Website</label>
                                <input type="text" name="website" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="add_job" class="btn btn-primary">Update Job</button>
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