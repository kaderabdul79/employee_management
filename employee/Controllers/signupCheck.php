<?php

// session_start();
// require_once('../Models/db.php');
require_once('../Models/auth.php');
if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $picture = $_FILES['picture'];
    
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
            }elseif($picture['name'] == "" || $picture['size'] == 0){
                echo "Upload Picture is Require*";
            }else{
                $filesize = $picture['size'];
                $filesizeinKB = $filesize/4096;
                $filename = $picture['name'];
                $filetype = $picture['type'];
                $filetempname = $picture['tmp_name'];
                if($filesizeinKB >= 100){
                    echo "file size should be minimum";
                }else{
                    if($filetype == "image/png" || $filetype == "image/jpeg"){
                        $path = '../resources/images/forLocalServer/'.$filename;
                        if(!move_uploaded_file($filetempname, $path)){
                            echo "Error Occured!";
                        }
                
                    }else{
                        echo "file type should be Only PNJ and JPGE";
                    }
                }
                $userinfo = [
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'department' => $department,
                    'accounttype' => $accounttype,
                    'picture' => $filename
                ];
                //created login func in auth.php. just calling from here and pass data
                $loginData = login($userinfo);
                
            }
        }
    }else{
        echo "please, select the Account type";
    }
    
}else{
    echo "invalid request"; 
}

?>