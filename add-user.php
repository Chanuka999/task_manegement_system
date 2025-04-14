<?php

session_start();
if(isset($_SESSION['role'] )&& isset($_SESSION['id'])){

 
 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Add user</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    
  </head>
  <body>
    <input type="checkbox" id="checkbox" />
    <?php include "inc/header.php" ?>
    <div class="body">
      <?php include "inc/nav.php" ?>
    
      <section class="section-1" >
     <h4 class="title">users <a href="user.php">user</a></h4>
    <form class="form-1" action="app/add-user.php" method="POST">
      <p class="error"></p>
      <div class="input-holder">
        <label>Full Name</label>
        <input type="text" class="input-1" name="fullname" placeholder="Full Name"><br><br>
      </div>

      <div class="input-holder">
        <label>Username</label>
        <input type="text" class="input-1" name="username" placeholder="username"><br><br>
      </div>

      <div class="input-holder">
        <label>Password</label>
        <input type="text" class="input-1" name="password" placeholder="Password"><br><br>
      </div>

      <button class="edit-btn">Add</button>
    </form>

   

    
      </section>
    </div>
    <script type="text/javascript">
        var active = document.querySelector("#navList li:nth-child(2)");
        active.classList.add("active");
    </script>
  </body>
</html>
<?php } else{
   $em = "First login";
   header("location: login.php?error=$em");
   exit();
}
  ?>