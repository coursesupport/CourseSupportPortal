<?php

session_start();

require "heroku_access.php";
$db = get_db();

$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html>
   <head>
      <title>Course Support | Profile</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../style.css" />
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="../jquery.js"></script>
      
      <script src="../javascript.js"></script>
      
      
      <!-- favicon -->
      <link rel="icon" type="image/png" href="/images/favicon.ico" />
   </head>
   <body>
      
      <!-- Navbar -->
      <div class="w3-top">
         <div class="w3-bar w3-black w3-card-2">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Course Support</a>
            <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Home</a>
            <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">About</a>
            <a href="#name" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right"><em><?php echo $username/*$firstname . ' ' . $lastname*/; ?></em></a>
            <a href="../HTML/logout.html" class="w3-bar-item w3-padding-large w3-hide-small w3-right">Logout</a>
         </div>
      </div>
      
      <!-- Page content -->
      <div class="w3-content" style="max-width:2000px;margin-top:46px">
         
         <!-- Code Section -->
         <div class="w3-black">
            <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
               <h2 class="w3-wide w3-center">Welcome <?php echo $username/*$firstname . ' ' . $lastname*/; ?></h2>
               <p class="w3-opacity w3-center"><i>This is your customizable Dashboard</i></p>
            </div>
         </div>
         <div class="w3-container w3-white w3-content w3-padding-32" style="max-width:98%">
            <div class="w3-container w3-cell content">
               <p class="w3-opacity">Your code will go here...if we get it working<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in mollis sem. Vestibulum lacinia in nisl quis lacinia. Curabitur tincidunt imperdiet neque, id pulvinar magna bibendum et. Maecenas at efficitur enim. Etiam egestas mauris nunc, quis consequat neque luctus sed. Aliquam accumsan erat vitae arcu maximus, consequat sagittis justo sodales. Cras fringilla pretium purus, non euismod nulla porta vel.
                  <br/>
                  Sed ornare ante eu enim consequat tristique. Sed rutrum lectus vel diam egestas, vel aliquet mauris pulvinar. Curabitur pellentesque pharetra sapien ac pulvinar. Fusce diam felis, ornare at blandit ut, dignissim in erat. Morbi interdum faucibus nisl, nec elementum arcu tempor non. Donec suscipit metus id libero accumsan dictum. Vestibulum ut faucibus felis, at imperdiet odio. Aliquam pellentesque condimentum turpis, at dictum libero semper at. Nunc laoreet a sapien non consectetur. Suspendisse vitae lacus dolor.
                  <br/>
                  Donec in consequat sem, vitae mollis mi. Donec sed turpis tortor. Phasellus tristique ac quam at rhoncus. Suspendisse rutrum ante quis cursus accumsan. Nam sit amet felis id tortor vehicula molestie nec eget ligula. Cras eu sollicitudin libero, sed molestie ex. Nunc bibendum ligula nisi, non rhoncus lectus rhoncus eget.</p>
            </div>
            <div class="w3-container w3-cell w3-padding-12 contacts">
               <span>
                  <h4>Contacts</h4> 
                  <input type="button" name="expand-contacts" value="+" onclick="addContacts();"/>
               </span>     
               <form name="contacts-form" action="add_content.php" method="post">
                  <input type="text" size="auto" name="name" placeholder="Name" />
                  <input type="text" size="auto" name="phone" placeholder="Phone number" />
                  <input type="submit" value="Add" />
               </form>
               
               <span>
                  <h4>Notes</h4>
                  <input type="button" name="expand-notes" value="+" onclick="addNotes();"/>
               </span>
               <form name="notes-form" action="" method="post">
                  <textarea type="text" size="auto" name="notes" placeholder="Note"></textarea>
                  <input type="submit" value="Add" />
               </form>
            </div>
         </div>
      </div>
      <!-- End Page Content -->
      
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