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