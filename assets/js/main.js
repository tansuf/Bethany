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
    $('button.glow-0').dblclick(function(e) {
        e.preventDefault();
    });

    $('.glow-0').click(function() {
        $(this).toggleClass("color2");
        $('.glow-0').not(this).removeClass("color2");
        $(this).children().addClass("fa-angle-down").toggleClass("fa-angle-right");
        $('.glow-0').not(this).children().addClass("fa-angle-right").removeClass("fa-angle-down");
        setTimeout(function() {
            $('.glow-0.color2').attr('disabled', 'disabled');
        });
        setTimeout(function() {
            $('.glow-0.color2').removeAttr('disabled');
        }, 400);
        $('.fa-angle-down').parent().click(function() {
            setTimeout(function() {
                $('.fa-angle-down').parent().attr('disabled', 'disabled');
            });
            setTimeout(function() {
                $('.fa-angle-down').parent().removeAttr('disabled');
            }, 400);
        });
    });

    //Navbar Social Links
    $('a.social_link').mouseover(function() {
        $(this).find('i.fa-stack-2x.fa-margin').removeClass('transparent');
        $(this).mouseleave(function() {
            $(this).find('i.fa-stack-2x.fa-margin').addClass('transparent');
        })
    });

    //Footer Social Links Animation
    $('a.text-color2').mouseover(function() {
        $(this).find('i.fa-stack-1x').addClass('animated bounce');
        $(this).mouseleave(function() {
            $(this).find('i.fa-stack-1x').removeClass('animated bounce');
        })
    });


});


