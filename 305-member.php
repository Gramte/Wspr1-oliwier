<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>305</title>
    <link rel="stylesheet" href="styles.css">
</head>
<?php

    if ($_SESSION["logged_in"] == false) { #om inte inlogad --> tillbaka till login screen
        unset($_SESSION['name']);
        unset($_SESSION['password']);
        header('Location: http://localhost:8080/305-login.php');
 }
    if (!empty($_POST['null'])){ #logout
        echo 'is null';
        unset($_SESSION['name']);
        unset($_SESSION['password']);
        $_SESSION["logged_in"] = false;
        header('Location: http://localhost:8080/305-login.php');
    }
    else { echo 'not null';}
 #print_r($_SESSION);
 echo $_SESSION["logged_in"] . " wa";
 echo $_SESSION["name"] . " ";
 echo $_SESSION["password"] . " ";


#cookies
$expiry = time() + 10; //logas ut efter 10 sekunder

if(isset($_COOKIE['last_interaction'])) { //anti error
    // Get the last interaction time from the cookie
    $lastInteraction = $_COOKIE['last_interaction'];

    if(time() - $lastInteraction > 10) { #tid slut då loga ut
        Logouttime();
    }
}
// Set the cookie to store the current interaction time
setcookie('last_interaction', time(), $expiry);

function Logouttime() { #Loga ut efter tidslut
    echo "LOG OUT TIME";
    #header('Location: http://localhost:8080/305-login.php');
}

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
        <a href="305-login.php" target="_blank">305- </a>
</body>
</html>