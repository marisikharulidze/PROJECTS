<!DOCTYPE html>
<html lang="en">
<head>
    <style> 
        form{
            margin: 30px auto;
            border:solid black 1px;
            width:300px;
            padding:20px;
            text-align:center;
            background-color:whitesmoke;
            color:black;
        }
        p{
            text-align:left;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_POST['button'])){
            $file = "test.txt";

            $shekitxva = $_POST['shekitxva'];
            $pasuxi1 = $_POST['pasuxi1'];
            $pasuxi2 = $_POST['pasuxi2'];
            $pasuxi3 = $_POST['pasuxi3'];
            $pasuxi4 = $_POST['pasuxi4'];
            $main = "\n\n=== \n";

            $f = fopen($file,'a');
            $kitxva = $shekitxva;
            $pasuxi1 = "\nA)".$pasuxi1;
            $pasuxi2 = "\nB)".$pasuxi2;
            $pasuxi3 = "\nC)".$pasuxi3;
            $pasuxi4 = "\nD)".$pasuxi4;"\n";
            
            fwrite($f,$main);
            fwrite($f,$kitxva);
            fwrite($f,$pasuxi1);
            fwrite($f,$pasuxi2);
            fwrite($f,$pasuxi3);
            fwrite($f,$pasuxi4);
            fclose($f);
        }
    ?>
    
    <form method="POST" enctype='multipart/form-data'>
        shekitxva : <input type="text" name="shekitxva"><br><br>
        pasuxi 1 : <input type="text" name="pasuxi1"><br><br>
        pasuxi 2 : <input type="text" name="pasuxi2"><br><br>
        pasuxi 3 : <input type="text" name="pasuxi3"><br><br>
        pasuxi 4 : <input type="text" name="pasuxi4"><br><br>
        <button name = "button">upload</button>
        <p><p><?=@$main?></p></p>
        <p><?=@$kitxva?></p>
        <p><?=@$pasuxi1?></p>
        <p><?=@$pasuxi2?></p>
        <p><?=@$pasuxi3?></p>
        <p><?=@$pasuxi4?></p>
        <p><p><?=@$main?></p></p>

        
    </form>
</body>
</html>