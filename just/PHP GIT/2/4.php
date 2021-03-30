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
    ?>
    <table>
        <tr>
            <?php
                foreach(array_keys($cars[0]) as $header){
            ?>
                <td><?=$header?></td>
            <?php
                }
            ?>
        </tr>
        
        <?php
            foreach($cars as $car){
        ?>
            <tr>
                <?php
                    foreach($car as $item){
                ?>
                    <td><?=$item?></td>
                <?php
                }
                ?>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>