<?php

// Login btn
if(isset($_POST['login-btn'])){
    session_start();
    require 'config.php';


    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        $_SESSION['status'] = "Empty";
        header("Location: ../WebClient/login.php");
        exit();
    }else{
        $sql = "SELECT  * FROM accounts WHERE username = ?";
        $stmt = mysqli_stmt_init($dbc);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            // Can't connect to server
            $_SESSION['status'] = "CantConnectServer";
            header("Location: ../WebClient/login.php");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            $checkRow = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($checkRow)){
                if($password == $row['password']){
                    
                    $_SESSION['userid'] = $row['username'];
                    $_SESSION['type'] = $row['type'];
                    $_SESSION['status'] = "login";
                    header("Location: ../WebClient/login.php");
                    exit();
                }else{
                    $_SESSION['status'] = "The Password you enterd was incorrect";
                    header("Location: ../WebClient/login.php");
                    exit();
                }
            }else{
                $_SESSION['status'] = "Account Not Found, Please create a account.";
                header("Location: ../WebClient/login.php");
                exit();
            }
        }
    }


}else{
    $_SESSION['status'] = "BadAccess";
    header("Location: ../WebClient/login.php");
    exit();
}

?>