<!DOCTYPE html>
<head>
    <style>
        body{
            font-size:1.5em;
        }
    </style>
</head>
<body>
<center>
    <?php 
        $arr = [ 0, 1, 6, 1 , 1 , 1, 9 ];
        $array = [2, 4, 8, 4, 2, 1, 2, 3];

        function multiple($arr){
            $count = array_count_values($arr);

            echo "<pre>";
            print_r(array_count_values($arr));
            echo "</pre>";
            
            arsort($count);
            // echo arsort($count);
            // foreach($count as $k=>$k_val){
            //     echo " key : ".$k;
            //     echo " value : ".$k_val."<br>";
            // }
            echo key($count);

        }
        multiple($arr);
        echo "<br>";
        multiple($array);
    ?>
</center>
</body>
</html>