<?php

session_start();
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
                $_SESSION['userdata'] = [
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'department' => $department,
                    'accounttype' => $accounttype,
                ];
                header('Location: signin.php');
            }
        }
    }else{
        echo "please, select the Account type";
    }
    
}else{
    echo "invalid request"; 
}

?>