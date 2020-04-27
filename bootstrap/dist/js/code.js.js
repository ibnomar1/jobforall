$(function (){
$(window).on('scroll',function(){
if (Math.round($(window).scrollTop()) > 40) {
$('.navbar').removeClass('bg-info')
.addClass('bg-danger')
} else {
$('.navbar').removeClass('bg-danger')
.addClass('bg-info')
}
})
})


