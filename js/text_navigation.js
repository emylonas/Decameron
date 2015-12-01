$(function() {
	disable();
	$('select[name=day]').change(function() { disable() });
});

function DecGenerateURL(lang) {
	var day, nov, url, full_url;

	day = $('select[name=day]').val();
	nov = $('select[name=nov]').val();

	if (day == "proem" || day == "epilogue") {
		url = day;
	}
	else if (nov == "blank") {
		url = "day" + day;
	}
	else if (nov == "intro" || nov == "conclu") {
		url = "d" + day + nov;
	}
	else {
		url = "nov" + day + nov;
	}
	
	full_url = "../texts/DecShowText.php?myID=" + url + "&lang=" + lang;
	goToURL('parent', full_url);return document.return_value;
}

function FiaGenerateURL(lang) {
	var chapter, url, full_url;

	chapter = $('select[name=chapter]').val();

	
		url = "C" + chapter;
	
	
	full_url = "../texts/FiaShowText.php?myID=" + url + "&lang=" + lang;
	goToURL('parent', full_url);return document.return_value;
}

function CorGenerateURL(lang) {
	var chapter, url, full_url;

	chapter = $('select[name=chapter]').val();

	
		url = "C" + chapter;
	
	
	full_url = "../texts/CorShowText.php?myID=" + url + "&lang=" + lang;
	goToURL('parent', full_url);return document.return_value;
}

function goToURL() {
	var i, args = goToURL.arguments;
	document.return_value = false;
	
	for (i = 0; i < (args.length - 1); i += 2) {
		eval(args[i]+".location='"+args[i+1]+"'");
	}
}

function disable() {
	if ($('select[name=day]').val() == "proem" ||
		$('select[name=day]').val() == "epilogue") {
		document.text_navigation.nov.selectedIndex = 0;
		$('select[name=nov]').attr('disabled', true);
	}
	else $('select[name=nov]').removeAttr('disabled');
}
