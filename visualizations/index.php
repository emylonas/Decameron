<?php
	$selected = "visualizations";
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li>Visualizations</li>
</ul>

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">

<style type="text/css">
    html, body { height:100%; margin: 0; padding: 0;}
    
    footer { font-size:1em;}
    
    a { text-decoration:underline; color:#085394; }

    .title a {
        color: #451404;
    }

    p { margin: 0; }

    #grid img, #map img {
        height:100%;
        width:100%; 
    }

    .title {
        font-size:2em;
        color: #451404;
        margin-bottom: 5px;
    }

    .description {
        font-size:1.25em;
    }

    .thumbnail {
        width: 60%;
        height: 60%;
        margin: 15px auto 0 auto;
    }

    #visualizationsContainer:first-child {
        color:red;
    }

</style>
<section id="visualizationsContainer">
    <p class="title"><a href="grid/index.html">Decameron Grid</a></p>
    <p class="description">
        This is some description of the app that this thing is being described by.
    </p>
    <div id="grid" class="container thumbnail">
        <a target="_blank" href="grid/index.html">
            <img src="visualizations-grid.png" alt="Screenshot of the Decameron Grid" />
        </a>
    </div>

    <p class="title"style="margin-top:15px"><a href="grid/index.html">Decameron Map</a></p>
    <p class="description">
        More text. Even more more text this is some more text. This is some description of the app that this thing is being described by.
    </p>
    <div id="map" class="container thumbnail">
        <a target="_blank" href="map/index.html">
            <img src="visualizations-map.png" alt="Screenshot of the Decameron Map" />
        </a>
    </div>
</section>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>
