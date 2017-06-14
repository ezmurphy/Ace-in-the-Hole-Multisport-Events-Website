<!DOCTYPE html>
<html lang="en">
  
    <head>
        
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Registration Form | Ace in the Hole Multisport Events</title>

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
  
    <body id="top">
        
    <?php include_once 'includes/analyticstracking.php';?> 
    <?php include_once 'includes/nav.html';?>
      
    <main>
        
    <header>
        
        <div class="tagline starter-template">
            <h1>Registration Form<br><small>Ace in the Hole Multisport Weekend<br>06.30.2017 - 07.01.17</small></h1>
        </div>
        
    </header>
        
    <!-- Form -->
        <div class="container">
            <form id="register" name="register" method="post" action="register_action.php">
                
            <!-- Contact Information -->
                <fieldset class="form-group row">
                    <legend class="col-form-legend"><h3>Contact Information</h3></legend>
                    <label for="firstName" class="col-form-label col-sm-2">First Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-group" id="firstName" name="firstName" placeholder="Your First Name">
                    </div>
                    <label for="lastName" class="col-form-label col-sm-2">Last Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-group" id="lastName" name="lastName" placeholder="Your Last Name">
                    </div>
                
                    <label for="email" class="col-form-label col-sm-2">Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control form-group" id="email" name="email" placeholder="Your email">
                    </div>
                
                    <label for="phone" class="col-form-label col-sm-2">Phone</label>
                    <div class="col-sm-10">
                    <input type="tel" class="form-control form-group" id="phone" name="phone" placeholder="Phone Number">
                    </div>
                </fieldset>
                
            <!-- Address -->
                <fieldset class="form-group row">
                    <legend class="col-form-legend"><h3>Address</h3></legend>
                    <label for="address1" class="col-form-label col-sm-2">Street Address</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control form-group" id="address1" name="address1" placeholder="Street Address">
                    </div>
                
                    <label for="address2" class="col-form-label col-sm-2">Address Line 2</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control form-group" id="address2" name="address2" placeholder="Address Line 2" value="--">
                    </div>

                    <label for="city" class="col-form-label col-sm-2">City</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control form-group" id="city" name="city" placeholder="City / Town">
                    </div>
                
                    <label for="state" class="col-form-label col-sm-2">State</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control form-group" id="state" name="state" placeholder="State / Province / Region">
                    </div>
                
                    <label for="zip" class="col-form-label col-sm-2">Zip Code</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control form-group" id="zip" name="zip" placeholder="Zip Code / Postal Code">
                    </div>
            
                <!-- Country List -->  
                    <label for="country" class="col-form-label col-sm-2">Country</label>
                    <div class="col-sm-10">
                    <select class="form-control form-group" id="country" name="country">
                        <option selected value="">Choose ...</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="">--</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BA">Bosnia and Herzegowina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, the Democratic Republic of the</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Cote d'Ivoire</option>
                        <option value="HR">Croatia (Hrvatska)</option>
                        <option value="CU">Cuba</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="TP">East Timor</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands (Malvinas)</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="FX">France, Metropolitan</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard and Mc Donald Islands</option>
                        <option value="VA">Holy See (Vatican City State)</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran (Islamic Republic of)</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KP">Korea, Democratic People's Republic of</option>
                        <option value="KR">Korea, Republic of</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Lao People's Democratic Republic</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libyan Arab Jamahiriya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macau</option>
                        <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia, Federated States of</option>
                        <option value="MD">Moldova, Republic of</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation</option>
                        <option value="RW">Rwanda</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint LUCIA</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia (Slovak Republic)</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SH">St. Helena</option>
                        <option value="PM">St. Pierre and Miquelon</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen Islands</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syrian Arab Republic</option>
                        <option value="TW">Taiwan, Province of China</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania, United Republic of</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Viet Nam</option>
                        <option value="VG">Virgin Islands (British)</option>
                        <option value="VI">Virgin Islands (U.S.)</option>
                        <option value="WF">Wallis and Futuna Islands</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="YU">Yugoslavia</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                    </div>
                </fieldset>
                
            <!-- Participation -->    
                <fieldset class="form-group row">
                    <legend class="col-form-legend"><h3>Participation</h3></legend>
                    <label for="iWantTo" class="col-form-label col-sm-2">I want to:</label>
                    <div class="col-sm-4">
                    <select class="form-control form-group" id="iWantTo" name="iWantTo">
                        <option selected value="">Choose ...</option>
                        <option value="Register">Register</option>
                        <option value="Volunteer">Volunteer</option>
                    </select>
                    </div>
                
                    <label for="events" class="col-form-label col-sm-2">For:</label>
                        <div class="col-sm-4">
                        <select class="form-control form-group" id="events" name="events">
                            <option selected value="">Choose ...</option>
                            <option value="Long Course">Long Course</option>
                            <option value="Olympic">Olympic</option>
                            <option value="10K">10K</option>
                            <option value="Half Marathon">Half Marathon</option>
                            <option value="Sprint">Sprint</option>
                            <option value="Try-a-Tri">Try-aTri</option>
                            <option value="Splash-n-Dash">Splash-n-Dash</option>
                        </select>
                        </div>
                </fieldset>
            
            <!-- Shirt -->  
                <fieldset class="form-group row">
                    <legend class="col-form-legend"><h3>Tech Shirt</h3></legend>
                    <label for="shirt" class="col-form-label col-sm-2">Shirt Size</label>
                    <div class="col-sm-10">
                        <select class="form-control form-group" id="shirt" name="shirt">
                            <option selected value="">Choose ...</option>
                            <option value="Men\'s XS">Men's XS</option>
                            <option value="Men\'s S">Men's S</option>
                            <option value="Men\'s M">Men's M</option>
                            <option value="Men\'s L">Men's L</option>
                            <option value="Men\'s XL">Men's XL</option>
                            <option value="Men\'s XXL">Men's XXL</option>
                            <option value="Women\'s XS">Women's XS</option>
                            <option value="Women\'s S">Women's S</option>
                            <option value="Women\'s M">Women's M</option>
                            <option value="Women\'s L">Women's L</option>
                            <option value="Women\'s XL">Women's XL</option>
                            <option value="Women\'s XXL">Women's XXL</option>
                        </select>
                    </div>
                </fieldset>
                    
            <!-- Emergency Contact -->
                <fieldset class="form-group row">
                    <legend class="col-form-legend"><h3>Emergency Contact</h3></legend>
                    <label for="emergencyName" class="col-form-label col-sm-2">Full Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-group" id="emergencyName" name="emergencyName" placeholder="Emergency Contact Full Name">
                        </div>
                    <label for="emergencyPhone" class="col-form-label col-sm-2">Phone</label>
                        <div class="col-sm-10">
                        <input type="tel" class="form-control form-group" id="emergencyPhone" name="emergencyPhone" placeholder="Phone Number">
                        </div>
                </fieldset>
                
             <!-- Paypal -->
                <fieldset class="form-group row paypal">
                    <legend class="col-form-legend"><h3>Checkout</h3></legend>
                        <label for="paypal" class="col-form-label form-check-label col-sm-2">Secure Checkout with Paypal</label>
                        <div class="col-sm-10 form-check">
                            <input type="checkbox" class="form-check-input form-group" id="paypal" name="paypal" value="Paypal">
                            <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png" alt="PayPal">
                    </div>
                </fieldset>
                
                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
                <hr>
                
            </form>
        </div>
   
     <!-- End Form -->
        
        <div class="container row center-block">
            <div class="col-sm-7 center-block">
            
            <h3>Cost Includes:</h3>
            
            <ul>
                <li>Food &amp; Beer</li>
                <li>Access to the weekend's live entertainment &amp; Fitness Expo</li>
                <li>Commermorative Finisher medal</li>
                <li>Accurate Chip Timing for competitive races</li>
                <li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
                <li>Post-event party &amp; entertainment</li>
            </ul>
            
            </div>
            
            <div class="col-sm-5 center-block">
            <h3>Packet Pickup</h3>
            <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>
                
            </div>
        </div>
        
        <p class="text-center"><strong>NOTE: Tech shirts guaranteed to pre-registered participants only.</strong></p>
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
