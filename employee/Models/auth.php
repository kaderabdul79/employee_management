<?php
require_once('db.php');
// cann't accessible $conn is here. $conn decleared inside local scope.
// so,we can access from local to local
// $conn = getConnection();

//signup func will called when user submit data for create account
function signup($userinfo){
    $conn = getConnection();
    $sql = "insert into users values('','{$userinfo['username']}','{$userinfo['password']}','{$userinfo['email']}','{$userinfo['department']}','{$userinfo['accounttype']}','{$userinfo['picture']}')";
    if(mysqli_query($conn,$sql)){
        return true;
    }else{
        return false;
    }  
}

//func will called when user want to login
function login($userinfo){
    $conn = getConnection();
    $sql = "select * from users where username='$userinfo[username]' and password='$userinfo[password]' and accounttype='$userinfo[accounttype]'";
    // print_r($sql);
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row){
        return true;
    }else{
        return false;
    }
}



?>