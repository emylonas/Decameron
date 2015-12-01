<?php
	$selected = "religion";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Religion</a></li>
	<li><a href="../">Religion and Popular Culture</a></li>
	<li>Some Notes on the Franciscans</li>
</ul>
<h2>Some Notes on the Franciscans</h2>
<p>This order was established by Francis of Assisi from 1206 to 1210. Its official name is the Order of Friars Minor, and they lived in convents that were located exclusively in towns. The order had a broad appeal and involved lay people in their religion. These two facts gave the friars a greater impact on the laity than other religious orders.</p>
<p>In the late thirteenth century, the tension between those who wanted to adhere strictly to the poverty of St. Francis and those who wanted to build on a secure material base broke into open conflict. A distinction between using and owning had been made, and the Franciscans had been allowed to be users but not owners. This decision was supported by the Papacy, and was based on the claim that Christ and the Apostles didn't own any property. In 1274 this practice began to cause open conflict, and the pope at the time came to declare the stance supporting the poverty of the Franciscans as heretical. Some important figures in the order were imprisoned, other members were burned. In 1323 the Franciscans officially became a propertied order, though they had fought against this ruling by the Pope.</p>
<p>(M.B.)</p>

<?php
	include 'relatedPages.php';
?>
	
<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
