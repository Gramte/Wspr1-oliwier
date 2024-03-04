<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>304</title>
    <link rel="stylesheet" href="styles.css">
</head>
  <?php 
  if (!empty($_POST['name']) and (!empty($_POST['password']))) #kommer bli error för det finns ingen value att vissa
 {
  $name = $_POST['name'];   #Tar 'name' från input valuen och gör det till en variabel
  $password = $_POST['password'];

  $_SESSION["name"] = $name;
  $_SESSION["password"] = $password;
  $_SESSION["logged_in"] = true;

  echo $_SESSION["name"] . " ";
  echo $_SESSION["password"] . " ";
  header('Location: http://localhost:8080/304-member.php'); #gå till member
  exit; 
 } 
 elseif ($_SESSION["logged_in"] == true) { #om redan inloggad gå till member
    header('Location: http://localhost:8080/304-member.php');
    exit;
 }
 ?>
 <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>"method="POST"> <!--Uppdaterar hemsidan med submit values med post-->
 <a1>
  <label for="text">Insert Your Name: </label>
  <input type="text" name="name">
  <label for="text">Insert Your Password: </label>
  <input type="text" name="password">
</a1>

<input type="submit" value="Login" name="Change">

</body>
</html>