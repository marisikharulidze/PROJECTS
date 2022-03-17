<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        form, div{
            border: solid black 1px;
            margin: 10px auto;
            padding: 20px;
            width: 420px;
            background-color:whitesmoke;
            color:black;
        }
        body{
            background-color:black;
            color: whitesmoke;
        }
    </style>
</head>
<body>
    
    <?php
        if(!is_dir("folder")){
            mkdir("folder");
        }
        if(isset($_POST["button"])){
            $name = $_POST["name"];
            $text = $_POST["text"];
            if(empty($name)){
                $name = "file.txt";
            }
            else{
                $name = $name.".txt";
            }
            
            $folder = scandir("folder");
            $name = date("y - m - d - h - i - s - a -   ").$name;
           
            $f = fopen("folder/".$name,'w');
            fwrite($f, $text);

        }
    ?>

    <form method = "POST">
        File Name : <input type="text" name="name"><br><br>
        Text : <textarea name="text" cols="40" rows="10"></textarea><br><br>
        <button name = "button" >Create File</button>
    </form>

    <div>
        <h2>Files</h2>
        <ol>
            <?php
                $folder = scandir("folder");
                for($i=2; $i<count($folder); $i++){
                    echo "<li><a href='folder/ ".$folder[$i]."'> ".$folder[$i]." </a></li>";
                }
            ?>
        </ol>
    </div>

</body>
</html>