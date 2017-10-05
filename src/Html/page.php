<?php 
use Src\Bootstrap;
$connect = new Bootstrap();
foreach($connect->content() as $c){
    echo $c['nav'];
}
?>