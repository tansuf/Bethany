$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip()

    $('a.dropdown-item.color1').mouseover(function() {
        $(this).addClass('text-dark');
    });

});


