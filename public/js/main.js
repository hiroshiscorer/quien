$(document).ready(function(){

    $('#juego-list .item').on('click', function() {
        $(this).toggleClass('discarded');
    });
});
