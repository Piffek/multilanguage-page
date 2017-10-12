<?php

namespace Src;
use Src\User as User;
use Src\Text as Text;
use Src\Connect as Connect;

class Bootstrap{
    public $obj;
	public function __construct(string $event, array $array = NULL){
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
	
	public function check(){
	    return $this->obj;
	}
}