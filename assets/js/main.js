$(document).ready(function() {
    
    $('#accordion').accordion();

    $('#sortable').sortable();

    $('#datepicker').datepicker();

    $('[data-toggle="tooltip"]').tooltip();

    //Fixed-top js
    $(window).on('scroll', function(){

        if($(window).scrollTop()) {
            $('nav.navbar').addClass('fixed-top');

        } else {
            $('nav.navbar').removeClass('fixed-top');

        }
    });

    //Dropdown js
    $('a.dropdown-item.color1').mouseover(function() {
        $(this).addClass('text-dark');
    });

    //Accordion js
    $('.glow-0').click(function() {
        $(this).toggleClass("color2");
        $('.glow-0').not(this).removeClass("color2");
        $(this).children().addClass("fa-angle-down").toggleClass("fa-angle-right");
        $('.glow-0').not(this).children().addClass("fa-angle-right").removeClass("fa-angle-down");
    });

    //Navbar Social Links
    $('a.social_link').mouseover(function() {
        $(this).find('i.fa-stack-2x.fa-margin').removeClass('transparent');
        $(this).mouseleave(function() {
            $(this).find('i.fa-stack-2x.fa-margin').addClass('transparent');
        })
    });


});


