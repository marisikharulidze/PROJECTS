<!DOCTYPE html>
<head>
    <style>
        div{
            border: solid 1px black;
            width:170px;
            height:20px;
            text-align:center;
            padding:2px;
            margin-top:100px;
            margin-left:662px;
        }
        p{
            color:green;
            margin-left:660px;
        }
        span{
            color:red;
            margin-left:720px;
        }
    </style>
</head>
<body>
    <?php
        @$input = $_POST["input"];
        $code = rand(10000,99999);

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "<div>$code</div><br><br>";
        }

    ?>

    <center>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method = "POST">
            <input type="number" name="input">
            <input type="submit">
        </form>
    </center>

    <?php
        
        if(!empty($input)){
            $old = intval($code);
            echo $old;
            if($old == $input){
                echo "<p> security code is correct </p>";
            }
            else echo "<br><span> incorrect </span> ";
            echo var_dump($input);
            echo var_dump($code);
        }
        
    ?>
</body>
</html>