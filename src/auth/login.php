<?php
namespace Src;

use Src\Bootstrap as Bootstrap;
return (new Bootstrap('session'))->check()->addToSession($_POST['login'], $_POST['password']);

