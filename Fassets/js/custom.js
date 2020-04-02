$(document).ready(function () {
    

    // Parallax
    $('.masthead').parallax({
        imageSrc: 'Fassets/img/mainHeader.jpg'
    });

    $('.section-1').parallax({
        imageSrc: 'Fassets/img/section_1.jpg'
    });

    $('.section-2').parallax({
        imageSrc: 'Fassets/img/section_2.jpg'
    });

    $('.section-3').parallax({
        imageSrc: 'Fassets/img/section_3.jpg'
    });

    // Transparent navbar
    $(window).scroll(function(){
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 10);
    });


});