<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
        sheikvanet ricxvi : <input type="text" name="ricxvi"><br><br>
        <input type="submit"><br><br>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $x = [];
            echo "random array = [";
            for ($i=0; $i<12; $i++){
                $x[$i]=rand(10,100);
                echo " $x[$i]";
            }
            echo "]<br>";
            $ricxvi = $_POST["ricxvi"];
            

            $meti=0;
            $naklebi=0;
            for ($j=0; $j<12; $j++){
                if($x[$j]<$ricxvi){
                    $naklebi++;
                }
                else{
                    $meti++;
                }
            }
            echo "<br> archeul ricxvze naklebi aris $naklebi ricxvi <br>";
            echo "archeul ricxvze meti aris $meti ricxvi";
            
    }
        

    ?>
</body>
</html>