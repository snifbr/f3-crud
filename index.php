<?php

#$f3=require('lib/base.php');
require 'vendor/autoload.php';
$f3 = \Base::instance();
$f3->config('config/config.ini');
$f3->config('config/routes.ini');
$f3->run();
