<?php

namespace Src;
use Src\Connect as Connect;

class Text{
	private $connect;
	
	public function __construct(Connect $connect){
		$this->connect = $connect;
	}
	
	public function update(array $param){

	    $stmt = $this->connect->dbh->prepare('UPDATE co_uk SET '.$param['row'].' = :'.$param['row'].' WHERE id=1');
	    $stmt->bindParam(':'.$param['row'], $param['text']);
		$stmt->execute();
		return header('Location: '.$this->connect->config['domain']);
	}
}