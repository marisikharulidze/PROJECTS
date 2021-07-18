<!DOCTYPE html>
<body>
    <center>
        <form method='POST'>
            Input Number : <input type="number" name='number'>
            <input type="submit">
            <br><br>
        </form>

        <?php
            @$num = $_POST['number'];

            function reverse($num){
                $len = strlen($num);
                for($i=0; $i<$len; $i++){                    
                    echo $num[$len-1-$i];

                    $x = [];
                    $x[$i] = $num[$len-1-$i];
                    // var_dump($x);
                }
            }

            reverse($num);
        ?>
    </center>
</body>
</html>