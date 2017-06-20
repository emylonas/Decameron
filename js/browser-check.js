function getBadBrowser(c_name) {
	if (document.cookie.length>0) {
		c_start = document.cookie.indexOf(c_name + "=");
		if (c_start != -1) {
			c_start = c_start + (c_name.length + 1);
			c_end = document.cookie.indexOf(";", c_start);
			if (c_end == -1) {
				c_end=document.cookie.length;
			}
			return unescape(document.cookie.substring(c_start,c_end));
		}
	}
	return "";
}

function setBadBrowser(c_name,value,expiredays) {
	var exdate = new Date();
	exdate.setDate(exdate.getDate() + expiredays);
	document.cookie = c_name+ "=" +escape(value) + ((expiredays==null) ? "" : ";expires=" + exdate.toGMTString());
}

if (getBadBrowser('browserWarning') != 'seen') {
	$(function(){
		$("<div id='browserWarning'>You are using an unsupported browser. Please switch to <a href='http://www.apple.com/safari/'>Safari</a>, <a href='http://getfirefox.com'>FireFox</a>, <a href='http://www.opera.com/download/'>Opera</a>,  or, if you must, <a href='http://www.microsoft.com/windows/downloads/ie/getitnow.mspx'>Internet Explorer 7</a>. Thanks!&nbsp;&nbsp;&nbsp;[<a href='#' id='warningClose'>close</a>] </div> ")
			.css({
				backgroundColor: '#fcfdde',
				'width': '100%',
				'border-bottom': 'solid 1px #000',
				'text-align': 'center',
				'padding': '5px 0px 5px 0px',
				'position': 'absolute',
				'top': '0',
				'left': '0',
				'right': '0'
			})
			.appendTo("body");

		$('#warningClose').click(function(){
			setBadBrowser('browserWarning','seen');
			$('#browserWarning').slideUp('fast');
			return false;
		});
	});
}
