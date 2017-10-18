<?php

namespace Src;
use Src\Bootstrap as Bootstrap;

return (new Bootstrap('updateTextMenu'))->check()->update( 'menu', $_POST['text']);