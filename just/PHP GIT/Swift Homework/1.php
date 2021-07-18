<!DOCTYPE html>
<body>
    <center>
        <form method='POST'>
            Input Number : <input type="number" name='number'>
            <input type="submit" name='submit'>
            <br><br>
        </form>

        <?php
            //0 1 1 2 3 5 8 13 21
            @$num = $_POST['number'];

            function fibonacci($num){
                if(isset($_POST['submit'])){
                    $array = [];
                    if($num>0){
                        $array[0] = 0;
                        if($num>1){
                            $array[1] = 1;
                        }
                    }
                    else echo "Invalid Input";
    
                    for($i=2; $i<$num; $i++){
                        $array[$i] = $array[$i-1] + $array[$i-2];
                    }
    
                    echo "[";
                    for($i=0; $i<$num; $i++){
                        echo $array[$i].", ";
                    }
                    echo "]";
                }
            }

            fibonacci($num);
        ?>
    </center>
</body>
</html>