<?php 

namespace Src;

use Src\Connect as Connect;

class User
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
	* Add user id to session.
	* @param String $login
	* @param String $password
	* @return header
	**/
    public function addToSession($login, $password)
    {
        
        $dataUserWhoPressSubmit = $this->checkLogin($login, $password);
        
        if(!empty($dataUserWhoPressSubmit)){
            $_SESSION['user_id'] = $dataUserWhoPressSubmit[0]['id'];
        }
		return header('Location: '.$this->connect->config['domain']);
		
    }
	
	    
	/**
	* Get user data.
	* @param String $login
	* @param String $password
	* @return array.
	**/
	 public function checkLogin($login, $password) : array{
        $stmt = $this->connect->dbh->prepare('SELECT * FROM auth WHERE login = :login AND password = :password');
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
	
		
	/**
	* Destroy user session.
	**/
	public function logOff()
	{
		session_destroy();
		
		return header('Location: '.$this->connect->config['domain']);
	}
}


