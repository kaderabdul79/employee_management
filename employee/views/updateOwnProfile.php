
<?php
$id = $_GET['id'];
require_once('db.php');
if(isset($_POST['EditProfile'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    if(isset($_POST['accounttype'])){
        $accounttype = $_POST['accounttype'];
        if($username == "" && $password == "" && $email == "" && $department == "" && $accounttype == ""){
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
            }elseif($accounttype == ""){
                echo "select accounttype";
            }else{
                $userinfo = [
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'department' => $department,
                    'accounttype' => $accounttype
                ];
                $conn = getConnection();
                $sql = "update users set username='{$userinfo['username']}',password='{$userinfo['password']}',email='{$userinfo['email']}',department='{$userinfo['department']}',accounttype='{$userinfo['accounttype']}' where id='{$id}'";
                 print_r($sql);
                if(mysqli_query($conn,$sql)){
                    header('Location: homepage.php');
                }else{
                    echo "failed to insert";
                }
                
            }
        }
    }else{
        echo "please, select the Account type";
    }
    
}else{
    echo "invalid request"; 
}

?>