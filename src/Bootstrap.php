<?php 

namespace Src;
use Src\Database\Connect as Connect;
class Bootstrap{
    public function __construct(){
       $data = include 'config.php';
       $this->connect = new Connect($data);
    }
    
    public function content(){
        return $this->connect->nav();
    }
}

?>