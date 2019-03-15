<?php

$host = '127.0.0.1';
$username = 'root';
$db_password = '';
$db_name= 'bip_phpclass';

$connect= new mysqli($host,$username,$db_password,$db_name);

if (!$connect){
   echo 'an error has occoured  <br/>';
}