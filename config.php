<?php 
/**
 * Autoload de Classes
 */



spl_autoload_register(function($class_name) {

	echo "<br> Autoload > " . $class_name . "<br>";

	$filename = "class". DIRECTORY_SEPARATOR . $class_name . ".php";

	if (file_exists($filename)) {

		echo "Require: < $filename > <br>";
		require_once($filename);

	}


});


 ?>