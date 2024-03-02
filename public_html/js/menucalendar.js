function showCalendar() {
    document.getElementById("myDropdownn").classList.toggle("show");
  }
  
  // Cierro el menu si se da click en otro lado
  window.onclick = function(event) {
    if (!event.target.matches('.droppbtn')) {
      var dropdowns = document.getElementsByClassName("dropdownn-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  } 