<?php Session_start();
if(!isset($_SESSION['email']) || $_SESSION['email'] == "")
{
    $_SESSION['message']= "Email is Required ";
    header('location: classone.php');

}
require_once('lib/dbconnection.php');
$fetch_statement= "SELECT * FROM login_table WHERE email ='" . $_SESSION['email']."'"; 
$try= $connect->query($fetch_statement);
// echo "<pre>";
// print_r($try);
// die();

?> 
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    




</head>
<body>
    <div class="container " style= "padding-top:20px "  >
        <div class="row " >
       
       <form class="form-signin" action='logout.php' method='post'>

       <h1> <?php echo $_SESSION ['message'];?> </h1>
        <h3> Account Details </h3>

        <?php
          while($row = $try->fetch_assoc()){
            //   print_r($row);
              echo "Username :" . $row['Username'] .'<br> <br/>' ; 
              echo "Email :" . $row['Email'] .'<br> <br/>';
              echo "Password :" . $row['Password'] .'<br> <br/>';
              echo '<hr>' ;
              echo "<a href='#'class='btn btn-md btn-warning' type='submit'>Edit </a>";

              echo "<a href='delete.php?id=" . $row['Id'] ."' class='btn btn-md btn-danger ml-1'>Delete </a> <br> <hr>";
          }
        ?>
        <!-- Name: Username <br/>
        Email: email <br/>
        Password: password <br> -->
        <!-- <hr/> -->
        
        <button class="btn btn-outline-primary mt-2" >Logout </button>

       

        </div>

    </div>
    
</body>
</html>

