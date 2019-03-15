<?php



$id = $_GET['id'];

require_once('lib/dbconnection.php');

$delete_statement = "DELETE FROM login_table WHERE id=" .$id ;
$check= $connect->query($delete_statement);
 if ($check){
     echo "<pre>";
     print_r($check);
     die();
 }else{
     echo "error occoured ".$connect->error;
 }

?>