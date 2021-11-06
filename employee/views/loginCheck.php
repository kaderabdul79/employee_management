<?php

session_start();
if(isset($_POST['login'])){
    
    $password = $_POST['password'];
    $username = $_POST['username'];
    
    if(isset($_POST['accounttype'])){
        $accounttype = $_POST['accounttype'];
        if($username == "" && $password == ""){
            echo "enter all field";
        }else{
            if($username == ""){
                echo "enter username";
            }elseif($password == ""){
                echo "enter password";
            }elseif(isset($username,$password)){
                $_SESSION['flag'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['accounttype'] = $accounttype;
                header('Location: homepage.php');
            }
            else{
                echo "Wrong credential!";
            }
        }
    }else{
        echo "please, select the Account type";
    }
    
}else{
    echo "invalid request"; 
}