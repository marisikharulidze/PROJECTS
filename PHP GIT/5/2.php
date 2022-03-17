<!DOCTYPE html>
<head>
    <style>
        body{
            background-color:whitesmoke;
        }
        form{
            border: solid black 1px;
            margin: 10px auto;
            padding: 20px;
            width: 420px;
            background-color:black;
            color:white;
        }
        p{
            color:red;
            margin:10px auto;
        }
        span{
            color:green;
            margin:6px auto;
        }
        div{
            border: solid black 1px;
            margin: 10px auto;
            padding: 20px;
            width: 920px;
            background-color:black;
            color:whitesmoke;
        }
        img{
            width:220px;
            height:200px;
            margin:10px;
        }
        input{
            margin:10px auto;
        }
    </style>
</head>
<body>
    <?php
        if(!is_dir("files")){
            mkdir("files");
        }
        if(isset($_POST['upload'])){
            @$file = $_FILES['file'];

            $sizeError = "";
            $error = "";
            if($file['size'] > 50*1024*1024){
                $sizeError = " *Chosen file is too big ";
            }
            if($file['error'] == 4){
                $error = " *You have not chosen a file you want to upload";
            }
            if(empty($sizeError) && empty($error)){
                move_uploaded_file($file['tmp_name'], "files/".$file['name']);
                $correct = "File uploaded succesfully";
            }
        }
        if(isset($_POST['delete'])){
            $saxeli = $_POST['saxeli'];

            $emptyError = "";
            $noFile = "";
            if(empty($saxeli)){
                $emptyError = " *You have not chosen a file u wish to delete";
            }
            else{
                if(@!unlink("files/".$saxeli)){
                    $noFile = " *There is no such file name";
                }
                else{
                    $messege = "File has been deleted";
                }
            }
        }
    ?>

    <form method="POST" enctype='multipart/form-data'>
        <input type="file" name="file"><br><br>
        <button name="upload">upload</button>
        <p><?=@$sizeError?></p>
        <p><?=@$error?></p>
        <span><?=@$correct?></span>

        Name of the file : <input type="text" name="saxeli">
        <button name="delete">delete</button>
        <p><?=@$emptyError?></p>
        <span><?=@$messege?></span>
        <p><?=@$noFile?></p><br>
    </form>

    <div>
        <ol>
            <?php
                $folder = scandir("files");
                for($i=2; $i<count($folder); $i++){
                    echo "<li>
                            <img src='files/".$folder[$i]."'>click name to download : <a href='folder/".$folder[$i]."'download> ".$folder[$i]."</a>
                         </li>";
                }
            ?>
        </ol>
    </div>
</body>
</html>