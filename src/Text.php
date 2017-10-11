<?php

namespace Src;
use Src\Connect as Connect;

class Text{
	private $connect;
	
	public function __construct(Connect $connect){
		$this->connect = $connect;
	}
	
	public function update(string $row, string $text){

		$stmt = $this->connect->dbh->prepare('UPDATE co_uk SET '.$row.' = :'.$row.' WHERE id=1');
		$stmt->bindParam(':'.$row, $text);
		$stmt->execute();
		return header('Location: '.$this->connect->config['domain']);
	}
}