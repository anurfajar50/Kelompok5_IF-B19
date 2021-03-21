// navbar
$(document).scroll(function(){
    if ($(window).scrollTop() > 50) {
        $('#navbar').removeClass('bg-nontrans').addClass('bg-dark');
    } 
    else if($(window).scrollTop() < 50){
        $('#navbar').removeClass('bg-dark').addClass('bg-nontrans');
    } 
});