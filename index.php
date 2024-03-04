<?php session_start(); ?>
<?php $msg = "Viktor is stand proud. He's strong" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olys Web Php</title>
    <link rel="stylesheet" href="styles.css">
</head>


<header>
        <h1>Olys Webside</h1>
    </header>

    <div class="content-container">
        <div class="left-side">
            <h3>THE WEB AAAAAAAAAAAAAAAAAAA.</h3>
            <section>
                <button onclick="openOverlay()">Truth</button>
            </section>
        </div>
        <a href="index.php" target="_blank">index- </a>
        <a href="302.php" target="_blank">302- </a>
        <a href="303.php" target="_blank">303- </a>
        <a href="304-login.php" target="_blank">304- </a>
        <a href="305-login.php" target="_blank">305- </a>

        <div class="right-side">
            <a>
                <img src="Pictures/image1.webp" alt="Image 1">
            </a>
            <a>
                <img src="Pictures/image2.png" alt="Image 2">
            </a>
            <a>
                <img src="Pictures/image3.webp" alt="Image 3">
            </a>
        </div>
    </div>

    <div class="overlay" id="overlay">
        <div class="modal">
            <p>You're a popo head. HAAAA</p>
            <button class="close-btn" onclick="closeOverlay()">Close Truth</button>
        </div>
    </div>

    <script>
        function openOverlay() {
            document.getElementById('overlay').style.display = 'flex';
        }

        function closeOverlay() {
            document.getElementById('overlay').style.display = 'none';
        }
    </script>

<?php
    if (isset ($_SESSION["name"])) {echo $_SESSION["name"];} else {echo"name is null-   ";}
    if (isset ($_SESSION["password"])) {echo $_SESSION["password"];} else {echo"password is null-   ";}
    if (isset ($_SESSION["logged_in"])) {echo $_SESSION["logged_in"];} else {echo"logged_in is null-   ";}
    #print_r($_SESSION);
    $time = time();
    $vector = array(
        0 => time(),
    );
    if ($vector[0]%2==0) {
        $color = "#2C4251";
    } else{
        $color = "#80A5BB";
    }
?>

<body style="background-color: <?php echo $color?>">
</body>
</html>
