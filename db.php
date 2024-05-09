<?php

    $idnumber = $_POST['id'];
    $studentname = $_POST['studentname'];
    $address = $_POST['Address'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $tellnumber = $_POST['tell'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];


    $dbms = new mysqli("localhost","root","","student_table","3306");
    $ee = "INSERT INTO `form`(`id`,`student_name`,`address`,`course`,`email`,`tell`,`password`,`gender`)
    VALUES('".$idnumber."','".$studentname."','".$address."','".$course."','".$email."','".$tellnumber."','".$password."','".$gender."')";
    $dbms->query($ee);

    header("location:home.php");
?>