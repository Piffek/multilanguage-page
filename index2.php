<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';


use Src\Connect as Connect;
$connect = new Connect();

function requireFileAndBuffer($file, $connect){
	ob_start();
	require $file;
	return ob_get_clean();
}

$nav = requireFileAndBuffer('src/Html/nav.php', $connect);

$nav = requireFileAndBuffer('src/Html/body.php', $connect);



?>