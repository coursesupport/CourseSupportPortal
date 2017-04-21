var visible_contacts = false;
var visible_notes = false;

function addContacts() {
   if (visible_contacts == false) {
      document.getElementsByName("contacts-form")[0].style.display = "flex";
      document.getElementsByName("expand-contacts")[0].value = "-";
      visible_contacts = true;
   }
   else {
      document.getElementsByName("contacts-form")[0].style.display = "none";
      document.getElementsByName("expand-contacts")[0].value = "+";
      visible_contacts = false;
   }
}

function addNotes() {
   if (visible_notes == false) {
      document.getElementsByName("notes-form")[0].style.display = "flex";
      document.getElementsByName("expand-notes")[0].value = "-";
      visible_notes = true;
   }
   else {
      document.getElementsByName("notes-form")[0].style.display = "none";
      document.getElementsByName("expand-notes")[0].value = "+";    
      visible_notes = false;
   }
}

function passwordCheck () {
   var password = document.getElementsByName("new_pass")[0];
   var password_val = password.value;
   var check = document.getElementsByName("new_pass2")[0];
   var check_val = check.value;
   
   if (password_val !== check_val) {
      password.style.background = "red";
   }
   else {
      password.style.background = "green";
   }
}
//function addField(arg1, arg2) {
//   var form = "notes-form";
//   if (arg2 != null) {
//      form = "contacts-form";
//   }
//   if (visible_notes == false) {
//      document.getElementsByName("notes-form")[0].style.display = "flex";
//      document.getElementsByName("expand-notes")[0].value = "-";
//      visible_notes = true;
//   }
//   else {
//      document.getElementsByName("notes-form")[0].style.display = "none";
//      document.getElementsByName("expand-notes")[0].value = "+";
//      visible_notes = false;
//   }
//}