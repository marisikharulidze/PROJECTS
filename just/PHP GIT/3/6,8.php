<!DOCTYPE html>
<head>
    <style>
        table {
            border: solid 1px black;
            width: 450px;
            height:400px;
            margin:auto;
            text-align: center;
            margin:auto;
        }
        td {
            border: solid 1px black;
            padding:40px;
        }
        form{
            margin-left:30px;
            margin-top:30px;
        }
        p{
            color:red;
            margin-left:30px;
        }
    </style>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
        sheikvanet M : <input type="text" name="m"><br><br>
        sheikvanet N : <input type="text" name="n"><br><br>
        sheikvanet a : <input type="text" name="a"><br><br>
        sheikvanet b : <input type="text" name="b"><br><br>
        <input type="submit">
    </form>
    

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $table = array(array());
            
            function table(){
                $m = $_POST["m"];
                $n = $_POST["n"];
                $a = $_POST["a"];
                $b = $_POST["b"];

                $stringSum=0;
                $rowSum=0;

                if(!empty($m) && !empty($n) && !empty($a) && !empty($b))
                {
                    if(!is_numeric($m) && !is_numeric($n) && !is_numeric($a) && !is_numeric($b))
                    {
                        echo "<p> input numbers only </p>";
                    }
                    else {
                        echo "<br><br><table>";
                            for($i=0; $i<$m; $i++)
                            {
                                echo "<tr>";
                                for($j=0; $j<$n; $j++)
                                {
                                    $table[$i][$j] = rand($a,$b);
                                    echo "<td>".$table[$i][$j]."</td>";
                                }
                                echo "</tr>";
                            }
                        echo "</table>";
                        //echo $rowSum;
                    }
                }
                else {echo "<p> input all fields in order to continue </p>";};
                
            }
            table();
        }
    ?>


</body>
</html>