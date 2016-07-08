<?php
/** 
 * Mozzaic : Samp Web Advanced Development
 * Copyright (c) Mozzaic Foundation, Inc. 
 * Created by Buthers
 * 
 * Do not use this project for commercial purposes
 * Changes and innovations permitted if credits are preserved
*/

	$arrayScriptsIncluded = array(
	"Config/config.class.php", 
	"Config/config.php", 
	"Config/config.functions.php", 
	"Server/server.class.php", 
	"Server/server.php", 
	"Server/server.functions.php",
	"Vocal/vocal.class.php",
	"Vocal/vocal.php",
	"Linux/linux.class.php");

	for($scriptIncluded = 0; $scriptIncluded < sizeof($arrayScriptsIncluded); $scriptIncluded ++)
	{
		include($arrayScriptsIncluded[$scriptIncluded]);
	}
	
	$Database = new Database();
	$Server = new Server();
	$Vocal = new Vocal();
?>
