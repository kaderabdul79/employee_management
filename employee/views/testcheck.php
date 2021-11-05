<?php
session_start();

$errors = [];
$inputs = [];
const NAME_REQUIRED = 'Please enter your name';
if(isset($_POST['name'])){
    echo $_POST['name'];
}else{
unset($_SESSION['name']);
$name = $_POST['name'];
$_SESSION['name'] = $name;
$errors['name'] = NAME_REQUIRED;
$_SESSION['message'] = $errors['name'];
if(isset($_POST['name'])){
    echo "lol";
}else{
    print_r($_SESSION['message']);

}
}
//header('Location: test.php');
