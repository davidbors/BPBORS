//arata contentul cnd se clickuieste butonul
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

//ascunde contentul cnd se clickuieste pe langa
window.onclick = function(event) {
  if(!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for ( i = 0; i < dropdowns.length; i++){
      var openDropdown = dropdowns[i];
      if(openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
