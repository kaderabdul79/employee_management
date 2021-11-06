<?php

session_start();
require_once('db.php');
if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    
    if(isset($_POST['accounttype'])){
        $accounttype = $_POST['accounttype'];
        if($username == "" && $password == "" && $email == "" && $department == "" && $accounttype == ""){
            echo "enter all field";
        }else{
            if($username == ""){
                echo "enter username";
            }elseif($password == ""){
                echo "enter password";
            }elseif($email == ""){
                echo "enter email";
            }elseif($department == ""){
                echo "enter department";
            }elseif($accounttype == ""){
                echo "select accounttype";
            }else{
                $userinfo = [
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'department' => $department,
                    'accounttype' => $accounttype
                ];
                $conn = getConnection();
                $sql = "insert into users values('','{$userinfo['username']}','{$userinfo['password']}','{$userinfo['email']}','{$userinfo['department']}','{$userinfo['accounttype']}')";
                // print_r($sql);
                if(mysqli_query($conn,$sql)){
                    header('Location: signin.php');
                }else{
                    echo "failed to insert";
                }
                
            }
        }
    }else{
        echo "please, select the Account type";
    }
    
}else{
    echo "invalid request"; 
}

?>