<?php
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
?>

<!DOCTYPE html>

<?php
	$filename = '../text_search.php';
	$relativePath = '../';

	while (!file_exists($filename)) {
		$filename = '../'.$filename;
		$relativePath = '../'.$relativePath;
	}

	switch ($selected) {
		case "the_project":
			$title = "The Project";
			break;
		case "boccaccio":
			$title = "Boccaccio";
			break;
		case "texts":
			$title = "Texts";
			break;
		case "search":
			$title = "Search";
			break;
		case "brigata":
			$title = "Brigata";
			break;
		case "plague":
			$title = "Plague";
			break;
		case "literature":
			$title = "Literature";
			break;
		case "history":
			$title = "History";
			break;
		case "society":
			$title = "Society";
			break;
		case "religion":
			$title = "Religion";
			break;
		case "arts":
			$title = "Arts";
			break;
		case "maps":
			$title = "Maps";
			break;
		case "themes_motifs":
			$title = "Themes &amp; Motifs";
			break;
		case "bibliography":
			$title = "Bibliography";
			break;
		case "pedagogy":
			$title = "Pedagogy";
			break;
		case "syllabus":
			$title = "Syllabus";
			break;
		case "visualizations":
			$title = "Visualizations";
			break;
		default:
			$title = "Home";
			break;
	}
?>

<html lang="en">
	<head>
		<title>Decameron Web | <?php echo $title ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="<?php echo $relativePath?>css/style.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo $relativePath?>css/switch.css" media="all"/>
		<link href="//cdn.rawgit.com/noelboss/featherlight/1.7.6/release/featherlight.min.css" type="text/css" rel="stylesheet" />
		<link href="//cdn.rawgit.com/noelboss/featherlight/1.7.6/release/featherlight.gallery.min.css" type="text/css" rel="stylesheet" />
		<style>
			.featherlight .featherlight-content {
				width: auto;
			}
			.featherlight-image, .featherlight-inner {
				width: 100% !important;
				height: 100% !important;
			}
		</style>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
		<!--[if lt IE 7]><script src="<?php echo $relativePath?>js/browser-check.js" type="text/javascript"></script><![endif]-->
		<script src="<?php echo $relativePath?>js/text_navigation.js" type="text/javascript"></script>
		<script src="<?php echo $relativePath?>js/functions.js" type="text/javascript"></script>
		<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.6/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.6/release/featherlight.gallery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4TU2TWevt6f17IQTSkOz1_MvDR7JRd_k&"></script>
		<script src="<?php echo $relativePath?>js/spider.min.js" type="text/javascript"></script>
	</head>

	<body>
		<div id="container">
			<div id="shadow_left"></div>
			<div id="shadow_right"></div>
			<div id="header">
				<h1><a href="http://www.brown.edu/Departments/Italian_Studies/dweb/">Decameron Web</a></h1>
				<div id="search_field">
					<script>
					  (function() {
					    var cx = '015482072865718470889:lh3mtsy_3vs';
					    var gcse = document.createElement('script');
					    gcse.type = 'text/javascript';
					    gcse.async = true;
					    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
					        '//www.google.com/cse/cse.js?cx=' + cx;
					    var s = document.getElementsByTagName('script')[0];
					    s.parentNode.insertBefore(gcse, s);
					  })();
					</script>
					<gcse:searchbox-only></gcse:searchbox-only>
				</div>
			</div>
			<div id="sidebar">
				<ul>
					<!-- Navigation -->
					<li class = "side" id="the_project"><a href="<?php echo $relativePath?>the_project/"<?php if ($selected == "the_project") print(" class=\"selected\"") ?>>The Project</a></li>
					<li class = "side" id="boccaccio"><a href="<?php echo $relativePath?>boccaccio/life1_en.php"<?php if ($selected == "boccaccio") print(" class=\"selected\"") ?>>Boccaccio</a></li>
					<li class = "side" id="texts"><a href="<?php echo $relativePath?>texts/"<?php if ($selected == "texts") print(" class=\"selected\"") ?>>Texts</a></li>
					<li class = "side" id="brigata"><a href="<?php echo $relativePath?>brigata/"<?php if ($selected == "brigata") print(" class=\"selected\"") ?>>Brigata</a></li>
					<li class = "side" id="plague"><a href="<?php echo $relativePath?>plague/"<?php if ($selected == "plague") print(" class=\"selected\"") ?>>Plague</a></li>
					<li class = "side" id="literature"><a href="<?php echo $relativePath?>literature/"<?php if ($selected == "literature") print(" class=\"selected\"") ?>>Literature</a></li>
					<li class = "side" id="history"><a href="<?php echo $relativePath?>history/"<?php if ($selected == "history") print(" class=\"selected\"") ?>>History</a></li>
					<li class = "side" id="society"><a href="<?php echo $relativePath?>society/"<?php if ($selected == "society") print(" class=\"selected\"") ?>>Society</a></li>
					<li class = "side" id="religion"><a href="<?php echo $relativePath?>religion/"<?php if ($selected == "religion") print(" class=\"selected\"") ?>>Religion</a></li>
					<li class = "side" id="arts"><a href="<?php echo $relativePath?>arts/"<?php if ($selected == "arts") print(" class=\"selected\"") ?>>Arts</a></li>
					<li class = "side" id="maps"><a href="<?php echo $relativePath?>images/maps/maps.php"<?php if ($selected == "maps") print(" class=\"selected\"") ?>>Maps</a></li>
					<li class = "side" id="themes_motifs"><a href="<?php echo $relativePath?>themes_motifs/"<?php if ($selected == "themes_motifs") print(" class=\"selected\"") ?>>Themes/Motifs</a></li>
					<li class = "side" id="bibliography"><a href="<?php echo $relativePath?>bibliography/"<?php if ($selected == "bibliography") print(" class=\"selected\"") ?>>Bibliography</a></li>
					<li class = "side" id="pedagogy"><a href="<?php echo $relativePath?>pedagogy/"<?php if ($selected == "pedagogy") print(" class=\"selected\"") ?>>Pedagogy</a></li>
					<li class = "side" id="syllabus"><a href="<?php echo $relativePath?>the_project/syllabus.php"<?php if ($selected == "syllabus") print(" class=\"selected\"") ?>>Syllabus</a></li>
					<li class = "side" id="visualizations"><a href="<?php echo $relativePath?>visualizations/"<?php if ($selected == "visualizations") print(" class=\"selected\"") ?>>Visualizations</a></li>
					<!-- End -->
				</ul>

				<?php
					if ($selected == "texts") {
						if ($work !=="index") {
							include('text_search.php');
						}
					}
				?>
		</div>
		<div id="content_pane">
