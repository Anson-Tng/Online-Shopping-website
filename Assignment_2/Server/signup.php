<?php
session_start();

if(isset($_SESSION['status'])){
    if($_SSESION['status'] == "login"){
        session_start();
        session_unset();
        session_destroy();
    }
}

$_SESSION['sign-up-status'] = "NotInitial";
// name attribute
if(isset($_POST['signup_btn'])){
    require 'config.php';

    $username = $_POST['username'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile_number = $_POST['mobile'];
    $address = $_POST['address'];

    if(empty($username) || empty($name) || empty($type) || empty($email) || empty($password) || empty($mobile_number) || empty($address)){
        // Sign up page path
        $_SESSION['sign-up-status'] = "Please fill in all sections";
        header("Location: ../WebClient/login.php");
        exit();
    }else{
        $sql = "SELECT username FROM accounts WHERE username =?";
        $stmt = mysqli_stmt_init($dbc);

        if(!mysqli_stmt_prepare($stmt,$sql)){
            // Can't connect to server
            $_SESSION['sign-up-status'] = "Server Not Connected";
            header("Location: ../WebClient/login.php");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $checkRow = $stmt -> num_rows;
            if($checkRow > 0){
                // username taken
                $_SESSION['sign-up-status'] = "Username already exists";
                header("Location: ../WebClient/login.php");
                exit();
            }else{
                $sql = "INSERT INTO accounts(username,name,tel,type,address,email,password) VALUES(?,?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($dbc);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    // Can't connect to server
                    $_SESSION['sign-up-status'] = "Cant Connect To Server :(";
                    header("Location: ../WebClient/login.php");
                }else{
                    mysqli_stmt_bind_param($stmt,"sssssss",$username,$name,$mobile_number,$type,$address,$email,$password);
                    mysqli_stmt_execute($stmt);
                    // Success
                    $_SESSION['sign-up-status'] = "Account Created";
                    header("Location: ../WebClient/login.php");
                    exit();
                }
            }
        }

    }
    mysqli_stmt_close($stmt);    
    mysqli_close($dbc);


}else{
    $_SESSION['sign-up-status'] = "WronglyAccessed";
    header("Location: ../WebClient/login.php");
    exit();
}
    

?>