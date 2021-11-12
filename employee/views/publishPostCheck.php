<?php
require_once('db.php');
if(isset($_POST['uploadpost'])){
    $posttitle = $_POST['posttitle'];
    $description = $_POST['description'];
    $thumbnail = $_FILES['thumbnail'];
    $authorname = $_POST['authorname'];
    
    if(isset($_POST['viralpost']) || isset($_POST['admissiontest']) || isset($_POST['facebook']) || isset($_POST['bangladesh'])){
        $viralpost = isset($_POST['viralpost']);
        $admissiontest = isset($_POST['admissiontest']);
        $facebook = isset($_POST['facebook']);
        $bangladesh = isset($_POST['bangladesh']);
    //     $tags = [
    //     'viralpost' => $viralpost,
    //     'admissiontest' => $admissiontest,
    //     'facebook' => $facebook,
    //     'bangladesh' => $bangladesh
    //     ];
    //     foreach ($tags as $key => $value) {
            
    //         for($value;$value > 2;$value++){
    //             echo $key;
    //         }echo $value;echo $key;
            
    //     }
    // }else{
    //     echo "please select tag";
    // }
    //$key.' '.
    // $viralpost = $_POST['viralpost'];
    // $admissiontest = $_POST['admissiontest'];
    // $facebook = $_POST['facebook'];
    // $bangladesh = $_POST['bangladesh'];
    // $tags = [
    //     'viralpost' => '$viralpost',
    //     'admissiontest' => '$admissiontest',
    //     'facebook' => '$facebook',
    //     'bangladesh' => '$bangladesh'
    // ];
    // foreach ($tags as $key => $value) {
    //     echo $key.' '.$value;
    // }
    // echo $viralpost;
    echo $posttitle;
}else{
    header('Location: uploadPost.php');
}



?>