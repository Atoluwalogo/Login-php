<?php Session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>phpclassone</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="Inventory.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="login.css">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
        
      }

      
      /* function deletitems(){

/* swal({
 title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,})

  document.getElementById('row3').style ="display:none"
}  */ */
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  
<script>
function .alart(){
  swal ( "Oops" ,  "Something went wrong!" ,  "error" )
}

</script>


</head>
<body>
<form class="form-signin" action='add.php'method='post'>
<?php
    if(isset($_SESSION['message']) && $_SESSION['message'] != ""){
      echo "<h2 >" . $_SESSION['message'] . "</h2>" ; 
      unset($_SESSION['message']);
    }
?>
  <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

  <label for="inputEmail" class="sr-only ">Your Name</label>
  <input type="text" id="inputEmail" class="form-control " name="username" placeholder="Your Name"  autofocus><br>

  <label for="inputEmail" class="sr-only ">Email address</label>
  <input type="email" id="inputEmail" class="form-control " name="email" placeholder="Email address" required autofocus><br>
  
  <label for="inputPassword" class="sr-only mt-5">Password</label>
  <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
</form>
<!-- <div class="container"> 
    <div class="row">

    </div>


</div> -->
    
</body>
</html>

