<?php
session_start();
include('config/dbcon.php');

if (isset($_POST['user_delete'])) {
    $userid = $_POST['user_delete'];
    echo $userid;
    $query = "DELETE FROM seeker_details WHERE id='$userid'";
    $run = mysqli_query($conn, $query);
    if ($run) {
        header('location:view_register_job_seeker.php');
        exit(0);
    }
    else
    {
        echo "KAL";
    }
}

if (isset($_POST['add_user'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $coun = $_POST['country'];
    $gen = $_POST['gender'];
    echo $fname;
    $query = "INSERT INTO seeker_details (fname,lname,email_id,mobile,password,country,gender)  VALUES('$fname','$lname','$email','$phone','$pass','$coun','$gen')";

    $run = mysqli_query($conn, $query);
    if ($run) {
        $_SESSION['message'] = "Added Successfully";
        header('location:view_register_job_seeker.php');
        exit(0);
    }
}


if (isset($_POST['update_user'])) {
    $userid = $_POST['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];

    $query = "UPDATE seeker_details SET fname='$fname',lname='$lname', email_id='$email',phone='$phone',password='$pass' WHERE id='$userid'   ";
    $run = mysqli_query($conn, $query);
    if ($run) {
        $_SESSION['message'] = "Updated Successfully";
        header('location:view_register_job_seeker.php');
        exit(0);
    }
}
