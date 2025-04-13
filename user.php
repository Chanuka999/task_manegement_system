<?php

session_start();
if(isset($_SESSION['role'] )&& isset($_SESSION['id'])){

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Manege users</title>
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
     <h4 class="title">Manege users <a href="add-user.php">Add user</a></h4>
     <table>
         <tr>
             <td>#</td>
             <td>Full Name</td>
             <td>Username</td>
             <td>role</td>
             <td>Action</td>
        </tr>
        <tr>
             <td>1</td>
             <td>Elias</td>
             <td>elias</td>
             <td>Employee</td>
             <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
             </td>
        </tr>
    </table>

   

    
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