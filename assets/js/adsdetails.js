var owl;
$(document).ready(function() {
    owl = $("#owl-demo");
    owl.owlCarousel({
        navigation: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        afterInit: afterOWLinit
    });

    function afterOWLinit() {
        $('.owl-controls .owl-page').append('<a class="item-link" href="#"/>');
        var pafinatorsLink = $('.owl-controls .item-link');
        $.each(this.owl.userItems, function(i) {
            $(pafinatorsLink[i]).css({
                'background': 'url(' + $(this).find('img').attr('src') + ') center center no-repeat',
                '-webkit-background-size': 'cover',
                '-moz-background-size': 'cover',
                '-o-background-size': 'cover',
                'background-size': 'cover'
            }).click(function() {
                owl.trigger('owl.goTo', i);
            });
        });
        $('.owl-pagination').prepend('<a href="#prev" class="prev-owl"/>');
        $('.owl-pagination').append('<a href="#next" class="next-owl"/>');
        $(".next-owl").click(function() {
            owl.trigger('owl.next');
        });
        $(".prev-owl").click(function() {
            owl.trigger('owl.prev');
        });
    }
});
