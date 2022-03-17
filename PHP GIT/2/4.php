<!DOCTYPE html>
<head>
    <style>
        table {
            border: solid 1px black;
            width: 650px;
            margin:auto;
            text-align: center;
        }

        td {
            border: solid 1px black;
            padding:10px;
        }
    </style>
</head>
<body>

    <?php
        $cars = array(
            array(
                "make"=>"bmw",
                  "model"=>"1 Series",
                  "color"=>"red",
                  "mileage"=>12000,
                  "status"=>"sold"
                ),

            array(
                "make"=>"Mercedes",
                  "model"=>"c-class",
                  "color"=>"black",
                  "mileage"=>24000,
                  "status"=>"sold"
                ),

            array(
                "make"=>"toyota",
                  "model"=>"camry",
                  "color"=>"white",
                  "mileage"=>56000,
                  "status"=>"available"
                ),
        );

        echo "<table>";

            echo"<tr style='height:50px'>";
                foreach(array_keys($cars[0]) as $type){
                    echo"<td>".$type."</td>";
                }
            echo"</tr>";
            
            foreach($cars as $car){
                echo"<tr style='height:150px'>";
                    foreach($car as $each){
                        echo"<td>".$each."</td>";
                }
                echo"</tr>";
            }

        echo"</table>";
    ?>
    
</body>
</html>