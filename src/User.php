<?php 

namespace Src;
use Src\Connect as Connect;


class User{
	private $connect;
	
	public function __construct(Connect $connect){
		$this->connect = $connect;
	}
    
    public function addToSession(string $login, string $password){
        
        $dataUserWhoPressSubmit = $this->checkLogin($login, $password);
        
        if(!empty($dataUserWhoPressSubmit)){
            $_SESSION['user_id'] = $dataUserWhoPressSubmit[0]['id'];
        }
		return header('Location: '.$this->connect->config['domain']);
		
    }
	
	public function logOff(){
		session_destroy();
		return header('Location: '.$this->connect->config['domain']);
	}
	
	 public function checkLogin($login, $password) : array{
        $stmt = $this->connect->dbh->prepare('SELECT * FROM auth WHERE login = :login AND password = :password');
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
}


