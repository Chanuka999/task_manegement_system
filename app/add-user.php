<?php
session_start();
if(isset($_SESSION['role'] )&& isset($_SESSION['id'])){

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['fullname'])){
    include "../Db_Connection.php";
    function validate_input($data){
    $data= trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    $username = validate_input($_POST['username']);
    $password =validate_input($_POST['password']);
    $fullname =validate_input($_POST['fullname']);

    if(empty($username)){
        $em = "username is required";
        header("location:../add-user.php?error=$em");
        exit();
    }else if(empty($password)){
        $em = "password is required";
        header("location:../add-user.php?error=$em");
        exit();
    }else if(empty($fullname)){
        $em = "password is required";
        header("location:../add-user.php?error=$em");
        exit();

    }else{
      include "Model/user.php";
      $data = array($fullname,$password,$username);
      insert_user($conn,$data);

    }

}else{
    $em = "unkown error occurred";
    header("location:../add-user.php?error=$em");
    exit();
}
 } else{
    $em = "First login";
    header("location: ../add-user.php?error=$em");
    exit();
 }
   