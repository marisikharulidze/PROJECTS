<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        p{
            color:red;
        }
        form{
            margin: 30px auto;
            border:solid black 1px;
            width:300px;
            padding:20px;
            text-align:center;
            background-color:whitesmoke;
            color:black;
        }
        span{
            color:green;
        }
    </style>
</head>
<body>
    <?php
        // ააგეთ ფორმა, რომელიც უზრუნველყოფს შემთხვევით N მთელი რიცხვების გენერირებას [a, b]
        // შუალედიდადნ, დაგენერირებული რიცხვები ჩაწერეთ numbers.txt ფაილში. წაიკითხეთ ფაილი
        // დაბეჭდეთ ფაილიდან ყველა ორნიშნა რიცხვი.

        if(isset($_POST['button'])){
            @$file = "numbers.txt";
            
            $a = $_POST["a"];
            $b = $_POST["b"];
            $f = fopen($file,'a');
            $num = "";
            if(!empty($a) && !empty($b)){
                if(!is_numeric($a) && !is_numeric($b)){
                    $num = "input numbers only";
                }
                else{
                    $f = fopen($file,'a');
                    $text = rand($a,$b);
                    fwrite($f,$text);
                    fclose($f);

                    $message = "ornishna ricxvebi : ";
                    $done = "uploaded succesfully ";

                    $fi = fread(fopen($file,'r'),filesize($file));
                    for($i=0; $i<filesize($file); $i+=2){
                        if(@$fi[$i+1] == null){
                            echo " ";
                        }
                        else{
                            @$ornishna .= $fi[$i].$fi[$i+1]."  ";
                        }
                    }
                }
                
            }
            
        }
    ?>
    
    <form method="POST" enctype='multipart/form-data'>
        sheikvanet a : <input type="text" name="a"><br><br>
        sheikvanet b : <input type="text" name="b"><br><br>
        <button name='button'>submit</button><br><br>
        <span><?=@$done?></span><br>
        <span><?php echo @$message. @$ornishna?></span><br>
        <p><?=@$num?></p>
    </form>
</body>
</html>