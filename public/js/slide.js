$(function() {
    $('#show-sidebar').on('click', function() {
        $(this).toggleClass('close');
        $('#nav').toggleClass('visible');
    });
});
