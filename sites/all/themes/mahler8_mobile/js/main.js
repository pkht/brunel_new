
// When ready...
window.addEventListener("load",function() {
  // Set a timeout...
  setTimeout(function(){
    // Hide the address bar!
    window.scrollTo(0, 1);
  }, 0);
});

$(document).ready( function() {
    
    $('#menu-button a').click( function() {
        $('#navigation').slideToggle();
        $(this).toggleClass('active');
    })
    
});