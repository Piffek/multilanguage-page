<?php

namespace Src;
use Src\Bootstrap as Bootstrap;

return (new Bootstrap('updateTextNav'))->check()->update('nav', $_POST['text']);