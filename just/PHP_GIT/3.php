<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>TEST</h2><br>
    <form action = "<?php $_PHP_SELF?>" method = "POST">
        1) select the correct one <br><br>
         <input type="checkbox">  PHP is not a server scripting language <br>
         <input type="checkbox">  PHP 6 is the latest stable release<br>
         <input type="checkbox" name="T1">  PHP is a server scripting language<br>
         <input type="checkbox">  PHP is not used to make WEB pages<br><br>
        2)select the correct one <br><br>
         <input type="checkbox">  The mascot of PHP is a purple octopus <br>
         <input type="checkbox" name="T2">  The mascot of PHP is a big blue elephant<br>
         <input type="checkbox">  The mascot of PHP is a sitting mammoth<br>
         <input type="checkbox">  The mascot of PHP is a cartoon anthropomorphic penguin<br><br>
        3)Using What symbol can you create a variable in PHP<br><br>
         <input type="text" name="T3" style="width:260px;height:30px"><br><br>
        4)How can you output string length in PHP <br><br>
         <input type="text" name="T4" style="width:260px;height:30px"><br><br>
        5)Write one line comment <br><br>
         <input type="text" name="T5" style="width:260px;height:30px"><br><br>
        <input type="submit"><br><br>
    </form>

    <?php
        $answers = 0;
        $incorrect = 0;

        $ra = $_POST["T1"];
        if($ra){$answers++;}
        else{$incorrect++;}
        $kai = $_POST["T2"];
        if($kai){$answers++;}
        else{$incorrect++;}

        $erti = $_POST["T3"];
        $ori = $_POST["T4"];
        $sami = $_POST["T5"];
        if($erti == "$"){$answers++;}
        else{$incorrect++;}
        if($ori == "strlen()"){$answers++;}
        else{$incorrect++;}
        if($sami == "#" || $sami == "//"){$answers++;}
        else{$incorrect++;}
        echo "correct answers $answers <br>";
        echo "incorrect answers $incorrect";
    ?>
</body>
</html>