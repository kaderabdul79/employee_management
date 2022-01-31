<?php
require_once('db.php');
if(isset($_POST['uploadpost'])){
    $posttitle = $_POST['posttitle'];
    $description = $_POST['description'];
    $thumbnail = $_FILES['thumbnail']['name'];
    $authorname = $_POST['authorname'];
    
    if(isset($_POST['viralpost']) || isset($_POST['admissiontest']) || isset($_POST['facebook']) || isset($_POST['bangladesh'])){
        $viralpost = isset($_POST['viralpost']);
        $admissiontest = isset($_POST['admissiontest']);
        $facebook = isset($_POST['facebook']);
        $bangladesh = isset($_POST['bangladesh']);
        $postinfo = [
            'title' => $posttitle,
            'thumbnail' => $thumbnail,
            'tags' => 'popularpost',
            'author' => $authorname,
            'description' => $description
        ];
        // DB connection and insert to post table

        $conn = getConnection();
        $sql = "insert into posts values('','{$postinfo['title']}','{$postinfo['thumbnail']}','{$postinfo['tags']}','{$postinfo['author']}','{$postinfo['description']}','','3-9-2021')";
        if(mysqli_query($conn,$sql)){
            header('Location: homepage.php');
        }else{
            echo "failed to insert";
            print_r($sql);
        
        }
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
      
    }else{
        echo "please select tag";
    }
    //db tale id title thumbnail tags author description published_date updated_date

}else{
    header('Location: uploadPost.php');
}



?>