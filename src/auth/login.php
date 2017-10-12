<?php
namespace Src;

use Src\Bootstrap as Bootstrap;
return (new Bootstrap('session'))->check()->addToSession(['login' => $_POST['login'], 'password' => $_POST['password']]);

