<!DOCTYPE html>
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
            for($i=0; $i<6; $i++)
            {
                echo "<tr>";
                for($j=0; $j<5; $j++)
                {
                    $matrix[$i][$j] = $i + $j;
                    echo "<td>".$matrix[$i][$j]."</td>";
                }
                echo "</tr>";
            }
        echo "</table>";
        
    ?>
</body>
</html>