var $rescont = $('.thumbs-like');
$rescont.find('a').on('click', function(e) {
    e.preventDefault();
    var $link = $(e.currentTarget);
    $.ajax({
        url: '/respuestas/1/like/'+$link.data('like'),
        method: 'POST'
    }).then(function(response) {
        $rescont.find('.likes-total').text(response.likes);
    });
});
