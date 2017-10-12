<?php

namespace Src;
use Src\Bootstrap as Bootstrap;

return (new Bootstrap('updateTextNav'))->check()->update(['row' => 'nav', 'text' => $_POST['text']]);