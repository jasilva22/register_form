<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Registration Form</title>
        <style>
            body {
                width: 800px;
                margin: 0 auto;
                margin-top: 50px;
                background-color: whitesmoke;
            }
            #form {
                display: block;
                text-align: center;
                border: 2px solid #ccc;
                padding-bottom: 25px;
            }
            form {
                display: inline-block;
                text-align: left;
            }
            p, button {
                font-family: Verdana, sans-serif;
                font-size: 20px;
                color: navy;
            }
        </style>
    </head>
    
    <body>
        <!-- Script 6.1 - register.php -->
        <div>
        
        <p>Please complete this form to register:</p>
        
        <form action="handle_reg.php" method="post">
            
            <p>Email Address: <input type="email" name="email" size="30"></p>
            
            <p>Password: <input type="password" name="password" size="20"></p>
            
            <p>Confirm Password: <input type="password" name="confirm" size="20"></p>
                        
            <?php 
            
            $months = [
                1 => 'January',
                     'February',
                     'March',
                     'April',
                     'May',
                     'June',
                     'July',
                     'August',
                     'September',
                     'October',
                     'November',
                     'December'
                     ];
            
            $days = range(1, 31);
            $years = range(date('Y'), 1900);
            ?>
            
            <p>Date of Birth: 
            <?php
                print '<select name="month">';
                    foreach ($months as $key => $value) {
                        print "<option value=\"$key\">
                        $value</option>\n";
                    }
                print '</select>';
                
                print '<select name="day">';
                    foreach ($days as $value) {
                        print "<option value=\"$value\">
                        $value</option>\n";
                    }
                print '</select>';
                
                print '<select name="year">';
                    foreach ($years as $value) {
                        print "<option value=\"$value\">
                        $value</option>\n";
                    }
                print '</select>';
                
            ?>
            </p>
            
            <p>Favorite Color: 
            <select name="color">
                <option value="">Pick One</option>
                <option value="red">Red</option>
                <option value="yellow">Yellow</option>
                <option value="green">Green</option>
                <option value="blue">Blue</option>
            </select></p>
            
            <label><p><input type="checkbox" name="terms" value="Yes">I agree to the terms (whatever they may be).</p></label>
            
            <input type="submit" name="submit" value="Register">
            
        </form>
        </div>
        
    </body>
</html>
