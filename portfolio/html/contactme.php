<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="../css/contactme.css">
</head>
<body>
    <?php
        $fnameErr = $lnameErr = $emailErr = $reasoncontactErr = $servicesErr ="";
        $fname = $lname = $email = $reasoncontact = $services = $offering = $position = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["fname"])){
                $fnameErr = "First Name required";
            }
            else{
                $fname = test_input($_POST["fname"]);
            }

            if(empty($_POST["lname"])){
                $lnameErr = "Last Name required";
            }
            else{
                $lname = test_input($_POST["lname"]);
            }

            if(empty($_POST["email"])){
                $emailErr = "Email required";
            }
            else{
                $email = test_input($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Invalid Email Format";
                }
            }

            if(empty($_POST["reasoncontact"])){
                $reasoncontactErr = "Reason for contact required";
            }
            else{
                $reasoncontact = test_input($_POST["reasoncontact"]);
            }

            if(empty($_POST["services"])){
                $servicesErr = "Services required";
            }
            else{
                $services = test_input($_POST["services"]);
            }

            if(empty($_POST["job"])){
                $offering = "";
            }
            else{
                $offering = test_input($_POST["job"]);
            }

            if(empty($_POST["position"])){
                $position = "";
            }
            else{
                $position = test_input($_POST["position"]);
            }
        }

        function test_input($data){
            return htmlspecialchars(stripslashes(trim($data)));
        }   
    ?>    
        <header>
            <div class="container">
                <a href="../index.html">Home</a>
                <a href="education.html">Education</a>
                <a href="experience.html">Experiences</a>
                <a href="projects.html">Projects</a>
                <a href="contactme.html">Contact Me</a>
            </div>
        </header>
    <section>
        <div class="container">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="formgroup">
                    <label for="fname">First Name:<span><strong>*</strong></span></label>
                    <input class="box" type="text" name="fname" value="<?php echo $fname; ?>" placeholder="Enter first name"><span class="error"><?php echo $fnameErr;?></span> <br>
                </div>

                <div class="formgroup"> 
                    <label for="lname">Last Name:<span><strong>*</strong></span></label>
                    <input class="box" type="text" name="lname" value="<?php echo $lname; ?>" placeholder="Enter last name"><span class="error"><?php echo $lnameErr;?></span><br>
                </div>
            
                <div class="formgroup">
                    <label for="email">Email:<span><strong>*</strong></span></label>  
                    <input class="box" type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter your email"><span class="error"><?php echo $emailErr;?></span><br>
                </div><br>
            
                <div class="formgroup">
                    <label for="reasoncontact">Reason for Contacting: <span><strong>*</strong></span></label>
                    <div>
                        <input type="radio" name="reasoncontact" value="Project">Project<br>
                        <input type="radio" name="reasoncontact" value="Thesis">Thesis <br>
                        <input type="radio" name="reasoncontact" value="Meet & Greet">Meet & Greet
                    </div><span class="error"><?php echo $reasoncontactErr;?></span>
                </div><br>

                <div class="formgroup">
                    <label for="services">Services: <span><strong>*</strong></span></label>
                    <div>
                        <input type="radio" name="services" value="App Development">App Development<br>
                        <input type="radio" name="services" value="Web Development">Web Development
                    </div><span class="error"><?php echo $servicesErr;?></span>
                </div><br>

                <div class="formgroup">
                    <label for="job">Are you offering a job?</label>
                    <div>
                        <input type="radio" name="job" value="Yes">Yes<br>
                        <input type="radio" name="job" value="No">No
                    </div>
                </div><br>

                <div class="formgroup">
                    <label for="position">Your position in company: </label>
                    <select class="dropdown" name="position" id="position">
                        <option value="" disabled selected hidden>Select an option</option>
                        <option value="HR">HR</option>
                        <option value="CEO">CEO</option>
                        <option value="GM">GM</option>
                    </select>
                </div>
                <br><br>
                <div class="formgroup">
                    <label for="empty"></label>
                    <input class="button" type="submit" value="Submit"> 
                </div>
            </form>
        </div>
    </section><hr>
    <footer>
        <div class="container">
            <div class="foot">
                <img src="../image/gmail2.png" width="20" height="15">
                <a>ansari.sam2018@gmail.com</a>
                <img src="../image/call2.png" width="18" height="18">  
                <a>01303044423</a>
                <img src="../image/github.png" width="18" height="18">
                <a href="https://github.com/samru-4423">Github</a>
                <img src="../image/facebook.png" width="18" height="18">
                <a href="https://www.facebook.com/sam.ir.630629/">Facebook</a>
                <img src="../image/linkedin.png" width="18" height="18">
                <a href="https://www.linkedin.com/in/samir-ansari-35b9b72ba/">LinkedIn</a>
                <br><br>
                <p>Copyright &copy; 2025 Samir. All rights reserved</p>
            </div>
        </div>
    </footer>
</body>
</html>