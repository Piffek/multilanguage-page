<?php

namespace Src;
use Src\Bootstrap as Bootstrap;

return (new Bootstrap('updateTextMenu'))->check()->update(['row' => 'menu', 'text' => $_POST['text']]);