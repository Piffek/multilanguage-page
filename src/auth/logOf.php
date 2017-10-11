<?php
namespace Src;
use Src\Bootstrap as Bootstrap;


class LogOff{
	public function __construct(){
		new Bootstrap('logOff');
	}
}

new LogOff();
