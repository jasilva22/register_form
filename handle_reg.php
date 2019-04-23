<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Registration</title>
        <style type="text/css" media="screen">
            .error {
                color: red;
            }
        </style>
    </head>
    <body>
        <h1>Registration Results</h1>
        
        <?php //script 6.2 - handle_reg.php
        
        /*This script receives seven values from register.html:
        email, password, confirm, year, terms, color, submit */
        
        //flag variable to track success:
        $okay = true;
        
        //get the values from the $_POST array, assign the form data to local variables:
        
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $confirm = trim($_POST['confirm']);
        $color = $_POST['color'];
        $year = $_POST['year'];
        
        
        //validate the email address:
        if (empty($email)) {
            print '<p class="error">Please enter your email address.</p>';
            $okay = false;
        }
        
        //validate the password:
        if (empty($password)) {
            print '<p class="error">Please enter your password.</p>';
            $okay = false;
        }
        
        //check to see if the two passwords match:
        if ($password != $confirm) {
            print '<p class="error">Your confirmed password does not match the original password.</p>';
            $okay = false;
        }
        
        /*validate the birth year:
        if (is_numeric($_POST['year'])) {
            $age = date('Y') - $_POST['year']; //calculate the age
        } else {
            print '<p class="error">Please enter the year you were born as four digits.</p>';
            $okay = false;
        }
        
        //check that they were born before this year:
        if ($_POST['year'] >= date('Y')) {
            print '<p class="error">Either you entered your birth year wrong or you come from the future!<p>';
            $okay = false;
        }*/
        
        //validate the birth year:
        if (is_numeric($year) AND (strlen($year) == 4) AND ($year <= date('Y'))) {
            
            //check that they were born before current year:
            //if ($year <= date('Y')) {
                $age = date('Y') - $year;
                //calculate age this year
            } else {
                print '<p class="error">Please select the year you were born from the dropdown menu.<p>';
                $okay = false;
            } //end of 2nd conditional
            
        //} else { //else for 1st conditional
          //  print '<p class="error">Please select the year you were born from the dropdown menu.</p>';
            //$okay = false;
            
        //} //end of 1st conditional
        
        //validate the terms:
        if (!isset($_POST['terms']) OR ($_POST['terms'] != 'Yes')) {
            print '<p class="error">You must accept the terms.</p>';
            $okay = false;
        }
        
        /*validate the color:
        if ($_POST['color'] == 'red') {
            $color_type = 'primary';
        } else if ($_POST['color'] == 'yellow') {
            $color_type = 'primary';
        } else if ($_POST['color'] == 'green') {
            $color_type = 'secondary';
        } else if ($_POST['color'] == 'blue') {
            $color_type = 'primary';
        } else {
            print '<p class="error">Please select your favorite color.</p>';
            $okay = false;
        }*/
        
        //validate the color using switch:
        switch ($color) {
            case 'red':
                $color_type = 'primary';
                break;
            case 'yellow':
                $color_type = 'primary';
                break;
            case 'green':
                $color_type = 'secondary';
                break;
            case 'blue':
                $color_type = 'primary';
                break;
            default:
                print '<p class="error">Please select your favorite color.</p>';
                $okay = false;
        } //end switch
           
        //if there were no errors, print a success message:
        if ($okay) {
            print '<p>You have been successfully registered (but not really).</p>';
            print '<p>You will turn '.$age.' this year.</p>';
            print '<p>Your favorite color is a '.$color_type.' color.</p>';
        }
        
        ?>
            
        <p><a href="register.php">Back to Form</a></p>
                
    </body>
</html>