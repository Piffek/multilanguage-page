<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';


use Src\Connect as Connect;
$connect = new Connect();

function requireFile($file, $connect){
    ob_start();
    require $file;
    ob_get_clean();
}

$nav = requireFile('src/Html/nav.php', $connect);

echo '';

?>