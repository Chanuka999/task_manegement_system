<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Task Manegement System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
</head>
<body class="login-body">
    
<form method="POST" action="app/login.php" class="shadow p-4">
    <h3 class="display-4">LOGIN</h3>
    <?php if(isset($_GET['error'])){
      ?>
         <div class="alert alert-danger" role="alert">
      <?php echo stripslashes($_GET['error']);  ?>
    </div>
      <?php  } ?>


      <?php if(isset($_GET['success'])){
      ?>
         <div class="alert alert-success" role="alert">
      <?php echo stripslashes($_GET['success']);  ?>
    </div>
      <?php  } 
      
      // $pass = 123;
      // $pass = password_hash($pass,PASSWORD_DEFAULT);
      // echo $pass;
      
      ?>
   
   
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">user name</label>
    <input type="text" name="username" class="form-control" >
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">login</button>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</body>
</html>