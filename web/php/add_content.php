<?php

session_start();

require "heroku_access.php";
$db = get_db();

if (isset($_POST["name"]) && isset($_POST["phone"])) {
   $newContact = $_POST["name"];
   $newPhone   = $_POST["phone"];
   
   try {
      $query = 'INSERT INTO preferences(contact_name, contact_phone) VALUES(:newContact, newPhone)';
      $add_contact = $db->prepare($query);
      $add_contact->bindValue(':newContact', $newContact);
      $add_contact->bindValue(':newPhone', $newPhone);
      $add_contact->execute();
   }
   catch (Exception $ex) {
      echo "ERROR: Could not create new contact in Database. Details $ex";
   }
}
else {
   echo "Nothing was added to the Database.";
}
if (isset($_POST["notes"])) {
   $newNote = $_POST["notes"];
}

header("Location: profile.php");
die();

?>
