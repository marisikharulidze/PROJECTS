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
            padding:20px;
        }
    </style>
</head>
<body>

    <?php
    $table = array(array());

    function table($k){
        echo "<br><br><table>";
            for($i=0; $i<$k; $i++)
            {
                echo "<tr>";
                for($j=0; $j<$k; $j++)
                {
                    $table[$i][$j] = rand(10,99);
                    echo "<td>".$table[$i][$j]."</td>";
                }
                echo "</tr>";
            }
        echo "</table>";
    }
    table(10);
    

    // function ttable($k){
        
    //         $table = "<table>";

    //             for($i=0; $i<$k; $i++)
    //             {
    //                 $table .= "<tr>";
    //                 for($i=0; $i<$k; $i++)
    //                 {
    //                     $table .= "<td>";
    //                         $table .= rand(10,99);
    //                     $table .= "</td>";
    //                 }
    //                 $table .= "</tr>";
    //             }
                
    //         $table .= "</table>";
    //     return $table;
    //     }
            
        
    // echo ttable(10);
    ?>


</body>
</html>