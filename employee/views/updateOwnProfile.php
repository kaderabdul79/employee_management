
<?php
session_start();
$id = $_GET['id'];
require_once('db.php');
$conn = getConnection();
$sql = "select * from users where id='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['EditProfile'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    
    
     if(isset($_POST['accounttype'])){
        $accounttype = $_POST['accounttype'];
        }else{
        $accounttype = $row['accounttype'];
    }

    if(isset($_FILES['picture'])){
        $picture = $_FILES['picture'];
        $filesize = $picture['size'];
        $filesizeinKB = $filesize/4096;
        $filename = $picture['name'];
        $filetype = $picture['type'];
        $filetempname = $picture['tmp_name'];
        if($filesizeinKB >= 100){
                    echo "file size should be minimum";
                }else{
                    if($filetype == "image/png" || $filetype == "image/jpeg"){
                        $path = 'Resources/picture/'.$filename;
                        if(!move_uploaded_file($filetempname, $path)){
                            echo "Error Occured!";
                        }
                
                    }else{
                        echo "file type should be Only PNJ and JPGE";
                    }
                }
        }else{
        $picture = $row['picture'];
    }
        if($username == "" && $password == "" && $email == "" && $department == ""){
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
                
                $userinfo = [
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'department' => $department,
                    'accounttype' => $accounttype,
                    'picture' => $filename
                ];
                $sql = "update users set username='{$userinfo['username']}',password='{$userinfo['password']}',email='{$userinfo['email']}',department='{$userinfo['department']}',accounttype='{$userinfo['accounttype']}',picture='{$userinfo['picture']}' where id='{$id}'";
                if(mysqli_query($conn,$sql)){
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    $_SESSION['accounttype'] = $accounttype;
                    header('Location: homepage.php');
                }else{
                    echo "failed to insert";
                }
                
            }
        }
    
}else{
    echo "invalid request"; 
}

?>