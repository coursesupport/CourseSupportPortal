var visible = false;

function addContacts() {
   if (visible == false) {
      document.getElementsByName("contacts-form")[0].style.display = "block";
      document.getElementsByName("show-form")[0].value = "-";
      visible = true;
   }
   else {
      document.getElementsByName("contacts-form")[0].style.display = "none";
      document.getElementsByName("show-form")[0].value = "+";    
      visible = false;
   }
}