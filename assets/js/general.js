function fixedMenu(){
    var nav = $('nav');
    if ($(window).scrollTop() > 170){
        nav.addClass('scrolled');
    }else{
        nav.removeClass('scrolled');
    }
}

$(window).scroll(function(){
    fixedMenu();
});

jQuery(document).ready(function(){
    jQuery('.skillbar').each(function(){
        jQuery(this).find('.skillbar-bar').animate({
            width:jQuery(this).attr('data-percent')
        },4000);
    });
});


function ScrollToAnchor(link){
    var anchor = link.attr('href');
    $('html, body').animate({
        scrollTop: $(anchor).offset().top - 50
    }, 1000);
    return false;
}

$('.nav-link').on('click', function(){
    ScrollToAnchor($(this));
});

