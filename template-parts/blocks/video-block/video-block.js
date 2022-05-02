/*
    Video play functionality
 */
$('#playBtn').on('click', function(e) {
    e.preventDefault();
    $(".video-wrapper iframe")[0].src += "?autoplay=1";
    $('.video-wrapper iframe').show();
    $('#videoCover').hide();
    $('#playBtn').hide();
})