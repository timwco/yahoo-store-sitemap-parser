<?php $urlfinal = $_GET['url']; ?>


<div id="list">
	<?php

	$xml_string = $urlfinal;
	
	//load the xml string using simplexml
	$xml = simplexml_load_file($xml_string);
	
	//loop through the each node of user
	$results = array();
	
	foreach($xml->url as $url){
	
		$link = $url->loc;
		
		echo "$link <br/>";
	
	}
	?>	
</div>