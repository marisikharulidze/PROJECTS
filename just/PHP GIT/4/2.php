<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        form, div{
            border: solid black 1px;
            margin: 10px auto;
            padding: 20px;
            width: 420px;
        }
        p{
            border: solid black 1px;
            margin:5px auto;
            text-align:center;
            padding: 10px;
            width: 150px;
            background-color:whitesmoke;
        }
        span{
            color:red;
        }
        .green{
            color:green;
        }
    </style>
</head>
<body>
    
    <?php
        if(!is_dir("folder")){
            mkdir("folder");
        }
        @$name = $_POST["name"];
        @$text = $_POST["text"];

        if(isset($_POST["button"])){
            if(empty($name)){
                $name = "file.txt";
            }
            else{
                $name = $name.".txt";
            }
            
            $folder = scandir("folder");
            $name = date("y-m-d-h-i-s-a-").$name;
           
            $f = fopen("folder/".$name,'w');
            fwrite($f, $text);
        }

        @$error = "";
        @$messege = "";
        if(isset($_POST["buttonDel"])){
            if(!empty($name)){
                if(@!unlink("folder/".$name)){
                    $error = " *there is no such file name";
                }
                else {
                    $messege = "deleted file name : $name";
                }
            }
            else {
                $error = " *You should input a file name in order to delete it";
            }
        }
    ?>

    <form method = "POST">
        File Name : <input type="text" name="name"><br><br>
        Text : <textarea name="text" cols="40" rows="10"></textarea><br><br>
        <button name = "button" >Create File</button>
        <button name = "buttonDel" >Delete File</button>
        <span><?=$error?></span>
        <h class="green"><?=$messege?></h>
    </form>

    <div>
        <h2>Files</h2>
        <ol>
            <?php
                $folder = scandir("folder");
                for($i=2; $i<count($folder); $i++){
                    echo "<li><a href='folder/ ".$folder[$i]."'> ".$folder[$i]." </a></li>";
                    echo "<p> $folder[$i] </p>";
                }
            ?>
        </ol>
    </div>

</body>
</html>