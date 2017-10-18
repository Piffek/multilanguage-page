<?php
namespace Src;
use Src\Connect;
use Exception;

class Routers{
	private $connect;
	
	/**
	* @param Src\Connect
	**/
	public function __construct(Connect $connect){
		$this->connect = $connect;
	}
	
	/**
	* Load url path
	* @param String $path
	**/
	public function load($path){
		require_once __DIR__ . '/../vendor/autoload.php';
		
		try{
			if($path !== '/' && file_exists('src'.$path.'.php')){
				require_once 'src'.$path.'.php';
			}
			$this->pathNotExists($path);
		}catch(\Exception $exception)
		{
			echo $exception->getMessage().'<br/>';
		}
	}
	/**
	* if path not exist
	**/
	public function pathNotExists($path){
		if(!file_exists('src'.$path.'.php') && $path !== '/' && !isset($_GET['part'])){
			throw new \Exception($path. ' not found');
		}
	}
}
