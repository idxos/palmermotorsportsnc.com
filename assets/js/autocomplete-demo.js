﻿$(function() {
    'use strict';
    

    var usastatesArray = $.map(usastates, function(value, key) {
        return {
            value: value,
            data: key
        };
    });
    $.mockjax({
        url: '*',
        responseTime: 2000,
        response: function(settings) {
            var query = settings.data.query,
                queryLowerCase = query.toLowerCase(),
                re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi'),
                suggestions = $.grep(usastatesArray, function(country) {
                    return re.test(country.value);
                }),
                response = {
                    query: query,
                    suggestions: suggestions
                };
            this.responseText = JSON.stringify(response);
        }
    });
    $('#autocomplete-ajax').autocomplete({
        lookup: usastatesArray,
        lookupFilter: function(suggestion, originalQuery, queryLowerCase) {
            var re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi');
            return re.test(suggestion.value);
        },
        onSelect: function(suggestion) {
            $('#selction-ajax').html('You selected: ' + suggestion.value + ', ' + suggestion.data);
        },
        onHint: function(hint) {
            $('#autocomplete-ajax-x').val(hint);
        },
        onInvalidateSelection: function() {
            $('#selction-ajax').html('You selected: none');
        }
    });
});
