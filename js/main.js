// navbar
$('#menu').onePageNav({
    currentClass: 'active',
    changeHash: false,
    scrollSpeed: 750,
    scrollThreshold: 0.5,
    filter: '',
    easing: 'swing',
});
$(document).scroll(function(){
    if ($(window).scrollTop() > 50) {
        $('#navbar').removeClass('bg-nontrans').addClass('bg-dark');
    } 
    else if($(window).scrollTop() < 50){
        $('#navbar').removeClass('bg-dark').addClass('bg-nontrans');
    } 
});