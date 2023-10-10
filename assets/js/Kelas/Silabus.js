$('#sidebar-mobile').prepend("<a href='#' onclick='openNav()' class='buttons' tooltip='Daftar silabus'><i class= 'icon-center text-white-el fas fa-bars' ></i ></a > ")
$(document).ready(function () {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('#silabus').offset().top
    }, 'slow');
});