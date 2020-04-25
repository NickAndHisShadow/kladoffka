$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.materialboxed').materialbox();
    $('.carousel').carousel();
    $('select').formSelect();
    $('.materialboxed').materialbox();

    $(window).scroll(function() {
        if ($(document).scrollTop() > 550) {
            $("nav").addClass("active-nav");
        } else {
            $("nav").removeClass("active-nav");
        }
    });
});
