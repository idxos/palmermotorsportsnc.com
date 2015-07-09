

$('#get-my-json-data').click(function() {
    
    $.ajax({
        url: 'data19.json',
        dataType: 'json',
        success: function(data) {
        

    var items = [];

        $.each('data', function (key, val) {
            items.push('<li id="' + key + '">' + val + '</li>');
        });


        $('<ul/>', {
            'class': 'interest-list',
            html: items.join('')
            }).appendTo('body');

            },
            statusCode: {
                404:function() {
                    alert('There was a problem');
                }
            }

    });

});