<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X Company</title>
    <link rel="stylesheet" href="../css/changepic.css">
</head>
<body>
    <div class="head">
        <div class="image">
            <img src="../image/xcompnay.png" alt="">
        </div>
        <div class="link">
            <ul class="ul-head">
                <li class="line">Logged in as <a href="viewprofile.php">Bob</a></li>
                <li><a href="xcomlogin.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <hr class="hr">

    <div class="body">
        <div class="nav">
            <div class="navhead">
                <h3>Account</h3>
            </div>
            <hr class="hr1">
            <div class="list">
                <ul class="ul-nav">
                    <li><a href="xcomdashboard.php">Dashboard</a></li>
                    <li><a href="viewprofile.php">View Profile</a></li>
                    <li><a href="editprofile.php">Edit Profile</a></li>
                    <li><a href="#">Change Profile Picture</a></li>
                    <li><a href="changepass.php">Change Password</a></li>
                    <li><a href="xcomlogin.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="change">
            <div class="change-head">
                <h2>PROFILE PICTURE</h2>
            </div>
            <div class="profileicon">
                <img src="../image/profileicon.png" alt=""><br>
                <input type="file" id="myFile" name="filename">
                <hr class="hr2">
                <input type="submit">
            </div>
        </div>
    </div>
    
    <hr class="hr">

    <div class="bottom">
        <p>Copyright &copy; 2017</p>
    </div>
   
</body>
</html>