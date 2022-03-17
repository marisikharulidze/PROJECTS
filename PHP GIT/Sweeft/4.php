<!DOCTYPE html>
<head>
    <style>
        pre{
            font-size:1.5em;
        }
    </style>
</head>
<body>
<center>
    <?php 
        // [1,0,30,1,9]
        $arr = [1,0,30,1,0,9];
        // echo count($arr);
        
        function zero($arr){
            echo "<pre>First ";
            print_r($arr);
            echo "</pre>";

            for($i=0; $i<count($arr); $i++){
                if($arr[$i] == 0){
                    array_push($arr,$arr[$i]);
                    unset($arr[$i]);
                }
            }
            echo "<pre>Second ";
            print_r($arr);
            echo "</pre>";
        }
        zero($arr);
    ?>
</center>
</body>
</html>