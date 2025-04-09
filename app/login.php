<?php
include "../Db_Connection.php";
if(isset($_POST['username']) && isset($_POST['password'])){
    function validate_input($data){
    $data= trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    $username = validate_input($_POST['username']);
    $password =validate_input($_POST['password']);

    if(empty($username)){
        $em = "username is required";
        header("location:../login.php?error=$em");
        exit();
    }else if(empty($password)){
        $em = "password is required";
        header("location:../login.php?error=$em");
        exit();
    }else{
        $sql = "SELECT * FROM user WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt = execute($username);

        if($stmt -> rowCount() == 1){
            $user = $stmt->fetch();
            $usernameOb = $user['user_name'];
            $passwordOb = $user['password'];
            $role = $user['role'];
        }
    }

}else{
    $em = "unkown error occurred";
    header("location:../login.php?error=$em");
    exit();
}
?>