<!DOCTYPE html>
<head>
    <style>
        p{
            color:green;
            margin-left:695px;
        }
        span{
            color:red;
            margin-left:685px;
        }
    </style>
</head>
<body>

    <center>
        <form method = "POST"><br>
            <input type="text" name="num" value="<?php echo @$num;?>">
            <input type="submit"><br><br>
        </form>
    </center>

    <?php
        function numbers(){
            $num = $_POST["num"];
            if(!is_numeric($num)){
                echo "<span> input numbers only </span>";
            }
            else echo "<p> string lenght = ".strlen($num)."</p>";
        }  
        numbers();
    ?>

</body>
</html>