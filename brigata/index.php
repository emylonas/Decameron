<?php
	$selected = "brigata";
	require '../header.php';
	header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
?>

<style type="text/css">
    html, body { height:100%; margin: 0; padding: 0;}
    #map { height: 500px;}
    #tools { height:60px; background:gray; margin:0;padding:0; width:100%}
    #title {float:left;font-size:1.5em;color:white; padding:18px 10px 10px 10px;font-family:Verdana Helvetica Arial sans-serif;}
    .onoffswitch {float:right; padding:10px 10px 10px 10px;}
    .switchlabel {float:right; padding:18px 10px 10px 10px; color:white; font-size:1.5em; font-family:Verdana Helvetica Arial sans-serif;}
    footer { font-size:1em;}
</style>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li>Brigata</li>
</ul>


<div id="tools" class="container">
	<div id="title">Decameron Map</div>
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
<div id="map">Map</div>

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
<script src="<?php echo $relativePath?>brigata/decameron_map.js" type="text/javascript""></script>
	
<?php
	$last_modified =  filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>
