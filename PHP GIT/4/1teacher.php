<!doctype html>
<html lang="en">
<head>
    <title>Files</title>
    <style>
        form,  .files{
            border: solid black 1px;
            margin: 10px auto;
            padding: 10px;
            width: 500px;
        }
    </style>
</head>
<body>
    <?php
//        echo is_dir("files");
//        echo "<br>";
        if(!is_dir("files")) {
            mkdir("files");
        }
        if(isset($_POST['writeButton'])){
            $fileName = $_POST['filename'];
            $text = $_POST['text'];
            if(empty($fileName)){
                $fileName = "file.txt";
            }else{
                $fileName = $fileName.".txt";
            }
            $files = scandir("files");
            if(in_array($fileName, $files)){
                $fileName = date("Ymdhisa-").$fileName;
            }
            $f = fopen("files/".$fileName, 'w');
            fwrite($f, $text);
        }
    ?>
    <div class="files">
        <h2>Files</h2>
        <ol>
            <?php
                $files = scandir("files");
                for($i=2; $i<count($files); $i++){
                    echo "<li><a href='files/".$files[$i]."' download>".$files[$i]."</a></li>";
                }
            ?>
        </ol>
    </div>
    <form method="post">
        <input type="text" name="filename"> - File Name
        <br><br>
        <textarea name="text" rows="10" cols="40"></textarea> - Text
        <br><br>
        <button name="writeButton">Write in file</button>
    </form>
</body>
</html>