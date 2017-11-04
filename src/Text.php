<?php

namespace Src;

use Src\Connect as Connect;

class Text
{
	private $connect;
	
	/**
	* @param Src\Connect
	**/
	public function __construct(Connect $connect)
	{
		$this->connect = $connect;
	}
	
	/**
	* Update data.
	* @param String $row
	* @param String $text
	* @return header
	**/
	public function update(String $row, String $text
	    ){

	    $stmt = $this->connect->dbh->prepare('UPDATE co_uk SET '.$row.' = :'.$row.' WHERE id=1');
	    $stmt->bindParam(':'.$row, $text);
		$stmt->execute();
		return header('Location: '.$this->connect->config['domain']);
	}
}