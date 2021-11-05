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
            }elseif(isset($_SESSION['userdata'])){
                if($_SESSION['userdata']['username'] == $username && $_SESSION['userdata']['password'] == $password && $_SESSION['userdata']['accounttype'] == $accounttype){
                    header('Location: homepage.php');
                }else{
                    header('location: signin.php');
                }
                
            }else{
                echo "Wrong credential!";
            }
        }
    }else{
        echo "please, select the Account type";
    }
    
}else{
    echo "invalid request"; 
}