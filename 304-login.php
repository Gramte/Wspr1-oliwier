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
        function usertextcheck($filename) { #kolla om username och password passar
            $users = array(); # gör det till en lista
        
            // Read the file into an array of lines
            $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); #får alla logins, sorterar till linjerna och ignorerar alla tomma linjer
        
            if ($lines !== false) { #om det finns då kolla igenom - anti error linje
                foreach ($lines as $line) { #kolla
                    // splitar linjen till username och password
                    list($username, $password) = explode(':', $line);
        
                    // username och password i samma lista
                    $users[$username] = $password;
                }
            }
        
            return $users; #ger tillbaka svaret
        }

        $filename = 'users.txt'; # Dar är allas logins
        $users = usertextcheck($filename); #kolla om username/password passar - Aktiverar functionen med Filename Variablen
        
        if (isset($_POST['username'])){$username = $_POST['username'];}
        if (isset($_POST['password'])){$password = $_POST['password'];}
        #$username = $_POST['username'];
        #$password = $_POST['password'];

        if (isset($username)){
            if (isset($users[$username]) && $users[$username] === $password) { #kollar om user ens finns, sen kollar om passwordet passar med user
                $_SESSION["logged_in"] = true;
                echo "<p style='color: green;'>Login Succed.</p>";
                $_SESSION["username"] = $_POST['username'];
                $_SESSION["password"] = $_POST['password'];
                header("Location: http://localhost:8080/304-member.php");
                exit();
            } else {
                // error sms
                echo "<p style='color: red;'>Invalid username or password.</p>";
            }
        } else{}
    ?>
 <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>"method="POST"> <!--Uppdaterar hemsidan med submit values med post-->
 <a1>
  <label for="text">Insert Your Username: </label>
  <input type="text" name="username">
  <label for="text">Insert Your Password: </label>
  <input type="text" name="password">
</a1>

<input type="submit" value="Login" name="Change">

</body>
</html>