<?php
	require "heroku_access.php";
	$db = get_db();

	$username = $_POST["loginname"];
	$password = $_POST["password"];

//Only use if creating a new account
	$firstname = $_POST['new_firstname'];
	$lastname = $_POST['new_lastname'];

//Insert new user into the database
	if (($firstname & $lastname) != '') {
		try{
			$new_user = 'INSERT INTO users (username, password, firstname, lastname) VALUES (username= :username, password= :password, firstname= :firstname, lastname= :lastname)';
			$statement = $db->prepare($new_user);
			$statement->bindValue(':username', $username);
			$statement->bindValue(':password', $password);
			$statement->bindValue(':firstname', $firstname);
			$statement->bindValue(':lastname', $lastname);
			$make_user = $statement->fetch(PDO::FETCH_ASSOC);
			$statement->closeCursor();
			
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "<p>Database error: First try & $error_message </p>";
			exit();
		}
	}

	try {
		$userInfo = 'SELECT id, username, password FROM person WHERE username= :username AND password= :password';
		
		$statement = $db->prepare($userInfo);
		$statement->bindValue(':username', $username);
		$statement->bindValue(':password', $password);
		if (($firstname & $lastname) != '') {
			$statement->bindValue('firstname', $firstname);
			$statement->bindValue('lastname', $lastname);
		}
		$statement->execute();
		
		$user = $statement->fetch(PDO::FETCH_ASSOC);
		$statement->closeCursor();
		$id = $user['id'];
		
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo "<p>Database error: Second try & $error_message </p>";
		exit();
	}
	try {
		$sql = 'SELECT id, firstname, lastname FROM users WHERE id= :id';
		$statement = $db->prepare($sql);
		$statement->bindValue(':id', $id);
		$statement->execute();
		$user = $statement->fetch(PDO::FETCH_ASSOC);
		$statement->closeCursor();
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo "<p>Database error: Third try & $error_message </p>";
		exit();
	}
?>

<!DOCTYPE html>
<html>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {font-family: "Lato", sans-serif}
        .mySlides {display: none}
    </style>
    <body>
        
        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-black w3-card-2">
                <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Course Support</a>
                <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Home</a>
                <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">About</a>
                <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><em><?php echo $user['firstname'] + ' ' + $user['lastname']; ?></em></a>
            </div>
        </div>
        
        <!-- Page content -->
        <div class="w3-content" style="max-width:2000px;margin-top:46px">
            
            <!-- Code Section -->
            <div class="w3-black" id="tour">
                <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
                    <h2 class="w3-wide w3-center">Welcome <?php echo $user['firstname'] + ' ' + $user['lastname']; ?></h2>
                    <p class="w3-opacity w3-center"><i>This is your customizable Dashboard</i></p>
                </div>
            </div>
            <div class="w3-black" id="tour">
                <div class="w3-container w3-white w3-content w3-padding-64" style="max-width:98%">
                    <p class="w3-opacity">Your code will go here...if we get it working<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in mollis sem. Vestibulum lacinia in nisl quis lacinia. Curabitur tincidunt imperdiet neque, id pulvinar magna bibendum et. Maecenas at efficitur enim. Etiam egestas mauris nunc, quis consequat neque luctus sed. Aliquam accumsan erat vitae arcu maximus, consequat sagittis justo sodales. Cras fringilla pretium purus, non euismod nulla porta vel.
                        
                        Sed ornare ante eu enim consequat tristique. Sed rutrum lectus vel diam egestas, vel aliquet mauris pulvinar. Curabitur pellentesque pharetra sapien ac pulvinar. Fusce diam felis, ornare at blandit ut, dignissim in erat. Morbi interdum faucibus nisl, nec elementum arcu tempor non. Donec suscipit metus id libero accumsan dictum. Vestibulum ut faucibus felis, at imperdiet odio. Aliquam pellentesque condimentum turpis, at dictum libero semper at. Nunc laoreet a sapien non consectetur. Suspendisse vitae lacus dolor.
                        
                        Suspendisse tincidunt lobortis arcu, eget tempus diam semper a. Curabitur tincidunt ornare mollis. In aliquam ipsum tortor, ac lacinia libero semper eget. Nullam tempor mauris ac augue lobortis rutrum. Sed pellentesque purus vestibulum fringilla luctus. Pellentesque semper eu dui quis posuere. Donec non elit a eros ultrices vestibulum. Aenean euismod nec erat quis semper. Etiam placerat dignissim velit. Donec quis mauris commodo, lobortis dolor eget, maximus justo. Quisque vehicula, elit sit amet dictum eleifend, nunc ligula interdum urna, at porta ante arcu fringilla massa. Proin a pretium magna. Suspendisse lacinia, ex quis sagittis vestibulum, leo urna tempus eros, vel consectetur sem dolor quis arcu. Mauris ultrices ante ac posuere accumsan. Praesent gravida urna eget arcu scelerisque faucibus. Etiam consequat laoreet augue, quis euismod ante varius ut.
                        
                        Nulla rutrum quam lorem, ac vestibulum magna pulvinar et. Nam id venenatis neque. Aenean semper lobortis tellus et bibendum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sagittis id lorem et dapibus. Fusce a nisl est. Donec faucibus ipsum lobortis ultricies cursus. Sed viverra cursus eros in suscipit. Mauris laoreet vulputate justo, ut sagittis purus fringilla in. In hac habitasse platea dictumst. Fusce blandit nibh dui, ac suscipit sem lacinia ac. Sed mollis augue in lacinia sodales. Sed quis libero lorem. Sed a ante augue.
                        
                        Donec in consequat sem, vitae mollis mi. Donec sed turpis tortor. Phasellus tristique ac quam at rhoncus. Suspendisse rutrum ante quis cursus accumsan. Nam sit amet felis id tortor vehicula molestie nec eget ligula. Cras eu sollicitudin libero, sed molestie ex. Nunc bibendum ligula nisi, non rhoncus lectus rhoncus eget.</p>
                </div>
            </div>
            <!-- End Page Content -->
        </div>
        
        <!-- Footer -->
        <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
            <i class="fa fa-facebook-official w3-hover-text-indigo"></i>
            <i class="fa fa-instagram w3-hover-text-purple"></i>
            <i class="fa fa-snapchat w3-hover-text-yellow"></i>
            <i class="fa fa-pinterest-p w3-hover-text-red"></i>
            <i class="fa fa-twitter w3-hover-text-light-blue"></i>
            <i class="fa fa-linkedin w3-hover-text-indigo"></i>
            <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
        </footer>
    </body>
</html>