<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X Company</title>
    <link rel="stylesheet" href="../css/xcomlogin.css">
</head>
<body>
    <?php
        $usernameErr=$passwordErr="";
        $username=$password=$remember="";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
            $usernameErr = "required";
        } else {
            $username = test_input($_POST["username"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $username)) {
                $usernameErr = "letters allowed";
            } 
        }

        if (empty($_POST["password"])) {
            $passwordErr = "required";
        } else {
            $password = test_input($_POST["password"]);
            if (!preg_match("/^[a-zA-Z0-9+&@#\/%=~_|' ]*$/", $password)) {
                $passwordErr = "Password must contain at least one of the special characters (@, #, $, %)";
            }    
        }

        if (empty($_POST["remember"])) {
            $remember = "";
        } else {
            $remember = test_input($_POST["remember"]);
        }
    }

        function test_input($data){
            return htmlspecialchars(stripslashes(trim($data)));
        }  

    ?>
    <div class="head">
        <div class="image">
            <img src="../image/xcompnay.png" alt="">
        </div>
        <div class="link">
            <ul>
                <li class="line"><a href="xcompany.php">Home</a></li>
                <li class="line"><a href="#">Login</a></li>
                <li><a href="xcomreg.php">Registration</a></li>
            </ul>
        </div>
    </div>

    <hr class="hr">

    <div class="body">
        <div class="login">
            <div class="log">
                <h2>LOGIN</h2>
            </div>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                <div class="info">
                    <div class="name">
                    User Name <span>:<input type="text" name="username" id="username" value="<?php echo $username; ?>"></span>
                    <span class="error"><?php echo $usernameErr; ?></span>
                    </div>
                    <div class="name">
                        Password &nbsp;<span>:<input type="password" name="password" id="password" value="<?php echo $password; ?>"></span>
                        <span class="error"><?php echo $passwordErr; ?></span>
                    </div><hr class="hr1">
                    <div class="rm">
                        <input type="checkbox" name="remember" id="remember" value="<?php echo $remember; ?>">Remember me
                    </div><br>
                    <div class="btn">
                        <input type="submit" name="submit" value="Submit">
                        <a href="xcomforgot.php">Forgot Password?</a>
                    </div><br>
                </div>
            </form>
        </div>
    </div>
    <hr class="hr">

    <div class="bottom">
        <p>Copyright &copy; 2017</p>
    </div>
</body>
</html>
    
    
