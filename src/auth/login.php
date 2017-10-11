<?php
namespace Src;

use Src\Bootstrap as Bootstrap;
new Bootstrap('session', [$_POST['login'], $_POST['password']]);