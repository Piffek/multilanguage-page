<?php

namespace Src;
use Src\User as User;
use Src\Text as Text;
use Src\Connect as Connect;

class Bootstrap{
	public function __construct(string $event, array $array = NULL){
		switch($event){
			case 'session':
				return (new User(new Connect))->addToSession(string $array[0], string $array[1]);
				break;
			case 'logOff':
				return (new User(new Connect)))->logOff();
				break;
			case 'updateText':
				return (new Text(new Connect))->update($array[0], $array[1]);
				break;
			default;
		}		
	}
}