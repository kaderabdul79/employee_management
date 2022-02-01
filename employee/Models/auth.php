<?php
require_once('db.php');
// cann't accessible $conn is here. $conn decleared inside local scope.
// so,we can access from local to local
// $conn = getConnection();

function login($userinfo){
    $conn = getConnection();
    $sql = "insert into users values('','{$userinfo['username']}','{$userinfo['password']}','{$userinfo['email']}','{$userinfo['department']}','{$userinfo['accounttype']}','{$userinfo['picture']}')";
    if(mysqli_query($conn,$sql)){
        header('Location: ../resources/views/signin.php');
    }else{
        echo "failed to insert";
    }  
}


?>