<?php

// Begin session for using the app with first checking for if user is still logged in
	session_start();

	require("heroku_access.php");
	$db = get_db();


	$badLogin = false;

// First check to see if we have post variables, if not, just
// continue on as always.

if (isset($_POST['loginname']) && isset($_POST['loginpass']))
{
	// they have submitted a username and password for us to check
	$username = $_POST['loginname'];
	$password = $_POST['loginpass'];
	
	// Connect to the DB
    try {
	$query = 'SELECT password, username, id FROM users WHERE username=:username';
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$result = $statement->execute();
    }
    catch (Exception $ex)
    {
        echo "ERROR: Could not reach database. Details: $ex";
        die();
    }
    
    try {
	if ($result)
	{
        try {
            $row = $statement->fetch();
            $hashedPasswordFromDB = $row['password'];
		
            if (password_verify($password, $hashedPasswordFromDB))
            {
                try {
                    // password was correct, put the user on the session, and redirect to home
                    $_SESSION['username'] = $username;
                    $_SESSION['id'] = $row['id'];
                    header("Location: profile.php");
                    die(); // we always include a die after redirects.
                }
                catch (Exception $ex) {
                    echo "ERROR: Could not open profile.php. Details: $ex";
                    die();
                }
            }
            else
            {
                $badLogin = true;
            }
        }
        catch (Exception $ex) {
            echo "ERROR: Could not validate the result of receiving username from database. Details: $ex";
            die();
        }
    }
}   
    catch(Exception $ex)
    {
        echo "ERROR: It broke! Details: $ex";
        die();
    }
}
else
{
	$badLogin = true;
}


// If we get to this point without having redirected, then it means they
// should just see the login form.
?>

<!-- Login page in order to access user account -->

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Course Support | Login</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
      <link rel="stylesheet" href="../style.css" />
      
      <!-- Used for the footer images -->
      <script src="../jquery.js"></script>
      
      <!-- Favicon -->
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
         </div>
      </div>
      
      <!-- Login Section -->
      <div class="w3-content" style="max-width:2000px;margin-top:46px">
         
         <!-- The Band Section -->
         <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
            <h2 class="w3-wide">Course Support Dashboard</h2>
            <p class="w3-opacity"><i>Login here</i></p>
            
            
            
            <!-- The Tour Section -->
            <div class="w3-black" id="tour">
               <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
                  <h2 class="w3-wide w3-center">Sign in here</h2>
                  <p class="w3-opacity w3-center"><i>If you want to gain access that is...</i></p>
                  <form action="login.php" method="post">
                     <ul class="w3-ul w3-border w3-white w3-text-grey">
                        <li class="w3-padding">Username <input type="text" size="auto" name="loginname" required/></li>
                        <li class="w3-padding">Password&nbsp; <input type="password" size="auto" name="loginpass" required /></li>
                     </ul>
                     <br/>
                     <input type="submit" />
                  </form>
                  <p>Don't have an account? Create one <a href="account_setup.php">here</a>!</p>
               </div>
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