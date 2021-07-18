<!DOCTYPE html>
<body>
<center>
    <form method='POST'>
        Input Number : <input type="number" name='number'>
        <input type="submit" name="submit">
        <br><br>
    </form>

    <?php 
        @$num = $_POST['number'];

        function arithmeticProgression($num){
            if(isset($_POST['submit'])){
                if(!empty($num)){
                    $len = strlen($num)-1;
                    // echo $len;
                    
                    if($len == 3){//4
                        //0 1 2 3
                        //2 4 6 8
                        $d1 = $num[$len]-$num[$len-1];
                        $d2 = $num[$len-2]-$num[$len-3];
                        $d3 = $num[$len-1]-$num[$len-2];
                        if($d1 == $d2 && $d2 == $d3){
                            //An = A1 + (n-1)d
                            // echo $num[$len];
                            // echo $num[0];
                            // echo ($len)*$difference;
    
                            $progression = $num[0]+($len)*$d1;
                            if($progression == $num[$len]){
                                echo "<br>ricxvebis mimdevroba aris aritmetikuli progresia";
                            }
                            else echo "ricxvebis mimdevroba ar aris aritmetikuli progresia cadet tavidan";
                        }
                        else echo "ricxvebis mimdevroba ar aris aritmetikuli progresia cadet tavidan";
                    }
                    if($len == 2){//3
                        //1 2 3
                        $d1 = $num[$len]-$num[$len-1];
                        $d2 = $num[$len-1]-$num[$len-2];
                        if($d1 == $d2){
                            $progression = $num[0]+($len)*$d1;
                            if($progression == $num[$len]){
                                echo "<br>ricxvebis mimdevroba aris aritmetikuli progresia";
                            }
                            else echo "ricxvebis mimdevroba ar aris aritmetikuli progresia cadet tavidan";
                        }
                        else echo "ricxvebis mimdevroba ar aris aritmetikuli progresia cadet tavidan";
                    }
                    if($len == 4){//5
                        //1 2 3 4 5
                        $d1 = $num[$len]-$num[$len-1];
                        $d2 = $num[$len-2]-$num[$len-3];
                        $d3 = $num[$len-1]-$num[$len-2];
                        $d4 = $num[$len-3]-$num[$len-4];
                        if($d1 == $d2 && $d2 == $d3 && $d3 == $d4){
                            $progression = $num[0]+($len)*$d1;
                            if($progression == $num[$len]){
                                echo "<br>ricxvebis mimdevroba aris aritmetikuli progresia";
                            }
                            else echo "ricxvebis mimdevroba ar aris aritmetikuli progresia cadet tavidan";
                        }
                        else echo "ricxvebis mimdevroba ar aris aritmetikuli progresia cadet tavidan";
                    }
                    if($len <= 1){
                        echo "sheikvanet 2ze meti ricxvi";
                    }
                }
                else echo "error";
            }
        }
        arithmeticProgression($num);
    ?>
</center>
</body>
</html>