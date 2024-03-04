<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>303</title>
    <link rel="stylesheet" href="styles.css">
</head>

  <?php
  if (!empty($_POST['colotbg']) and (!empty($_POST['name'])) and (!empty($_POST['aftername']))) #kommer bli error för det finns ingen value att vissa
 {
  $hidden = 'hidden';       #gömmer formulär
  $hiddensubmit = 'hidden'; #gömmer formulär
  $color = $_POST['colotbg'];
  $name = $_POST['name'];
  $aftername = $_POST['aftername'];

  $colorTEMP = $hidden;
  $nameTEMP = $name;
  $afternameTEMP = $aftername;

  $colorTEMP = '';
  $nameTEMP = '';
  $afternameTEMP = '';
  
  echo $name . " ";
  echo $aftername . " ";
 }
 else {
  $color = 'Grey'; #vissar formulär
  $hidden = 'text';#vissar formulär
  $hiddensubmit = 'submit';
  $colorTEMP = 'Insert Your Color: ';
  $nameTEMP = 'Insert Your Name: ';
  $afternameTEMP = 'Insert Your Aftername: ';
  #echo '<span style="color:#e30000;text-align:center;">Wrong Credentials! </span>'; #vissar error
}
 ?>
 <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>"method="POST"> <!--Uppdaterar hemsidan med submit values med post-->
 <a1>
  <label type="<?php echo $hidden?>"> <?php echo $colorTEMP ?> </label>
  <input type="<?php echo $hidden?>" name="colotbg">
  <label for="<?php echo $hidden?>"><?php echo $nameTEMP ?> </label>
  <input type="<?php echo $hidden?>" name="name">
  <label for="<?php echo $hidden?>"><?php echo $afternameTEMP ?> </label>
  <input type="<?php echo $hidden?>" name="aftername">
</a1>

<input type="<?php echo $hiddensubmit ?>" value="Submit" name="Change">
<body style="background-color: <?php echo $color?>">

</body>
</html>