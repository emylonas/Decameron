<?php
	$selected = "brigata";
	require '../header.php';
	header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
?>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">
<body>
<style type="text/css">
    html, body { height:100%; margin: 0; padding: 0;}
    #map { height: 500px;}
    #tools { height:60px; background:gray; margin:0;padding:0; width:100%}
    #title {float:left;font-size:1.5em;color:white; padding:18px 10px 10px 10px;font-family:'Open Sans' Helvetica Arial sans-serif;}
    .onoffswitch {float:right; padding:10px 10px 10px 10px;}
    .switchlabel {float:right; padding:18px 10px 10px 10px; color:white; font-size:1.5em; font-family:'Open Sans' Helvetica Arial sans-serif;}
    footer { font-size:1em;}
    #legend { font-size:1.2em;background:#C7B68A; padding:10px; width:120px; font-family:'Open Sans' Helvetica Arial sans-serif; 
    border:1px solid gray;}
    .colorbox { height: 10px; width:15px; background:black; display:inline-block; margin-right: 5px;}
    a {text-decoration:underline; color:#085394;}
    .box-image { max-width:450px; max-height:350px;}
    .narr { color:black; padding-top:2px;padding-right:20px;padding-left:5px; text-decoration:none;}
    .narr:hover {
        cursor:pointer;
        cursor:hand;
        background-color:white !important;
        text-decoration:none !important;
        font-weight:bold !important;
        border:1px solid gray !important;
        border-radius:5px !important;
    }
    .day { color:black; text-decoration:none;}
    .day:hover {
        cursor:pointer;
        cursor:hand;
        background-color:white !important;
        text-decoration:none !important;
        font-weight:bold !important;
        border:1px solid gray !important;
        border-radius:5px !important;
    }
    #grid img {
        height:400px;
        width:500px;
    }
    #grid_header {
        width:480px;
        background-color:gray;
        padding:10px;
        color:white;
        font-size:1.4em;
    }
    #grid {
        padding:20px 20px 20px 0px;
    }

</style>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li>Brigata</li>
</ul>
<div id="grid" class="container">
    <div id="grid_header">
    <p>Decameron Grid: <a href="grid/index.html">Full Size</a></p>
    </div>
    <img src="grid/grid_screenshot.png">
</div>

<div id="tools" class="container">
	<div id="title">Decameron Map: <a target="_blank" href="Decameron/index.html">Full Size</a></div>
     <div class="onoffswitch">
      <form>
          <input type="checkbox" onclick="handleclick(this);" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
          <label class="onoffswitch-label" for="myonoffswitch">
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
          </label>
       </form>
  	  </div>
      <div class="switchlabel">Map Overlay</div>
</div>

<div id="mapcontainer">
  <div id="map">Map</div>
  <div id="legend">
    <strong>Filter by narrator</strong>
    <div><a class="narr" id="0"><div class="colorbox" style="background:#9E0B0F;"></div>Dioneo</a></div>
    <div><a class="narr" id="1"><div class="colorbox" style="background:#005826;"></div>Elissa</a></div>
    <div><a class="narr" id="2"><div class="colorbox" style="background:#FFFFFF;"></div>Emilia</a></div>
    <div><a class="narr" id="3"><div class="colorbox" style="background:#F26522;"></div>Fiammetta</a></div>
    <div><a class="narr" id="4"><div class="colorbox" style="background:#84CDEF;"></div>Filomena</a></div>
    <div><a class="narr" id="5"><div class="colorbox" style="background:#707070;"></div>Filostrato</a></div>
    <div><a class="narr" id="6"><div class="colorbox" style="background:#7CC576;"></div>Lauretta</a></div>
    <div><a class="narr" id="7"><div class="colorbox" style="background:#FFF568;"></div>Neifile</a></div>
    <div><a class="narr" id="8"><div class="colorbox" style="background:#662D91;"></div>Pampinea</a></div>
    <div><a class="narr" id="9"><div class="colorbox" style="background:#005B7F;"></div>Panfilo</a></div>
    <strong>Filter by story day</strong>
    <p><a class="day" id="0">&nbsp;1 &nbsp;</a><a class="day" id="1">&nbsp;2 &nbsp;</a><a class="day" id="2">&nbsp;3&nbsp;</a>
    <a class="day" id="3">&nbsp;4 &nbsp;</a><a class="day" id="4">&nbsp;5 &nbsp;</a><br><a class="day" id="5">&nbsp;6&nbsp;</a>    
    <a class="day" id="6">&nbsp;7 &nbsp;</a><a class="day" id="7">&nbsp;8&nbsp;</a>
    <a class="day" id="8">&nbsp;9 &nbsp;</a><a class="day" id="9">&nbsp;10 &nbsp;</a></p>
  </div>
</div>

<br><br>

<div class="image_right">
	<img src="../images/brigata/giotto_ladies.jpg" width="200" height="244" />
</div>
<h2>Members of the Brigata and their Stories</h2>
<ul class="links">
	<li><a href="pampinea.php">Pampinea</a></li>
	<li><a href="filomena.php">Filomena</a></li>
	<li><a href="neifile.php">Neifile</a></li>
	<li><a href="filostrato.php">Filostrato</a></li>
	<li><a href="fiammetta.php">Fiammetta</a></li>
	<li><a href="elissa.php">Elissa</a></li>
	<li><a href="dioneo.php">Dioneo</a></li>
	<li><a href="lauretta.php">Lauretta</a></li>
	<li><a href="emilia.php">Emilia</a></li>
	<li><a href="panfilo.php">Panfilo</a></li>
</ul>
</body>
<script src="<?php echo $relativePath?>brigata/decameron_map.js" type="text/javascript"></script>
<?php
	$last_modified =  filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>
