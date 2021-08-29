<?php
session_start();

if(isset($_POST['signin'])){
    
    $password = $_POST['password'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    
        if($username == "" || $password == "" || $email == ""){
            echo "fillup all field";
        }else{
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['email'] = $email;
            header('Location: login.php');
        }

}else{
    echo "invalid request"; 
}