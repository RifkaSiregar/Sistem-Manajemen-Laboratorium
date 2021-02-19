<?php
include_once('session.php');
include_once("vendor/autoload.php");

use Medoo\Medoo;

$database = new Medoo([ 
  'database_type' => 'mysql',
  'server' => 'localhost',
  'database_name' => 'p06_db',
  'username' => 'p06_gnf2',
  'password' => 'lTwqObjBHN'
]);

 