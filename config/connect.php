<?php
require './vendor/autoload.php';

use Medoo\Medoo;

$database = new Medoo([
// required
  'database_type' => 'mysql',
  'database_name' => 'rgb',
  'server' => 'localhost',
  'username' => 'root',
  'password' => '',
]);