<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';
require '/src/forms/editForm.php';

use Src\Connect as Connect;
use Src\Routers;

(new Routers(new Connect))->load($_SERVER['REQUEST_URI']);

function requireFile(string $file, Connect $connect){
    ob_start();
    require $file;
    htmlentities(ob_get_clean(), ENT_QUOTES, 'UTF-8');
}



$nav = requireFile('src/Html/nav.php', new Connect);

echo '';

?>