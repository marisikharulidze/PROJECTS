<head>
    <style>
        table {
            border: solid 1px black;
            width: 450px;
            height:400px;
            margin:auto;
            text-align: center;
        }

        td {
            border: solid 1px black;
            padding:40px;
        }
    </style>
</head>
<body>
    
    <?php
        $matrix = array(array());

        echo "<br><br><table>";
            for($i=0; $i<4; $i++)
            {
                echo "<tr>";
                for($j=0; $j<4; $j++)
                {
                    $matrix[$i][$j]=rand(10,100);
                    echo "<td>".$matrix[$i][$j]."</td>";
                    // echo $matrix[$i][$j]."&nbsp&nbsp";
                }
                echo "</tr>";
            }
        echo "</table>";
        
    ?>
    <br>
    <center>
        <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
        <div > input number : <input type="text" name="num"> </div><br>
        <div ><input type="submit"></div>
        </form>
    </center>
    
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $num = $_POST["num"];

            echo "<div style='text-align:center;'>". $num . " - is jeradebia : </div>";
            for($i=0; $i<4; $i++)
            {
                for($j=0; $j<4; $j++)
                {
                    if(!is_float($matrix[$i][$j] / $num) || !is_float($matrix[$i][$j] / $num)){
                        echo "<div style='text-align:center;'>". $matrix[$i][$j]."</div>";
                    }
                }
            }
            echo "<br>";
        }
    ?>

    <?php
        $sum=0;
        $mult=1;
        $sashualoAritmetikuli=0;
        $min = $matrix[0][0];
        $max = $matrix[0][0];
        
        for($i=0; $i<4; $i++)
        {
            for($j=0; $j<4; $j++)
            {
                $sum += $matrix[$i][$j];
                $mult *= $matrix[$i][$j];
                $sashualoAritmetikuli = $sum/16;

                if($min >= $matrix[$i][$j]){
                    $min = $matrix[$i][$j];
                }
                if($max <= $matrix[$i][$j]){
                    $max = $matrix[$i][$j];
                }

            }
        }
        $gani = $max - $min;

        echo"<table>
                <tr>
                    <td>jami : </td>
                    <td>".$sum."</td>
                </tr>
                <tr>
                    <td>namravli : </td>
                    <td>".$mult."</td>
                </tr>
                <tr>
                    <td>sashualo aritmetikuli :</td>
                    <td>$sashualoAritmetikuli</td>
                </tr>
                <tr>
                    <td>min : </td>
                    <td>$min</td>
                </tr>
                <tr>
                    <td>max : </td>
                    <td>$max</td>
                </tr>
                <tr>
                    <td>gani(gabnvis diapazoni) : </td>
                    <td>$gani</td>
                </tr>
            </table>";

        // echo "<div style='text-align:center;'> sum : ". $sum. "</div><br>";
        // echo "<div style='text-align:center;'> mult : ". $mult. "</div><br>";
        // echo "<div style='text-align:center;'> sashualo aritmetikuli : ". $sashualoAritmetikuli. "</div><br>";
        // echo "<div style='text-align:center;'> min : ". $min. "</div><br>";
        // echo "<div style='text-align:center;'> max : ". $max. "</div><br>";
        // echo "<div style='text-align:center;'> gani(gabnvis diapazoni) : ". $gani. "</div><br>";

        $numSum = 0;
        $k = 0;

        echo "<br><div style='text-align:center;'> elementebis cifrta jami : </div> <br><table>";
            for($i=0; $i<4; $i++)
            {
                echo "<tr>";
                for($j=0; $j<4; $j++)
                {
                    $k = $matrix[$i][$j] % 10;
                    $num1 = intdiv( $matrix[$i][$j] , 10);
                    $numSum = $num1+$k;

                    echo "<td> $numSum</td>";
                }
                echo "</tr>";
            }
        echo "</table>";
        
    ?>
</body>
</html>