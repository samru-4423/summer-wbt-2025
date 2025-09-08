<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <?php
        $fnameErr = $lnameErr = $companyErr = $address1Err = $cityErr = $stateErr = $zipcodeErr = $countryErr = $emailErr = $donationErr ="";
        $fname = $lname = $company = $address1 = $address2 = $city = $state = $zipcode = $country = $phone = $fax = $email = $donation = $other = $recurring = $credit = $makedonation = $name = $acknowledge = $address = $city1 = $state1 = $zipcode1 = $name1 = $choose = $comment = $contact = $empty = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["fname"])){
                $fnameErr = "First Name required";
            }
            else{
                $fname = test_input($_POST["fname"]);
                if(strlen($fname) === 1){
                    $fnameErr = "First name must have minimum 2 letters";
                }
            }

            if(empty($_POST["lname"])){
                $lnameErr = "Last Name required";
            }
            else{
                $lname = test_input($_POST["lname"]);
                if(strlen($lname) === 1){
                    $lnameErr = "Last name must have minimum 2 letters";
                }
            }

            if(empty($_POST["company"])){
                $companyErr = "Company required";
            }
            else{
                $company = test_input($_POST["company"]);
            }

            if(empty($_POST["address1"])){
                $address1Err = "Address 1 required";
            }
            else{
                $address1 = test_input($_POST["address1"]);
            }

            if(empty($_POST["address2"])){
                $address2 = "";
            }
            else{
                $address2 = test_input($_POST["address2"]);
            }

            if(empty($_POST["city"])){
                $cityErr = "City required";
            }
            else{
                $city = test_input($_POST["city"]);
            }

            if(empty($_POST["state"])){
                $stateErr = "State required";
            }
            else{
                $state = test_input($_POST["state"]);
            }

            if(empty($_POST["zipcode"])){
                $zipcodeErr = "Zip code required";
            }
            else{
                $zipcode = test_input($_POST["zipcode"]);
            }

            if(empty($_POST["country"])){
                $countryErr = "Country required";
            }
            else{
                $country = test_input($_POST["country"]);
            }

            if(empty($_POST["phone"])){
                $phone = "";
            }
            else{
                $phone = test_input($_POST["phone"]);
            }

            if(empty($_POST["fax"])){
                $fax = "";
            }
            else{
                $fax = test_input($_POST["fax"]);
            }

            if(empty($_POST["email"])){
                $emailErr = "Email required";
            }
            else{
                $email = test_input($_POST["email"]);
            }

            if(empty($_POST["donation"])){
                $donationErr = "Donation required";
            }
            else{
                $donation = test_input($_POST["donation"]);
            }

            if(empty($_POST["other"])){
                $other = "";
            }
            else{
                $other = test_input($_POST["other"]);
            }

            if(empty($_POST["recurring"])){
                $recurring = "";
            }
            else{
                $recurring = test_input($_POST["recurring"]);
            }

            if(empty($_POST["credit"])){
                $credit = "";
            }
            else{
                $credit = test_input($_POST["credit"]);
            }

            if(empty($_POST["makedonation"])){
                $makedonation = "";
            }
            else{
                $makedonation = test_input($_POST["makedonation"]);
            }

            if(empty($_POST["name"])){
                $name = "";
            }
            else{
                $name = test_input($_POST["name"]);
            }

            if(empty($_POST["acknowledge"])){
                $acknowledge = "";
            }
            else{
                $acknowledge = test_input($_POST["acknowledge"]);
            }

            if(empty($_POST["address"])){
                $address = "";
            }
            else{
                $address = test_input($_POST["address"]);
            }

            if(empty($_POST["city1"])){
                $city1 = "";
            }
            else{
                $city1 = test_input($_POST["city1"]);
            }

            if(empty($_POST["state1"])){
                $state1 = "";
            }
            else{
                $state1 = test_input($_POST["state1"]);
            }

            if(empty($_POST["zipcode1"])){
                $zipcode1 = "";
            }
            else{
                $zipcode1 = test_input($_POST["zipcode1"]);
            }

            if(empty($_POST["name1"])){
                $name1 = "";
            }
            else{
                $name1 = test_input($_POST["name1"]);
            }

            if(empty($_POST["choose"])){
                $choose = "";
            }
            else{
                $choose = test_input($_POST["choose"]);
            }

            if(empty($_POST["comment"])){
                $comment = "";
            }
            else{
                $comment = test_input($_POST["comment"]);
            }

            if(empty($_POST["contact"])){
                $contact = "";
            }
            else{
                $contact = test_input($_POST["contact"]);
            }

            if(empty($_POST["empty"])){
                $empty = "";
            }
            else{
                $empty = test_input($_POST["empty"]);
            }

        }

        function test_input($data){
            return htmlspecialchars(stripslashes(trim($data)));
        }   
    ?>
    <div class="donation-container">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h2>Donor Information</h2>

            <div class="formgroup">
                <label for="fname">First Name</label>
                <input class="r" type="text" name="fname" id="fname" value="<?php echo $fname; ?>"><span>* <?php echo $fnameErr; ?></span>
            </div>

            <div class="formgroup">
                <label for="lname">Last Name</label>
                <input class="r" type="text" name="lname" id="lname" value="<?php echo $lname; ?>"><span>*<?php echo $lnameErr; ?></span>
            </div>

            <div class="formgroup">
                <label for="company">Company</label>
                <input class="r" type="text" name="company" id="company" value="<?php echo $company; ?>"><span>*<?php echo $companyErr; ?></span>
            </div>

            <div class="formgroup">
                <label for="address1">Address 1</label>
                <input class="r" type="text" name="address1" id="address1" value="<?php echo $address1; ?>"><span>*<?php echo $address1Err; ?></span>
            </div>

            <div class="formgroup">
                <label for="address2">Address 2</label>
                <input class="r" type="text" name="address2" id="address2">
            </div>

            <div class="formgroup">
                <label for="city">City</label>
                <input class="r" type="text" name="city" id="city" value="<?php echo $city; ?>"><span>*<?php echo $cityErr; ?></span>
            </div>

            <div class="formgroup">
                <label for="state">State</label>
                <select name="state" id="state" value="<?php echo $state; ?>">
                    <option value="" disabled selected hidden>Select a State</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Sylhet">Sylhet</option>
                </select><span>*<?php echo $stateErr; ?></span>
            </div>

            <div class="formgroup">
                <label for="zipcode">Zip Code</label>
                <input class="r" type="number" id="zipcode" value="<?php echo $zipcode; ?>"><span>*<?php echo $zipcodeErr; ?></span>
            </div>

            <div class="formgroup">
                <label for="country">Country</label>
                <select name="country" id="country" value="<?php echo $country; ?>">
                    <option value="" disabled selected hidden>Select a Country</option>
                    <option value="Bangladesh">Bangladesh</option>
                </select><span>*<?php echo $countryErr; ?></span>
            </div>

            <div class="formgroup">
                <label for="phone">Phone</label>
                <input class="r" type="number" id="phone">
            </div>

            <div class="formgroup">
                <label for="fax">Fax</label>
                <input class="r" type="text" id="fax">
            </div>

            <div class="formgroup">
                <label for="email">Email</label>
                <input class="r" type="email" id="email" value="<?php echo $email; ?>"><span>*<?php echo $emailErr; ?></span>
            </div>

            <div class="formgroup">
                <label for="donation">Donation Amount
                <span class="instructions"> <br> (Check a button or type in your<br> amount)</span>
                </label>
                <input type="radio" name="donation" value="<?php echo $donation; ?>">None
                <input type="radio" name="donation" value="<?php echo $donation; ?>">$50
                <input type="radio" name="donation" value="<?php echo $donation; ?>">$75
                <input type="radio" name="donation" value="<?php echo $donation; ?>">$100
                <input type="radio" name="donation" value="<?php echo $donation; ?>">$250
                <input type="radio" name="donation" value="<?php echo $donation; ?>">Other<span>*<?php echo $donationErr; ?></span>
            </div>

            <div class="formgroup">
                <label for="other">Other amount $</label>
                <input class="r" type="number" id="other">
            </div>

            <div class="formgroup">
                <label for="recurring">Recurring Donation
                    <span class="instructions"> <br> (Check if yes)</span>
                </label>
                <input type="checkbox" name="recurring">I am interested in giving on a regular basis.
            </div>

            <div class="formgroup">
                <label for="credit">Monthly Credit Card $</label>
                    <input class="f" type="number" name="amount"> For 
                    <input class="f" type="number" name="months"> Months
            </div>

            <h3>
                Honorarium and Memorial Donation Information
            </h3>

            <div class="formgroup">
                <label for="makedonation">I would like to make this <br> donation</label>
                <div>
                    <input type="radio" name="makedonation">To Honor<br>
                    <input type="radio" name="makedonation">In Memory of
                </div>
            </div>

            <div class="formgroup">
                <label for="name">Name</label>
                <input class="r" type="text" id="name">
            </div>

            <div class="formgroup">
                <label for="acknowledge">Acknowledge Donation to</label>
                <input class="r" type="text" id="acknowledge">
            </div>

            <div class="formgroup">
                <label for="address">Address</label>
                <input class="r" type="text" id="address">
            </div>

            <div class="formgroup">
                <label for="city1">City</label>
                <input class="r" type="text" id="city1">
            </div>

            <div class="formgroup">
                <label for="state1">State</label>
                <select name="state" id="state1">
                    <option value="" disabled selected hidden>Select a State</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Sylhet">Sylhet</option>
                </select>
            </div>

            <div class="formgroup">
                <label for="zipcode1">Zip Code</label>
                <input class="r" type="number" id="zipcode1">
            </div>

            <h3>
                Additional Information
            </h3>

            <h4>
                Please enter yor name, company or organization as you would like it to appear in our publications:
            </h4>
               
            <div class="formgroup">
                <label for="name1">Name</label>
                <input class="r" type="text" id="name1">
            </div>
            
            <div>
                <input type="checkbox" name="choose">I would like my gift to remain anonymous <br>
                <input type="checkbox" name="choose">My employer offers a matching gift program. I will mail the matching gift form. <br>
                <input type="checkbox" name="choose">Please save the cpst of acknowledge this gift by not mailing a thank you letter. <br>
            </div>

            <div class="formgroup">
                <label for="comment">Comments <span class="instructions"> <br> (Please type any questions or feedback here)</span></label>
                <input class="g" type="text" id="comment">
                
            </div>

            <div class="formgroup">
                <label for="contact">How may we contact you?</label>
                <div>
                    <input type="checkbox" name="e-mail" id="contact">E-mail<br>
                    <input type="checkbox" name="postalmail" id="contact">Postal Mail<br>
                    <input type="checkbox" name="telephone" id="contact">Telephone<br>
                    <input type="checkbox" name="fax" id="contact">Fax<br>
                </div>
            </div>

            <div>
                <p class="font-color">I would like to receive newsletters and information about special events by:</p>
                <div class="formgroup">
                    <label for="empty"></label>
                    <div>
                        <input type="checkbox" name="e-mail" id="contact">E-mail<br>
                        <input type="checkbox" name="postalmail" id="contact">Postal Mail<br>
                    </div>
                </div>
            </div>

            <div>
                <input type="checkbox" name="choose">I would like information about volunteering with the <br>
            </div>
            
            <hr class="hr">

            <div class="formgroup">
                <label for="empty"></label>
                <input class="button" type="reset" value="Reset">&nbsp;
                <input class="button1" type="submit" value="Continue">
            </div>
        </form>
    </div>
</body>
</html>