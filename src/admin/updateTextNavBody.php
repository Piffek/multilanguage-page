<?php

namespace Src;

use Src\Bootstrap as Bootstrap;

return (new Bootstrap('updateTextMenu'))->check()->update('navBody', $_POST['text']);