<?php

use app\database\Connection;
use app\libraries\Template;

require '../vendor/autoload.php';

$connection = Connection::getConnetion();

$prepare = $connection->prepare('select * from users');
$prepare->execute();
$users = $prepare->fetchAll();


Template::render('home', ['name' => 'Alexandre', 'users' => $users]);
