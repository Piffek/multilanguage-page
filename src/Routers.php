<?php
namespace Src;
use Src\Connect;
class Routers{
	private $connect;
	public function __construct(Connect $connect){
		$this->connect = $connect;
	}
	public function load($path){
		require_once __DIR__ . '/../vendor/autoload.php';
			
		if($path !== '/' && file_exists('src'.$path.'.php')){
			require_once 'src'.$path.'.php';
		}
		
		if(!file_exists('src'.$path.'.php') && $path !== '/' && $path !== '/?id=1'){
			return header('Location: '.$this->connect->config['domain']);
		}
		
	}
}