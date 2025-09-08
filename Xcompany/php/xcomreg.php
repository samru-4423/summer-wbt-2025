<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/xcomreg.css">
</head>
<body>
    <?php
        $nameErr=$emailErr=$usernameErr=$passwordErr=$conpasswordErr=$genderErr=$dobErr="";
        $name=$email=$username=$password=$conpassword=$gender=$date=$month=$year="";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "letters allowed";
            } 
        }

        if (empty($_POST["email"])) {
            $emailErr = "required";
        } else {
            $email = test_input($_POST["email"]);
            
        }

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

        if (empty($_POST["conpassword"])) {
            $conpasswordErr = "required";
        } else {
            $conpassword = test_input($_POST["conpassword"]);
            if($conpassword != $password){
                $conpasswordErr = "Password didn't match";
            } 
        }

        if (empty($_POST["gender"])) {
            $genderErr = "required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["date"])) {
            $dobErr = "required";
        } else {
            $date = test_input($_POST["date"]);
        }

        if (empty($_POST["month"])) {
            $dobErr = "required";
        } else {
            $month = test_input($_POST["month"]);
        }

        if (empty($_POST["year"])) {
            $dobErr = "required";
        } else {
            $year = test_input($_POST["year"]);
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
                <li><a href="#">Registration</a></li>
            </ul>
        </div>
    </div>

    <hr class="hr">

    <div class="body">
        <div class="h2">
            <h2>REGISTRATION</h2>
        </div>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="info">
                <div class="name">
                    Name <span>:<input type="text" name="name" id="name" value="<?php echo $name; ?>"></span>
                    <span class="error"><?php echo $nameErr; ?></span>
                </div><hr class="hr1">
                <div class="name">
                    Email <span>:<input type="email" name="email" id="email" value="<?php echo $email; ?>"></span>
                    <span class="error"><?php echo $emailErr; ?></span>
                </div><hr class="hr1">
                <div class="name">
                    User Name <span>:<input type="text" name="username" id="username" value="<?php echo $username; ?>"></span>
                    <span class="error"><?php echo $usernameErr; ?></span>
                </div><hr class="hr1">
                <div class="name">
                    Password <span>:<input type="password" name="password" id="password" value="<?php echo $password; ?>"></span>
                    <span class="error"><?php echo $passwordErr; ?></span>
                </div><hr class="hr1">
                <div class="name">
                    Confirm Password <span>:<input type="password" name="conpassword" id="conpassword" value="<?php echo $conpassword; ?>"></span>
                    <span class="error"><?php echo $conpasswordErr; ?></span>
                </div><hr class="hr1">
                <div class="gen">
                    <div class="gender">
                        <h2>Gender</h2>
                    </div>
                    <div class="genopt">
                        <input type="radio" name="Male" id="Male" value="<?php echo $gender; ?>">Male
                        <input type="radio" name="Female" id="Female" value="<?php echo $gender; ?>">Female
                        <input type="radio" name="Other" id="Other" value="<?php echo $gender; ?>">Other
                        <span class="error"><?php echo $genderErr; ?></span>
                    </div>
                </div><hr class="hr1">
                <div class="dob">
                    <div class="DOB">
                        <h2>Date of Birth</h2>
                    </div>
                    <div class="dobopt">
                        <input type="number" name="date" id="date" value="<?php echo $date; ?>">/
                        <input type="number" name="month" id="month" value="<?php echo $month; ?>">/
                        <input type="number" name="year" id="year" value="<?php echo $year; ?>">
                        <span class="error"><?php echo $dobErr; ?></span>
                         <span class="dobstyle">(dd/mm/yyyy)</span>
                    </div>
                </div><hr class="hr1">
                <div class="button">
                    <!-- <button name="submit" value="Submit">Submit</button>
                    <button name="reset" value="Reset">Reset</button> -->
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Reset">
                </div>
            </div>
        </form>
    </div>
    <hr class="hr">
    <div class="bottom">
        <p>Copyright &copy; 2017</p>
    </div>
</body>
</html>