<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color:black;
            color:whitesmoke;
        }
        p{
            color:red;
        }
        form{
            margin: 30px auto;
            border:solid black 1px;
            height:100px;
            width:300px;
            padding:20px;
            text-align:center;
            background-color:violet;
        }
        span{
            color:green;
        }
    </style>
</head>
<body>
    <?php
        if(!is_dir('files')){
            mkdir('files');
        }
        $typeError = "";
        $sizeError = "";
        $correct = "";
        if(isset($_POST['button'])){
            @$file = $_FILES['file'];

            $type = pathinfo($file['name'], PATHINFO_EXTENSION);
            //print_r($file);
            if($type != "png" && $type != "jpg" && $type != "gif"){
                $typeError = " *chose only png, jpg or gif types of files ";
            }
            if($file['size'] > 100*1024*1024){
                $sizeError = " *chosen file is too big ";
            }
            
            if(empty($typeError) && empty($sizeError)){
                move_uploaded_file($file['tmp_name'],'files/'.$file['name']);
                $correct = "File uploaded succesfully";
            }
        }
    ?>
    
    <form method="POST" enctype='multipart/form-data'>
        <input type="file" name="file">
        <br><br>
        <button name = "button">upload file</button>
        <p><?=$typeError?></p>
        <p><?=$sizeError?></p>
        <span><?=$correct?></span>
    </form>
</body>
</html>