<?php

session_start();
if(isset($_SESSION['role'] )&& isset($_SESSION['id'])){
 include "Db_Connection.php";
 include "app/Model/User.php";
 $users = get_all_users($conn);
 
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
     <?php if($users !=0){ ?>
     <table class="main-table">
         <tr>
             <td>#</td>
             <td>Full Name</td>
             <td>Username</td>
             <td>role</td>
             <td>Action</td>
        </tr>
        <?php $i=0; foreach($users as $user){ ?>

       
        <tr>
             <td><?php echo ++$i ?></td>
             <td><?php echo $user["full_name"] ?></td>
             <td><?php echo $user["username"] ?></td>
             <td><?php echo $user["role"] ?></td>
             <td>
                <a href="edit-user.php?id=<?php echo $user['id'];?>" class="edit-btn">Edit</a>
                <a href="delete-user.php?id=<?php echo $user['id'];?>" class="delete-btn">Delete</a>
             </td>
        </tr><?php } ?>
    </table>
    <? php }else { ?>
       <h3>empty</h3>
    <?php } ?>

   

    
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