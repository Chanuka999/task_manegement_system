<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="side-bar">
        <div class="user-p">
          <img src="img/user.png" />
          <h4>
            @<?php echo $_SESSION['username']; ?>
        </h4>
        </div>
      
<?php
        $user = "admin";

        if($user == "employee"){

        ?>
<ul>
          <li>
            <a href="#">
              <i class="fa fa-tachometer" aria-hidden="true"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
              <span>My task</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>Profile</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-bell" aria-hidden="true"></i>
              <span>Notification</span>
            </a>
          </li>
          <li>
            <a href="logout.php">
              <i class="fa fa-sign-out" aria-hidden="true"></i>
              <span>Logout</span>
            </a>
          </li>
        </ul>
        
        <?php
        } else{
           ?>
       <!--admin-->
         <ul id="navList">
          <li>
            <a href="#">
              <i class="fa fa-tachometer" aria-hidden="true"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li >
            <a href="user.php">
              <i class="fa fa-users" aria-hidden="true"></i>
              <span>Manege users</span>
            </a>
          </li>
          <li>
            <a href="create_task.php">
              <i class="fa fa-plus" aria-hidden="true"></i>
              <span>Create tasks</span>
            </a>
          </li>
          <li>
            <a href="tasks.php">
              <i class="fa fa-tasks" aria-hidden="true"></i>
              <span>All tasks</span>
            </a>
          </li>
          <li>
            <a href="notifications.php">
              <i class="fa fa-bell" aria-hidden="true"></i>
              <span>Notifications</span>
            </a>
          </li>
          <li>
            <a href="logout.php">
              <i class="fa fa-sign-out" aria-hidden="true"></i>
              <span>Logout</span>
            </a>
          </li>
        </ul>
        <?php
        }

        ?>

     
      </nav>