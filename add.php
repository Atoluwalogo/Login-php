<?php session_start();
// echo $_POST['username'];

// echo $_POST['password'];
$name =$_POST['username'];
$email =$_POST['email'];
$password = $_POST['password'];


// // echo md5('password');
// echo sha1('password');
$error = '';

if ($name ==""){
    $error = 'Name is required <br/>';
}
if ($email ==""){
    $error = 'email is required <br/>';
}
if ($password ==""){
    $error = 'Password is required <br/>';
    
    
} 

if ($error !=''){
header('location: classone.php');}

$password_encryption = sha1($password);

$host = '127.0.0.1';
$db_username = 'root';
$db_password = '';
$db_name= 'bip_phpclass';

$connect= new mysqli($host,$db_username,$db_password,$db_name);

if ($connect){
    echo 'connected <br/>';
    // header('location: welcome.php');
}else{
    echo 'an error occoured'. $connect->connect_error;
}

$check_db_for_email = "SELECT id FROM login_table WHERE email ='". $email ."'";
$test= $connect->query($check_db_for_email);
//  print_r ($test);
//  die();
// if($test){
    if($test->num_rows >0){
        $_SESSION['message'] = 'Account Already Eixting';
        header('location: classone.php');

    // }
}

$query_statement = "INSERT INTO login_table ( username,email,password) VALUES('$name','$email','$password_encryption')";

$try = $connect->query($query_statement);

if ($try){
   
     
    $_SESSION['message']= 'welcome to dashboard'. $name;
    $_SESSION['email']= $email;
    header('location: welcome.php');
}else{
    echo 'Not Connected to server <br/>'. $connect->error;
    header('location: classone.php');
}
