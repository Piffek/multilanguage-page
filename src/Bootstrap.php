<?php

namespace Src;
use Src\User as User;
use Src\Text as Text;
use Src\Connect as Connect;

class Bootstrap{
    public $obj;
	
	/**
	* Strategy pattern.
	* @param String $event
	**/
	public function __construct(string $event){
		switch($event){
			case 'session':
			case 'logOff':
				$this->obj = new User(new Connect);
				break;
			case 'updateTextNav':
			case 'updateTextMenu':
			case 'updateTextNavBody':
			    $this->obj = new Text(new Connect);
				break;
			default;
		}		
	}
	
	/**
	* @return class
	**/
	public function check(){
	    return $this->obj;
	}
}