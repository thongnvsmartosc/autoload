<?php

require_once('vendor/autoload.php');
require_once('src/thongnv/hello.php');
$hello=new \thongnv\HelloWorld();
echo $hello->welcome();