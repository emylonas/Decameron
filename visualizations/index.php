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
    
    a { text-decoration:none; }

    .title a {
        color: #451404;
    }

    p { margin: 0; }

    #grid img, #map img {
        width: 300px;
        height: 280px; 
    }

    .title {
        font-size:2em;
        color: #451404;
        margin-bottom: 5px;
    }

    .description {
        font-size:1.25em;
        margin-top: 10px;
        padding: 0 10px;
    }

    .thumbnail {
        width: 90%;
        height: 90%;
        margin: 15px auto 0 auto;
    }

    #gridContainer, #mapContainer {
        width: 50%;
        float: left;
    }

</style>
<section id="visualizationsContainer">
    <div id="gridContainer">
        <p class="title"><a href="grid/index.html">Decameron Grid</a></p>
        <div id="grid" class="container thumbnail">
            <a target="_blank" href="grid/index.html">
                <img src="visualizations-grid.png" alt="Screenshot of the Decameron Grid" />
            </a>
        </div>
        <p class="description">
            This is some description of the app that this thing is being described by.
        </p>
    </div>

    <div id="mapContainer">
        <p class="title"><a href="grid/index.html">Decameron Map</a></p>
        <div id="map" class="container thumbnail">
            <a target="_blank" href="map/index.html">
                <img src="visualizations-map.png" alt="Screenshot of the Decameron Map" />
            </a>
        </div>
        <p class="description">
            More text. Even more more text this is some more text. This is some description of the app that this thing is being described by.
        </p>
    </div>
</section>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>
