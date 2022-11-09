<?php
session_start();
include('config/dbcon.php');

if (isset($_POST['job_delete'])) {
    $userid = $_POST['job_delete'];
    echo $userid;
    $query = "DELETE FROM job_details WHERE id='$userid'";
    $run = mysqli_query($conn, $query);
    if ($run) {
        $_SESSION['message'] = "Deleted Successfully";
        header('location:view_job.php');
        exit(0);
    }
}


if (isset($_POST['add_job'])) {
    $userid = $_POST['user_id'];
    $name = $_POST['name'];
    $profile = $_POST['profile'];
    $skill = $_POST['skill'];
    $loc = $_POST['loc'];
    $ctc = $_POST['ctc'];
    $exp = $_POST['exp'];
    $website = $_POST['website'];
    $vacan = $_POST['vacan'];
    echo $fname;
    $query = "INSERT INTO job_details (id,name,profile,key_skill,location,ctc,exp_required,website,vacancies)  
    VALUES('$userid','$name','$profile','$skill','$loc','$ctc','$exp','$website','$vacan')";

    $run = mysqli_query($conn, $query);
    if ($run) {
        $_SESSION['message'] = "Added Successfully";
        header('location:view_register_job_seeker.php');
        exit(0);
    }
}



if (isset($_POST['update_job'])) {
    $userid = $_POST['user_id'];
    $name = $_POST['name'];
    $profile = $_POST['profile'];
    $skill = $_POST['skill'];
    $loc = $_POST['loc'];
    $ctc = $_POST['ctc'];
    $exp = $_POST['exp'];
    $website = $_POST['website'];
    $vacan = $_POST['vacan'];
    $query = "UPDATE job_details SET name='$name',profile='$profile',key_skill='$skill',location='$loc',ctc='$ctc',exp_required='$exp',website='$website',vacancies='$vacan' WHERE id='$userid'   ";
    $run = mysqli_query($conn, $query);
    if ($run) {
        $_SESSION['message'] = "Updated Successfully";
        header('location:view_job.php');
        exit(0);
    }
}
