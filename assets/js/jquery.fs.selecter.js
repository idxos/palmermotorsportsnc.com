;
(function($, window) {
    "use strict";
    var guid = 0,
        userAgent = (window.navigator.userAgent || window.navigator.vendor || window.opera),
        isFirefox = /Firefox/i.test(userAgent),
        isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(userAgent),
        isFirefoxMobile = (isFirefox && isMobile),
        $body = null;
    var options = {
        callback: $.noop,
        cover: false,
        customClass: "",
        label: "",
        external: false,
        links: false,
        mobile: false,
        trim: 0
    };
    var pub = {
        defaults: function(opts) {
            options = $.extend(options, opts || {});
            return (typeof this === 'object') ? $(this) : true;
        },
        disable: function(option) {
            return $(this).each(function(i, input) {
                var data = $(input).parent(".selecter").data("selecter");
                if (data) {
                    if (typeof option !== "undefined") {
                        var index = data.$items.index(data.$items.filter("[data-value=" + option + "]"));
                        data.$items.eq(index).addClass("disabled");
                        data.$options.eq(index).prop("disabled", true);
                    } else {
                        if (data.$selecter.hasClass("open")) {
                            data.$selecter.find(".selecter-selected").trigger("click.selecter");
                        }
                        data.$selecter.addClass("disabled");
                        data.$select.prop("disabled", true);
                    }
                }
            });
        },
        destroy: function() {
            return $(this).each(function(i, input) {
                var data = $(input).parent(".selecter").data("selecter");
                if (data) {
                    if (data.$selecter.hasClass("open")) {
                        data.$selecter.find(".selecter-selected").trigger("click.selecter");
                    }
                    if ($.fn.scroller !== undefined) {
                        data.$selecter.find(".selecter-options").scroller("destroy");
                    }
                    data.$select[0].tabIndex = data.tabIndex;
                    data.$select.find(".selecter-placeholder").remove();
                    data.$selected.remove();
                    data.$itemsWrapper.remove();
                    data.$selecter.off(".selecter");
                    data.$select.off(".selecter").removeClass("selecter-element").show().unwrap();
                }
            });
        },
        enable: function(option) {
            return $(this).each(function(i, input) {
                var data = $(input).parent(".selecter").data("selecter");
                if (data) {
                    if (typeof option !== "undefined") {
                        var index = data.$items.index(data.$items.filter("[data-value=" + option + "]"));
                        data.$items.eq(index).removeClass("disabled");
                        data.$options.eq(index).prop("disabled", false);
                    } else {
                        data.$selecter.removeClass("disabled");
                        data.$select.prop("disabled", false);
                    }
                }
            });
        },
        refresh: function() {
            return pub.update.apply($(this));
        },
        update: function() {
            return $(this).each(function(i, input) {
                var data = $(input).parent(".selecter").data("selecter");
                if (data) {
                    var index = data.index;
                    data.$allOptions = data.$select.find("option, optgroup");
                    data.$options = data.$allOptions.filter("option");
                    data.index = -1;
                    index = data.$options.index(data.$options.filter(":selected"));
                    _buildOptions(data);
                    if (!data.multiple) {
                        _update(index, data);
                    }
                }
            });
        }
    };

    function _init(opts) {
        opts = $.extend({}, options, opts || {});
        if ($body === null) {
            $body = $("body");
        }
        var $items = $(this);
        for (var i = 0, count = $items.length; i < count; i++) {
            _build($items.eq(i), opts);
        }
        return $items;
    }

    function _build($select, opts) {
        if (!$select.hasClass("selecter-element")) {
            opts = $.extend({}, opts, $select.data("selecter-options"));
            opts.multiple = $select.prop("multiple");
            opts.disabled = $select.is(":disabled");
            if (opts.external) {
                opts.links = true;
            }
            var $originalOption = $select.find("[selected]").not(":disabled"),
                originalOptionIndex = $select.find("option").index($originalOption);
            if (!opts.multiple && opts.label !== "") {
                $select.prepend('<option value="" class="selecter-placeholder" selected>' + opts.label + '</option>');
                if (originalOptionIndex > -1) {
                    originalOptionIndex++;
                }
            } else {
                opts.label = "";
            }
            var $allOptions = $select.find("option, optgroup"),
                $options = $allOptions.filter("option");
            if (!$originalOption.length) {
                $originalOption = $options.eq(0);
            }
            var originalIndex = (originalOptionIndex > -1) ? originalOptionIndex : 0,
                originalLabel = (opts.label !== "") ? opts.label : $originalOption.text(),
                wrapperTag = "div";
            opts.tabIndex = $select[0].tabIndex;
            $select[0].tabIndex = -1;
            var inner = "",
                wrapper = "";
            wrapper += '<' + wrapperTag + ' class="selecter ' + opts.customClass;
            if (isMobile) {
                wrapper += ' mobile';
            } else if (opts.cover) {
                wrapper += ' cover';
            }
            if (opts.multiple) {
                wrapper += ' multiple';
            } else {
                wrapper += ' closed';
            }
            if (opts.disabled) {
                wrapper += ' disabled';
            }
            wrapper += '" tabindex="' + opts.tabIndex + '">';
            wrapper += '</' + wrapperTag + '>';
            if (!opts.multiple) {
                inner += '<span class="selecter-selected">';
                inner += $('<span></span>').text(_trim(originalLabel, opts.trim)).html();
                inner += '</span>';
            }
            inner += '<div class="selecter-options">';
            inner += '</div>';
            $select.addClass("selecter-element").wrap(wrapper).after(inner);
            var $selecter = $select.parent(".selecter"),
                data = $.extend({
                    $select: $select,
                    $allOptions: $allOptions,
                    $options: $options,
                    $selecter: $selecter,
                    $selected: $selecter.find(".selecter-selected"),
                    $itemsWrapper: $selecter.find(".selecter-options"),
                    index: -1,
                    guid: guid++
                }, opts);
            _buildOptions(data);
            if (!data.multiple) {
                _update(originalIndex, data);
            }
            if ($.fn.scroller !== undefined) {
                data.$itemsWrapper.scroller();
            }
            data.$selecter.on("touchstart.selecter", ".selecter-selected", data, _onTouchStart).on("click.selecter", ".selecter-selected", data, _onClick).on("click.selecter", ".selecter-item", data, _onSelect).on("close.selecter", data, _onClose).data("selecter", data);
            data.$select.on("change.selecter", data, _onChange);
            if (!isMobile) {
                data.$selecter.on("focusin.selecter", data, _onFocus).on("blur.selecter", data, _onBlur);
                data.$select.on("focusin.selecter", data, function(e) {
                    e.data.$selecter.trigger("focus");
                });
            }
        }
    }

    function _buildOptions(data) {
        var html = '',
            itemTag = (data.links) ? "a" : "span",
            j = 0;
        for (var i = 0, count = data.$allOptions.length; i < count; i++) {
            var $op = data.$allOptions.eq(i);
            if ($op[0].tagName === "OPTGROUP") {
                html += '<span class="selecter-group';
                if ($op.is(":disabled")) {
                    html += ' disabled';
                }
                html += '">' + $op.attr("label") + '</span>';
            } else {
                var opVal = $op.val();
                if (!$op.attr("value")) {
                    $op.attr("value", opVal);
                }
                html += '<' + itemTag + ' class="selecter-item';
                if ($op.hasClass('selecter-placeholder')) {
                    html += ' placeholder';
                }
                if ($op.is(':selected')) {
                    html += ' selected';
                }
                if ($op.is(":disabled")) {
                    html += ' disabled';
                }
                html += '" ';
                if (data.links) {
                    html += 'href="' + opVal + '"';
                } else {
                    html += 'data-value="' + opVal + '"';
                }
                html += '>' + $("<span></span>").text(_trim($op.text(), data.trim)).html() + '</' + itemTag + '>';
                j++;
            }
        }
        data.$itemsWrapper.html(html);
        data.$items = data.$selecter.find(".selecter-item");
    }

    function _onTouchStart(e) {
        e.stopPropagation();
        var data = e.data;
        data.touchStartEvent = e.originalEvent;
        data.touchStartX = data.touchStartEvent.touches[0].clientX;
        data.touchStartY = data.touchStartEvent.touches[0].clientY;
        data.$selecter.on("touchmove.selecter", ".selecter-selected", data, _onTouchMove).on("touchend.selecter", ".selecter-selected", data, _onTouchEnd);
    }

    function _onTouchMove(e) {
        var data = e.data,
            oe = e.originalEvent;
        if (Math.abs(oe.touches[0].clientX - data.touchStartX) > 10 || Math.abs(oe.touches[0].clientY - data.touchStartY) > 10) {
            data.$selecter.off("touchmove.selecter touchend.selecter");
        }
    }

    function _onTouchEnd(e) {
        var data = e.data;
        data.touchStartEvent.preventDefault();
        data.$selecter.off("touchmove.selecter touchend.selecter");
        _onClick(e);
    }

    function _onClick(e) {
        e.preventDefault();
        e.stopPropagation();
        var data = e.data;
        if (!data.$select.is(":disabled")) {
            $(".selecter").not(data.$selecter).trigger("close.selecter", [data]);
            if (!data.mobile && isMobile && !isFirefoxMobile) {
                var el = data.$select[0];
                if (window.document.createEvent) {
                    var evt = window.document.createEvent("MouseEvents");
                    evt.initMouseEvent("mousedown", false, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
                    el.dispatchEvent(evt);
                } else if (el.fireEvent) {
                    el.fireEvent("onmousedown");
                }
            } else {
                if (data.$selecter.hasClass("closed")) {
                    _onOpen(e);
                } else if (data.$selecter.hasClass("open")) {
                    _onClose(e);
                }
            }
        }
    }

    function _onOpen(e) {
        e.preventDefault();
        e.stopPropagation();
        var data = e.data;
        if (!data.$selecter.hasClass("open")) {
            var offset = data.$selecter.offset(),
                bodyHeight = $body.outerHeight(),
                optionsHeight = data.$itemsWrapper.outerHeight(true),
                selectedOffset = (data.index >= 0) ? data.$items.eq(data.index).position() : {
                    left: 0,
                    top: 0
                };
            if (offset.top + optionsHeight > bodyHeight) {
                data.$selecter.addClass("bottom");
            }
            data.$itemsWrapper.show();
            data.$selecter.removeClass("closed").addClass("open");
            $body.on("click.selecter-" + data.guid, ":not(.selecter-options)", data, _onCloseHelper);
            _scrollOptions(data);
        }
    }

    function _onCloseHelper(e) {
        e.preventDefault();
        e.stopPropagation();
        if ($(e.currentTarget).parents(".selecter").length === 0) {
            _onClose(e);
        }
    }

    function _onClose(e) {
        e.preventDefault();
        e.stopPropagation();
        var data = e.data;
        if (data.$selecter.hasClass("open")) {
            data.$itemsWrapper.hide();
            data.$selecter.removeClass("open bottom").addClass("closed");
            $body.off(".selecter-" + data.guid);
        }
    }

    function _onSelect(e) {
        e.preventDefault();
        e.stopPropagation();
        var $target = $(this),
            data = e.data;
        if (!data.$select.is(":disabled")) {
            if (data.$itemsWrapper.is(":visible")) {
                var index = data.$items.index($target);
                if (index !== data.index) {
                    _update(index, data);
                    _handleChange(data);
                }
            }
            if (!data.multiple) {
                _onClose(e);
            }
        }
    }

    function _onChange(e, internal) {
        var $target = $(this),
            data = e.data;
        if (!internal && !data.multiple) {
            var index = data.$options.index(data.$options.filter("[value='" + _escape($target.val()) + "']"));
            _update(index, data);
            _handleChange(data);
        }
    }

    function _onFocus(e) {
        e.preventDefault();
        e.stopPropagation();
        var data = e.data;
        if (!data.$select.is(":disabled") && !data.multiple) {
            data.$selecter.addClass("focus").on("keydown.selecter-" + data.guid, data, _onKeypress);
            $(".selecter").not(data.$selecter).trigger("close.selecter", [data]);
        }
    }

    function _onBlur(e, internal, two) {
        e.preventDefault();
        e.stopPropagation();
        var data = e.data;
        data.$selecter.removeClass("focus").off("keydown.selecter-" + data.guid);
        $(".selecter").not(data.$selecter).trigger("close.selecter", [data]);
    }

    function _onKeypress(e) {
        var data = e.data;
        if (e.keyCode === 13) {
            if (data.$selecter.hasClass("open")) {
                _onClose(e);
                _update(data.index, data);
            }
            _handleChange(data);
        } else if (e.keyCode !== 9 && (!e.metaKey && !e.altKey && !e.ctrlKey && !e.shiftKey)) {
            e.preventDefault();
            e.stopPropagation();
            var total = data.$items.length - 1,
                index = (data.index < 0) ? 0 : data.index;
            if ($.inArray(e.keyCode, (isFirefox) ? [38, 40, 37, 39] : [38, 40]) > -1) {
                index = index + ((e.keyCode === 38 || (isFirefox && e.keyCode === 37)) ? -1 : 1);
                if (index < 0) {
                    index = 0;
                }
                if (index > total) {
                    index = total;
                }
            } else {
                var input = String.fromCharCode(e.keyCode).toUpperCase(),
                    letter, i;
                for (i = data.index + 1; i <= total; i++) {
                    letter = data.$options.eq(i).text().charAt(0).toUpperCase();
                    if (letter === input) {
                        index = i;
                        break;
                    }
                }
                if (index < 0 || index === data.index) {
                    for (i = 0; i <= total; i++) {
                        letter = data.$options.eq(i).text().charAt(0).toUpperCase();
                        if (letter === input) {
                            index = i;
                            break;
                        }
                    }
                }
            }
            if (index >= 0) {
                _update(index, data);
                _scrollOptions(data);
            }
        }
    }

    function _update(index, data) {
        var $item = data.$items.eq(index),
            isSelected = $item.hasClass("selected"),
            isDisabled = $item.hasClass("disabled");
        if (!isDisabled) {
            if (data.multiple) {
                if (isSelected) {
                    data.$options.eq(index).prop("selected", null);
                    $item.removeClass("selected");
                } else {
                    data.$options.eq(index).prop("selected", true);
                    $item.addClass("selected");
                }
            } else if (index > -1 && index < data.$items.length) {
                var newLabel = $item.html(),
                    newValue = $item.data("value");
                data.$selected.html(newLabel).removeClass('placeholder');
                data.$items.filter(".selected").removeClass("selected");
                data.$select[0].selectedIndex = index;
                $item.addClass("selected");
                data.index = index;
            } else if (data.label !== "") {
                data.$selected.html(data.label);
            }
        }
    }

    function _scrollOptions(data) {
        var $selected = data.$items.eq(data.index),
            selectedOffset = (data.index >= 0 && !$selected.hasClass("placeholder")) ? $selected.position() : {
                left: 0,
                top: 0
            };
        if ($.fn.scroller !== undefined) {
            data.$itemsWrapper.scroller("scroll", (data.$itemsWrapper.find(".scroller-content").scrollTop() + selectedOffset.top), 0).scroller("reset");
        } else {
            data.$itemsWrapper.scrollTop(data.$itemsWrapper.scrollTop() + selectedOffset.top);
        }
    }

    function _handleChange(data) {
        if (data.links) {
            _launch(data);
        } else {
            data.callback.call(data.$selecter, data.$select.val(), data.index);
            data.$select.trigger("change", [true]);
        }
    }

    function _launch(data) {
        var url = data.$select.val();
        if (data.external) {
            window.open(url);
        } else {
            window.location.href = url;
        }
    }

    function _trim(text, length) {
        if (length === 0) {
            return text;
        } else {
            if (text.length > length) {
                return text.substring(0, length) + "...";
            } else {
                return text;
            }
        }
    }

    function _escape(text) {
        return (typeof text === "string") ? text.replace(/([;&,\.\+\*\~':"\!\^#$%@\[\]\(\)=>\|])/g, '\\$1') : text;
    }
    $.fn.selecter = function(method) {
        if (pub[method]) {
            return pub[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {
            return _init.apply(this, arguments);
        }
        return this;
    };
    $.selecter = function(method) {
        if (method === "defaults") {
            pub.defaults.apply(this, Array.prototype.slice.call(arguments, 1));
        }
    };
})(jQuery, window);
