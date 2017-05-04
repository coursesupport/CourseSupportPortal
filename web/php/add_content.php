<?php

session_start();

   $newContact = $_POST["name"];
   $newPhone   = $_POST["phone"];

if (!isset($newContact) || $newContact = "" || !isset($newPhone) || $newPhone = "") {
   header("Location: profile.php");
   die();
}

$username = htmlspecialchars($username);

try {
   require "heroku_access.php";
   $db = get_db();
   $query = 'INSERT INTO preferences(newContact, newPhone) VALUES(:newContact, :newPhone)';
   $add_contact = $db->prepare($query);
   $add_contact->bindValue(':newContact', $newContact);
   $add_contact->bindValue(':newPhone', $newPhone);
   $add_contact->execute();
}
catch (Exception $ex) {
   echo "ERROR: Could not create new contact in Database. Details $ex";
}

header("Location: login.php");
die();

?>