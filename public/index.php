<?php

include __DIR__ . '/../vendor/autoload.php';

session_start();

use Aplication\routes\RoutesControll;

(new RoutesControll)->process();