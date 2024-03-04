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

    if ($_SESSION["logged_in"] == false) { #om inte inlogad --> tillbaka till login screen
        unset($_SESSION['name']);
        unset($_SESSION['password']);
        header('Location: http://localhost:8080/304-login.php');
 }
    if (!empty($_POST['null'])){ #logout
        echo 'is null';
        unset($_SESSION['name']);
        unset($_SESSION['password']);
        $_SESSION["logged_in"] = false;
        header('Location: http://localhost:8080/304-login.php');
    }
    else { echo 'not null';}
 #print_r($_SESSION);
 #echo $_SESSION["logged_in"] . " wa";
 #echo $_SESSION["name"] . " ";
 #echo $_SESSION["password"] . " ";
?>
<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>"method="POST"> <!--Uppdaterar hemsidan med submit values med post-->
<input type="hidden" name="null" value="null">
<input type="Submit" value="Logout" name="Change">

<body>
    <h1> Welcome </h1>
    <a href="index.php" target="_blank">index- </a>
        <a href="302.php" target="_blank">302- </a>
        <a href="303.php" target="_blank">303- </a>
        <a href="304-login.php" target="_blank">304- </a>
</body>
</html>