<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Course Support | Account Setup</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <!-- Used for the footer images -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="../jquery.js"></script>
      
      <!-- favicon -->
      <link rel="icon" type="image/png" href="/images/favicon.ico" />
      
      <script src="../javascript.js"></script>
      
   </head>
   <body>
      
      <!-- Tabs across the top of the page -->
      
      <!-- Navbar -->
      <div class="w3-top">
         <div class="w3-bar w3-black w3-card-2">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Course Support</a>
            <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Home</a>
            <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">About</a>
         </div>
      </div>
      
      <!-- The Band Section -->
      <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
         <h2 class="w3-wide">Welcome to the Team!</h2>
         <p class="w3-opacity"><i>Start by creating an account</i></p>
         
         
         
         <!-- The Tour Section -->
         <div class="w3-black" id="tour">
            <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
               <h2 class="w3-wide w3-center">Suit Up Here</h2>
               <p class="w3-opacity w3-center"><i>This is your first step to be coming Legen... wait for it... dary</i></p>
               <form action="account_creation.php" method="post">
                  <ul class="w3-ul w3-border w3-white w3-text-grey">
                     <li class="w3-padding">First Name <input type="text" size="auto" name="new_firstname" required /></li>
                     <li class="w3-padding">Last Name <input type="text" size="auto" name="new_lastname" required /></li>
                     <li class="w3-padding">Username <input type="text" size="auto" name="new_user" required/></li>
                     <li class="w3-padding">Password <input type="password" size="auto" name="new_pass" required /></li>
                     
                     <!-- The re-entry of password can be validated with javascript easier than with php as well as throw an alert if it is not correct. -->
                     <li class="w3-padding">Re-enter Password <input type="password" size="auto" name="new_pass2" onkeydown="passwordCheck();" required /></li>
                  </ul>
                  <br/>
                  <input type="submit" value="Submit"/>
               </form>
            </div>
         </div>
      </div>
      
      
      
      <!-- Footer -->
      <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
         <div class="w3-container icons">
            <div class="brightspace" tooltip="brightspace"></div>
            <div class="pathway"></div>
            <div class="equella"></div>
            <div class="outlook"></div>
            <div class="teamdynamix"></div>
            <div class="workplace"></div>
            <div class="coursecouncil"></div>
            <div class="workday"></div>
            <div class="portfolio"></div>
         </div>
         <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a><br>Designed by Seth Childers and Island Thunder</p>
      </footer>
      
   </body>
</html>