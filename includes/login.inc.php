<?php

if (isset($_POST['submit'])) {

    $suid = $_POST['uid'];
    $spwd = $_POST['pwd'];
   
    
    //instshiat signup class
    include 'C:\xampp\htdocs\login\classes\dbh.classes.php';

    include 'C:\xampp\htdocs\login\classes\login.classes.php';
    include 'C:\xampp\htdocs\login\classes\login.cotr.classes.php';
    $login = new logincontr($suid, $spwd);
    //error handling
    $login->login_user();
    //going pack to the front page
    header('location:../html_page.php');

}
