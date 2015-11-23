function formValidation()
{
    var vorname = document.testRegistration.vorname;    
    var nachname = document.testRegistration.nachname;
    var strasse = document.testRegistration.strasse;
    var vorname = document.testRegistration.vorname;
    var plz = document.testRegistration.plz;
    var username = document.testRegistration.username;


if(vorname_validation(vorname)){
    
}
return false;
}

function vorname_validation(vorname) {
    var letters = /^[A-Za-z]+$/;  
    if(vorname.value.match(letters))  
    {  
    return true;  
    }  
    else  
    {  
    alert('Username must have alphabet characters only');  
    vorname.focus();  
    return false;  
    }  
}  



/*isEmptyOrDefault = function(field, defaultValue) {
    var value = $(field).val();
    if (this.value == '' || this.value == this.defaultValue) {
  // value is empty or is default value
}
};

$(document).on("click", ".okButton", function() {
    if (isEmptyOrDefault($('.defaultValue'), 'Username')) {
    alert("Please enter your username");
}
    window.confirm("Ihre Anfrage wurde gespeichert.");
});*/

