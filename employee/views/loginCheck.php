<?php
session_start();

if(isset($_POST['login'])){
    
    $password = $_POST['password'];
    $username = $_POST['username'];
    
        if($username == "" || $password == ""){
            echo "enter all field";
        }else{
            if($username == $_SESSION['username']){
                header('Location: homepage.php');
            }else{
                echo "you have no account";
            }
        }

}else{
    echo "invalid request"; 
}