<?php
session_start();
require 'config.php';

if(isset($_POST['profile-update-btn'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile_number = $_POST['mobile'];
    $address = $_POST['address'];


    $sql = "SELECT  * FROM accounts WHERE username = ?";
    
    $stmt = mysqli_stmt_init($dbc);

    if(mysqli_stmt_prepare($stmt,$sql)){

        mysqli_stmt_bind_param($stmt,"s",$_SESSION['userid']);
        mysqli_stmt_execute($stmt);
        $checkRow = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($checkRow)){
            if($name != $row['name'] && $name != NULL){
                $innersql = "UPDATE accounts SET name = '".$name."' WHERE username ='".$_SESSION['userid']."';";
                $result = $dbc->query($innersql);

                if(!$result){
                    die("Invalid query:".$dbc->error);
                }else{
                    $_SESSION['status'] = "changes made";
                }
            }

            if($email != $row['email']&& $email != NULL){
                $innersql = "UPDATE accounts SET email = '".$email."' WHERE username ='".$_SESSION['userid']."';";
                $result = $dbc->query($innersql);

                if(!$result){
                    die("Invalid query:".$dbc->error);
                }else{
                    $_SESSION['status'] = "changes made";
                }
            }

            if($password != $row['password']&& $password != NULL){
                $innersql = "UPDATE accounts SET password = '".$password."' WHERE username ='".$_SESSION['userid']."';";
                $result = $dbc->query($innersql);

                if(!$result){
                    die("Invalid query:".$dbc->error);
                }else{
                    $_SESSION['status'] = "changes made";
                }
            }

            if($mobile_number != $row['mobile']&& $mobile_number != NULL){
                $innersql = "UPDATE accounts SET tel = '".$mobile_number."' WHERE username ='".$_SESSION['userid']."';";
                $result = $dbc->query($innersql);

                if(!$result){
                    die("Invalid query:".$dbc->error);
                }else{
                    $_SESSION['status'] = "changes made";
                }
            }

            if($address != $row['address']&& $address != NULL){
                $innersql = "UPDATE accounts SET address = '".$address."' WHERE username ='".$_SESSION['userid']."';";
                $result = $dbc->query($innersql);

                if(!$result){
                    die("Invalid query:".$dbc->error);
                }else{
                    $_SESSION['status'] = "changes made";
                }
            }

            header("Location: ../WebClient/login.php");
        }
    }
}













?>