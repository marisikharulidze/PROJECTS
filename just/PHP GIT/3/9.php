<!DOCTYPE html>
<head>
    <style>
    
    </style>
</head>
<body>
    <form method = "POST"><br>
        Password : <input type="text" name="pass" value="<?php echo $_POST["pass"]; ?>"><br><br>
        <input type = "submit"><br><br>
    </form>

    <?php
        
        function strength(){
            $GLOBALS['$final'] = 7;
            $password = $_POST["pass"];

            if(!empty($password)){
                if(strlen($password)<8){
                    $GLOBALS['$final'] -=1;
                }
                if(!preg_match("#[0-9]+#", $password)){
                    $GLOBALS['$final'] -=1;
                }
                if (!preg_match("#[a-z]+#", $password)) {
                    $GLOBALS['$final'] -=1;
                }
                if (!preg_match("#[A-Z]+#", $password) ) {
                    $GLOBALS['$final'] -=2;
                }
                if (!preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $password) ) {
                    $GLOBALS['$final'] -=2;
                }
            }
            return $GLOBALS['$final'];
        }       
        strength();

        $messege = "";
        if($GLOBALS['$final']){
            if($GLOBALS['$final'] <= 3){
                $messege = "Weak Password";
            }
            else if($GLOBALS['$final'] > 3 && $GLOBALS['$final'] < 6){
                $messege = "Normal Password";
            }
            else if($GLOBALS['$final'] >= 5 ){
                $messege = "Strong Password";
            }
        echo "<span> $messege </span>";
        }
    ?>
    
</body>
</html>