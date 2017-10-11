<?php

namespace Src;
use Src\User as User;
use Src\Text as Text;
use Src\Connect as Connect;

class Bootstrap{
	public function __construct($event, array $array = NULL){
		switch($event){
			case 'session':
				return (new User(new Connect))->addToSession($array[0], $array[1]);
				break;
			case 'logOff':
				return (new User())->logOff();
				break;
			case 'updateText':
				return (new Text(new Connect))->update($array[0], $array[1]);
				break;
			default;
		}		
	}
}