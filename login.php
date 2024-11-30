<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="css\login_css.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
  <div class="container"> 

<form action="includes\signup.inc.php" method='post'>
  <input type="text" placeholder="Enter Username" name="uid" >
   <input type='password' placeholder="password" name="pwd" >
    <input type="text" placeholder="repeat password" name="pwdrepeat" >
     <input type='email' placeholder="Enter email" name="email" ><br>
     <button type="submit" name='submit'>signup</button>
</form>

<br>


<form action="includes\login.inc.php" method="post">    
<input type="text" placeholder="Enter Username" name="uid" >
<br>
    
    <input type="password" placeholder="Enter Password" name="pwd" >

<button type="submit" name='submit'>Login</button>
  
</form>
</div>
<?php

?>
</body>
</html>