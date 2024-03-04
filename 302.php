<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>302</title>
    <link rel="stylesheet" href="styles.css">
</head>
  
  <a href="<?php echo $_SERVER['PHP_SELF']?>?colotbg=Red">Red </a> <!--Knapparna som ändrar variabeln/färgen -->
  <a href="<?php echo $_SERVER['PHP_SELF']?>?colotbg=Blue">Blue </a>
  <a href="<?php echo $_SERVER['PHP_SELF']?>?colotbg=Green">Green </a>

  <?php #Sätter till variabeln namen om de finns

  if (!empty($_GET['colotbg']) and (!empty($_GET['name'])) and (!empty($_GET['aftername']))) #kommer bli error för det finns ingen value att vissa
 {
  $color = $_GET['colotbg'];
  $name = $_GET['name'];
  $aftername = $_GET['aftername'];
  
  echo $name . " ";
  echo $aftername . " ";
 } else {$color = 'Grey';}
 ?>

 <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>"method="GET"> <!--Uppdaterar hemsidan efter submit -->
 <a1>
  <label type="colotbg"> Custom Color: </label>
  <input type="text" name="colotbg">
  <label for="name">Your name: </label>
  <input type="text" name="name">
  <label for="aftername">Your Aftername: </label>
  <input type="text" name="aftername">
</a1>

<input type="submit" value="Submit" name="Change">
<body style="background-color: <?php echo $color?>">

</body>
</html>