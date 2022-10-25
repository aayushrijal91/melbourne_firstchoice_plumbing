// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(() => {
    $('.service-slider-nav').slick({
        slidesToShow: 5,
        centerMode: true,
        arrows: false,
        centerPadding: "220px",
        autoplay: true,
        asNavFor: '.service-slider'
    });

    $('.service-slider').slick({
        slidesToShow: 1,
        asNavFor: '.service-slider-nav',
        arrows: false
    })
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});