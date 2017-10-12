<?php

namespace Src;
use Src\Bootstrap as Bootstrap;

return (new Bootstrap('updateTextMenu'))->check()->update(['row' => 'navBody', 'text' => $_POST['text']]);