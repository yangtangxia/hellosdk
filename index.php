<?php
require 'vendor/autoload.php';
use HelloWorldSdk\HelloWorld;

$login = new HelloWorld();



$res = $login->sayHello();
var_dump($res);