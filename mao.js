var frmvalidator  = new Validator("contact_form");

frmvalidator.addValidation("name","req","Please provide your name");
frmvalidator.addValidation("lastname","req","Please provide your last name"); 
frmvalidator.addValidation("email","req","Please provide your email");
frmvalidator.addValidation("email","email","Please enter a valid email address");
frmvalidator.addValidation("subject","req","Please provide the subject of your interest"); 
frmvalidator.addValidation("interest","req","Please provide the interest");
frmvalidator.addValidation("message","req","Please enter your message");

function menu() {
    var menu = document.getElementById("menu");
    var icon = document.getElementById("icon");
    menu.classList.toggle("open-menu");
	icon.classList.toggle("open-icon");
}