<?php  
	
	spl_autoload_register(function($nameClass){
		if(file_exists("classes".DIRECTORY_SEPARATOR.$nameClass.".php") === true){
			require_once("classes".DIRECTORY_SEPARATOR.$nameClass.".php");
		}
	});
	
?>