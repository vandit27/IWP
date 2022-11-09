<?php
session_start();
include('config/dbcon.php');

if (isset($_POST['user_delete'])) {
    $userid = $_POST['user_delete'];

    $query = "DELETE FROM emp_details WHERE emp_id='$userid'   ";
    $run = mysqli_query($conn, $query);
    if ($run) {
        $_SESSION['message'] = "Deleted Successfully";
        header('location:view_register_job_employer.php');
        exit(0);
    }
}

if (isset($_POST['add_user'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $comp = $_POST['company'];
    $coun = $_POST['country'];
    $gen=$_POST['gender'];
    echo $fname;
    $query = "INSERT INTO emp_details (name,email_id,mobile,password,company_name,country,gender)  VALUES('$fname','$email','$phone','$pass','$comp','$coun','$gen')";

    $run = mysqli_query($conn, $query);
    if ($run) {
        $_SESSION['message'] = "Added Successfully";
        header('location:view_register_job_employer.php');
        exit(0);
    }
}

if (isset($_POST['update_user'])) {
    $userid = $_POST['user_id'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass =  $_POST['pass'];
    $gen=$_POST['gender'];

    $query = "UPDATE emp_details SET name='$fname',email_id='$email',mobile='$phone',password='$pass',gender='$gen' WHERE emp_id='$userid'   ";
    $run = mysqli_query($conn, $query);
    if ($run) {
        $_SESSION['message'] = "Updated Successfully";
        header('location:view_register_job_employer.php');
        exit(0);
    }
}
