<?php

session_start();
require_once('../Models/auth.php');
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
                // using sessions to get available data across this project app, until user closes the browser.
                $_SESSION['flag'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                // $_SESSION['accounttype'] = $accounttype;
                // using cookies
                // setcookie('username', $username, time()+3600, '/');
				// setcookie('password', $password, time()+3600, '/');
				// setcookie('accounttype', $accounttype, time()+3600, '/');
                // setcookie('flag', 'true', time()+3600, '/');

                
                $userinfo = [
                    'username' => $username,
                    'password' => $password,
                    'accounttype' => $accounttype
                ];
                
                $status = login($userinfo);
                // print_r($status);
                if($status){
                    header('Location: ../resources/views/homepage.php');
                }else{
                    echo "failed to login!";
                }
                
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