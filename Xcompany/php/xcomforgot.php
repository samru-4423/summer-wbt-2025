<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X Company</title>
    <link rel="stylesheet" href="../css/xcomforgot.css">
</head>
<body>
    <?php
        $emailErr="";
        $email="";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["email"])) {
                $emailErr = "required";
            } else {
                $email = test_input($_POST["email"]);
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
                <li class="line"><a href="xcomlogin.php">Login</a></li>
                <li><a href="xcomreg.php">Registration</a></li>
            </ul>
        </div>
    </div>

    <hr class="hr">

    <div class="body">
        <div class="fp">
            <div class="forget">
                <h2>FORGET PASSWORD</h2>
            </div><br>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="info">
                    <div class="name">
                       Enter Email: <span><input type="email" name="email" id="email" value="<?php echo $email; ?>"></span>
                       <span class="error"><?php echo $emailErr; ?></span>
                    </div>
                    <hr class="hr1">
                    <div class="btn">
                        <input type="submit" name="submit" value="Submit">
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