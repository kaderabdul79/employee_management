<?php
if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $accounttype = $_POST['accounttype'];
    
    if($username == "" && $password == "" && $email == "" && $department=""){
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
            }else{
                header('Location: signin.php');
            }
        }
}else{
    echo "invalid request"; 
}

?>