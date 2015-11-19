(function(){
var icon1state=true;
window.addEventListener("load",init, false);
function init(){
var toggleBtn=document.getElementById('toggleBtn');
toggleBtn.addEventListener('click', toggleIcon, false);
}
function toggleIcon(){
if (!icon1state) {
document.getElementById('icon').src = "pictures/icon1.jpg";
icon1state = true;
} else {
document.getElementById('icon').src = "pictures/icon2.jpg";
icon1state = false;
}
}
})();