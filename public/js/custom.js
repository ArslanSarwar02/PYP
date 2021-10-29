$(document).ready(function() {
$('#cont').hover(function() {
    $('#cont').addClass('animate__animated animate__bounce');
});
$('.nav-link').hover(function() {
    // document.documentElement.style.setProperty('--animate-duration', '2s');
    // document.documentElement.style.setProperty('--animate-iteration', 'infinite');

    $(this).toggleClass('animate__animated animate__backInDown animate__faster ');
});
// .mousedown(function() {
//     // document.documentElement.style.setProperty('--animate-duration', '2s');
//     // document.documentElement.style.setProperty('--animate-iteration', 'infinite');
//
//     $(this).removeClass('animate__animated animate__backInDown animate__faster animate__infinite');
// });



});