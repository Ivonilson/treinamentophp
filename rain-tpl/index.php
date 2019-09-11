<?php  

require_once "vendor/autoload.php";

use Rain\Tpl;

$config = array(
	"tpl_dir"	=> "tpl/",
	"cache_dir" => "cache/"
);

Tpl::configure($config);

$tpl = new Tpl();

$tpl->assign("name", "HCODE");
$tpl->assign("version", PHP_VERSION);

//$tpl->assign("week", array("Monday", "Tuesday", "Wednesday", "Friday", "Saturday", "Sunday"));

$tpl->draw("index");

?>