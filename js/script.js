var carouse_height = $('.top-bar').height();
$(window).scroll(function (){
    if ($(this).scrollTop() > carouse_height) {
        $('.navigation').addClass('fixed-nav');
        // $('.main').css('margin-top', 51);
    }else {
        $('.navigation').removeClass('fixed-nav');
        // $('.main').css('margin-top', 0);
    }
});

// jQuery Smooth Scrolling
// $('.menu a').on('click', function (e) {
//     if (this.hash !== '') {
//         e.preventDefault();
//         let hash = this.hash;
//         let page = $(this).attr('href').split('#')[0];
//         if (page == '') {
//             $('html, body').animate({
//                 scrollTop: $(hash).offset().top - 50
//             }, 800);
//         }
//         if (!page == '') {
//             location.href = page;
//             $('html, body').animate({
//                 scrollTop: $(hash).offset().top -50
//             }, 800);
//         }
//     }
// });
    // The speed of the scroll in milliseconds
const speed = 1000;

$('a[href*="#"]')
.filter((i, a) => a.getAttribute('href').startsWith('#') || a.href.startsWith(`${location.href}#`))
.unbind('click.smoothScroll')
.bind('click.smoothScroll', event => {
const targetId = event.currentTarget.getAttribute('href').split('#')[1];
const targetElement = document.getElementById(targetId);

if (targetElement) {
  event.preventDefault();
  $('html, body').animate({ scrollTop: $(targetElement).offset().top -50 }, speed);
}
});