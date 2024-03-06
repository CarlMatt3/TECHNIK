// HEADER
$(document).ready(function(){
  $('.header').height($(window).height());
})

// NAVBAR
$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});

// CONTACT US BUTTON
function toggle() {
  var messageContainer = document.querySelector('.fab-message');
  var toggleButton = messageContainer.querySelector('.fab-message__button a');
  var messageToggle = document.getElementById('fab-message-toggle');
  messageContainer.classList.toggle('is-open');
  toggleButton.classList.toggle('toggle-icon');                    
}