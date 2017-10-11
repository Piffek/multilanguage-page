<?php
namespace Src;
use Src\Bootstrap as Bootstrap;


class Login{
	public function __construct($login, $password){
		$this->login = $login;
		$this->password = $password;
		new Bootstrap('session', [$login, $password]);
	}
}
new Login($_POST['login'], $_POST['password']);