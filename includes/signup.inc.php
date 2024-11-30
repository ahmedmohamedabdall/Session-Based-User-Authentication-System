<?php

if(isset($_POST['submit'])){

    $suid = $_POST['uid'];
    $spwd = $_POST['pwd'];
    $spwdrepeat = $_POST['pwdrepeat'];
    $semail = $_POST['email'];
    //instshiat signup class
    include 'C:\xampp\htdocs\login\classes\dbh.classes.php';

    include 'C:\xampp\htdocs\login\classes\signup.classes.php';
    include 'C:\xampp\htdocs\login\classes\signup-contr.classes.php';
    $signup = new signupcontr($suid, $spwd, $spwdrepeat, $semail);
    //error handling
    $signup->signup_user();
    //going pack to the front page
    header('location:../html_page.php');

}




?>







































?>