<?php

session_start();
require_once('db.php');
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
                // using sessions
                $_SESSION['flag'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['accounttype'] = $accounttype;
                // using cookies
                setcookie('username', $username, time()+3600, '/');
				setcookie('password', $password, time()+3600, '/');
				setcookie('accounttype', $accounttype, time()+3600, '/');
                setcookie('flag', 'true', time()+3600, '/');

                $conn = getConnection();
                $sql = "select * from users where username='$username' and password='$password' and accounttype='$accounttype'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                if($row){
                    header('Location: homepage.php');

                }else{
                    echo "Info is wrong! try again";

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