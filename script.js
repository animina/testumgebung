var form = document.forms[0]
    ok = document.getElementById("okButton");
    vorname = document.getElementById("vorname");
    nachname = document.getElementById("nachname");

    ok.addEventListener('invalid', function(e){
        if(vorname.validity.valueMissing){
            e.target.setCustomValidity("Bitte tragen Sie Ihren Vornamen ein.");
        } else if(!vorname.validity.valid){
            e.target.setCustomValidity("Das ist kein akzeptierter Vorname.");
        }
        vorname.addEventListener("input", function(e){
            e.target.setCustomValidity(" ");
        });
        
    },false);






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

