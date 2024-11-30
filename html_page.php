
<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="css\reset.css">
  <link rel="stylesheet" href="css\nav.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body >
  <header class='header-main'>
    <div class='header-logo'>
      <a href="html_page.php"><img src="imgs\anime-devushki-40446 .jpg"  alt="none" />
  
    </div>
   
    <nav class='header-nav'>
      <ul>
      <?php
      if (isset($_SESSION['USERID'])) {
        

        ?>

  <li>
    <a href="includes\logout.php">logout </a></li>
   <?php
      } else {
        
        ?>   
  <li><a href="html_page.php">home </a></li>
  <li><a href="discover.php">learn about us </a></li>
  <li><a href="plog.php">find blogs </a></li>
  <li><a href="signup\project.php">sign up </a></li>
  <li><a href="login.php">log in </a></li>
  <?php
      }
  ?>
</ul></nav>
 
<div class='header-sm'>
 <a href="www.facepook.com"> <div class='header-sm-fb'></div></a>
  <a href="www.instegram.com"><div class='header-sm-in'></div></a>
</div>
  </header>
  
    


</body>
</html>