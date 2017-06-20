// Text Labels

$(function() {
	showLabels();
	$("#toggle_labels").click(function(event) { toggleLabels(); return false; });

	// Give the div containers of images appropriate widths, necessary for IE
	//$(".image_right img, .image_left img").parent().css("width", function(n) { return $(".image_right img, .image_left img").get(n).width + 8 + "px"; });


	//$.featherlight();
	// $.Lightbox.construct({
	//
	// 	show_linkback: false,
	// 	auto_resize: false,
	// 	show_helper_text: false,
	// 	auto_scroll: 'ignore',
	//
	// 	text: {
	//
	// 		image: 'Photo'
	//
	// 		}
	//
	// });
});

function toggleLabels() {
	if ($.cookie('labels') == null) {
		$.cookie('labels', 'false');
	}
	else {
		if ($.cookie('labels') == 'false') {
			$.cookie('labels', 'true');
		}
		else $.cookie('labels', 'false')
	}

	showLabels();
}

function showLabels() {
	if ($.cookie('labels') == 'false') {
		$("#text a, #text h3").not("#text a.next_link").hide();
		$("#toggle_labels").html("Show text labels");
	}
	else {
		$("#text a, #text h3").show();
		$("#toggle_labels").html("Hide text labels");
	}
}

// florio hide and show text

function display (category) {
       var whichcategory = document.getElementById(category);
       if (whichcategory.className=="show") {
               whichcategory.className="hide";
       } else {
               whichcategory.className="show";
       }
}



// Cookies

jQuery.cookie = function(name, value, options) {
    if (typeof value != 'undefined') { // name and value given, set cookie
        options = options || {};
        if (value === null) {
            value = '';
            options = $.extend({}, options); // clone object since it's unexpected behavior if the expired property were changed
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
        }
        // NOTE Needed to parenthesize options.path and options.domain
        // in the following expressions, otherwise they evaluate to undefined
        // in the packed version for some reason...
        var path = options.path ? '; path=' + (options.path) : '';
        var domain = options.domain ? '; domain=' + (options.domain) : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else { // only name given, get cookie
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};
