<?php

    $idnumber = $_POST['id'];
    $studentname = $_POST['password'];
   

    $dbms = new mysqli("localhost","root","","student_table","3306");
    $ee = "SELECT `student_name` FROM `form` WHERE `id`='".$idnumber."' AND `password`='".$password."' ";
    $dbms->query($ee);

    header("location:home.php");
?>