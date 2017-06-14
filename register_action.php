<!DOCTYPE html>
<html lang="en">
  
    <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Registration Confirmation | Ace in the Hole Multisport Events</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
        
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        
    <!-- Custom styles for Bootstrap static top navbar -->
    <link href="css/navbar-static-top.css" rel="stylesheet">
    
    <!-- Custom styles for Bootstrap starter template -->
    <link href="css/starter-template.css" rel="stylesheet"> 
        
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
        
    <!-- Weather Plugin CSS -->
    <link href="css/simpleWeather.css" rel="stylesheet">
        
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    </head>

<?php

// VARIABLES

$missing_count = 0;
    
// ARRAYS
    
$form_fields=array();

$form_fields["firstName"]="text";
$form_fields["lastName"]="text";
$form_fields["email"]="email";
$form_fields["phone"]="tel";
$form_fields["address1"]="text";
$form_fields["address2"]="text";
$form_fields["city"]="text";
$form_fields["state"]="text";
$form_fields["country"]="select";
$form_fields["iWantTo"]="select";
$form_fields["events"]="select";
$form_fields["shirt"]="select";
$form_fields["emergencyName"]="text";
$form_fields["emergencyPhone"]="tel";
$form_fields["paypal"]="text";
    
// FUNCTIONS
//VALIDATION AND SANITATION FUNCTIONS

function check_submitted($field_name, $field_type, &$missing_count) {

    // Check for undefined variable (not submitted) on all but checkbox
    if(!isset($_POST[$field_name])) { 
    
          $_POST[$field_name]=""; // set a default value if no value was submitted, to prevent errors
          
          if($field_type <> "checkbox") { // checkboxes usually don't have to be checked
               echo "Missing data for <strong>" . $field_name . "</strong>.<br />";
               $missing_count++;
          }
    }
    
    // For text, textarea, and select check for present but empty
    elseif($field_type == "text" || $field_type == "textarea" || $field_type == "select") { 
    
         if(trim($_POST[$field_name]) == "") {

              echo "Missing data for <strong>" . $field_name . "</strong>.<br />";
              $missing_count++;
         }  
    }
}

function sanitize($field_name, $field_type, &$field_value) {

    if($field_type == "text" || $field_type == "textarea") {
     
         $field_value = trim($field_value);
         $field_value = stripslashes(strip_tags($field_value)); // strip html tags and back slashes
         $field_value = addslashes($field_value); // escapes quote marks so they will work in SQL statements
         $_POST[$field_name] = str_replace("/","",$field_value); // removes forward slashes
    }  
}
    
// CHECK EACH FIELD FOR MISSING DATA AND SANITIZE

foreach ($form_fields as $key => $value) { // Loop through form fields. Key is the name of the field, value is type of field

     check_submitted($key, $value, $missing_count);

     sanitize($key, $value, $_POST[$key]);  
}

// exit if missing data in any but checkboxes

if($missing_count > 0) {

     echo "<br />Please <a href='register.php'>GO BACK</a> and fill in the empty form fields.<br /><br /></body></html>";
     exit;
}

// ASSIGN FORM DATA TO VARIABLES FOR EASIER HANDLING
    
$first_name = $_POST["firstName"];
$last_name = $_POST["lastName"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address_1 = $_POST["address1"];
$address_2 = $_POST["address2"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$country = $_POST["country"];
$i_want_to = $_POST["iWantTo"];
$events = $_POST["events"];
$shirt = $_POST["shirt"];
$emergency_name = $_POST["emergencyName"];
$emergency_phone = $_POST["emergencyPhone"];
$paypal = $_POST["paypal"];

// CONNECT TO DATABASE
// DATABASE TYPE NEUTRAL CONNECTION

// Define constants for database connections

define("DB_DSN", "mysql:host=localhost;dbname=ezmurphy_ace_in_the_hole;charset=utf8");
define("DB_USER", "ezmurphy_ace");
define("DB_PASS", "MultisportEvents!");

// Create a database connection

try {
     // 1. Create a database connection
     $connection = new PDO(DB_DSN,DB_USER,DB_PASS);
} 

catch (PDOException $e) {
     die("Connection failed: " . $e->getMessage());
}

// SQL STATEMENT

$sql="INSERT INTO `ezmurphy_ace_in_the_hole`.`register` (`id`, `firstName`, `lastName`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `zip`, `country`, `iWantTo`, `events`, `shirt`, `emergencyName`, `emergencyPhone`, `paypal`)" . " VALUES (NULL, '$first_name', '$last_name', '$email', $phone, '$address_1', '$address_2', '$city', '$state', $zip, '$country', '$i_want_to', '$events', '$shirt', '$emergency_name', $emergency_phone, '$paypal');"; 

// Display SQL for trouble-shooting
     
//echo "<br>2. SQL: " . $sql . "<br>";

// RUN QUERY

try {
     $result = $connection->query($sql);
} 
catch (PDOException $e) {
     die("Query failed! " . $e->getMessage());
}

// CLOSE DATABASE

if(isset($connection)) {
     $connection = null;
}

?>
    
<body id="top">
        
    <?php include_once 'includes/nav.html';?>
      
    <main>
        
    <header>
        
        <div class="tagline starter-template">
            <h1>Registration Confirmation<br> <small>Ace in the Hole Multisport Weekend</small></h1>
        </div>
        
    </header>
    
        <div class="container">
            <h2>Success!</h2>
            <p>Congratulations <?php echo $_POST["firstName"]; ?>! You are now registered for the Ace in the Hole Multisport Weekend! Please print this page as a record of your participation in the event and contact us if you have any questions about your registration.</p>
            
            <h3>Ace in the Hole Multisport Weekend<br>06/30/17 to 07/01/17<br>Portland, Oregon</h3>
            
            <table class="table text-uppercase center block">
                <tr>
                    <th>First Name</th>
                    <td><?php echo $_POST["firstName"]; ?></td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td><?php echo $_POST["lastName"]; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $_POST["email"]; ?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?php echo $_POST["phone"]; ?></td>
                </tr>
                <tr>
                    <th>Street Address</th>
                    <td><?php echo $_POST["address1"]; ?></td>
                </tr>
                <tr>
                    <th>Address Line 2</th>
                    <td><?php echo $_POST["address2"]; ?></td>
                </tr>
                <tr>
                    <th>City</th>
                    <td><?php echo $_POST["city"]; ?></td>
                </tr>
                <tr>
                    <th>State</th>
                    <td><?php echo $_POST["state"]; ?></td>
                </tr>
                <tr>
                    <th>Zip Code</th>
                    <td><?php echo $_POST["zip"]; ?></td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td><?php echo $_POST["country"]; ?></td>
                </tr>
                <tr>
                    <th>I want to:</th>
                    <td><?php echo $_POST["iWantTo"]; ?></td>
                </tr>
                <tr>
                    <th>For this event:</th>
                    <td><?php echo $_POST["events"]; ?></td>
                </tr>
                <tr>
                    <th>Tech Shirt</th>
                    <td><?php echo $_POST["shirt"]; ?></td>
                </tr>
                <tr>
                    <th>Emergency Contact Name</th>
                    <td><?php echo $_POST["emergencyName"]; ?></td>
                </tr>
                <tr>
                    <th>Emergency Contact Phone</th>
                    <td><?php echo $_POST["emergencyPhone"]; ?></td>
                </tr>
                <tr>
                    <th>Payment Received</th>
                    <td><?php echo $_POST["paypal"]; ?></td>
                </tr>
            </table>
                    
        </div>        
</main>  
      
<footer>
        
    <?php include 'includes/footer_grid.html';?>
    <?php include 'includes/footer.php';?>
        
</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Simple Weather Plugin -->
    <script src="js/jquery.simpleWeather.min.js"></script>
    <!-- Moment.js for simple weather plugin and Social feed plugin -->
    <script src="js/moment.js"></script>
    <!-- jquery color for simple weather plugin -->
    <script src="js/jquery.color.js"></script>
    <!-- Ace in the Hole .js file -->
    <script src="js/scripts.js"></script>
    
  </body>
    
</html>

