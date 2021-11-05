<?php

if(isset($_POST['login'])){
    
    $password = $_POST['password'];
    $username = $_POST['username'];
    $accountType = $_POST['accountType'];
    
        if($username == "" && $password == ""){
            echo "enter all field";
        }else{
            if($username == ""){
                echo "enter username";
            }elseif($password == ""){
                echo "enter password";
            }else{
                header('Location: homepage.php');
            }
        }

}else{
    echo "invalid request"; 
}