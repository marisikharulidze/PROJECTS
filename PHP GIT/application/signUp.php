<?php
    session_start();
?>
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<body>

    <?php
        @$name = $_POST["name"];
        @$lname = $_POST["lname"];
        @$mail = $_POST["mail"];
        @$pass = $_POST["pass"];
        @$confirmpass = $_POST["confirmpass"];

        $_SESSION['mail'] = $mail;
        
        $nameError = "";
        $lnameError = "";
        $mailError = "";
        $passError = "";
        $confirmpassError = "";

        $connection = mysqli_connect('localhost', 'root', '', 'applicationnn');
        if(!$connection){
            die('error'.mysqli_connect_error());
        }

        if(isset($_POST['signUp'])){
            if(empty($name)){
                $nameError = " *Name is required";
            }
            else{
                if(preg_match("#[0-9]+#", $name)){
                    $nameError = " *Name should not contain any numbers";
                }
                if(strlen($name)<=2 || strlen($name)>20){
                    $nameError = " *Name is too short or too long";
                }
            }

            if(empty($lname)){
                $lnameError = " *Last name is required";
            }
            else{
                if(preg_match("#[0-9]+#", $lname)){
                    $lnameError = " *Last name should not contain any numbers";
                }
                if(strlen($lname)<=2 || strlen($lname)>20){
                    $lnameError = " *Last name is too short or too long";
                }
            }

            if(empty($mail)){
                $mailError = " *Email is required";
            }
            else{
                if(!preg_match("#@#",$mail)){
                    $mailError = " *Email should contain @";
                }
                else if(!preg_match("#[.]#",$mail)){
                    $mailError = " *Enter valid Email";
                }
                else if(!preg_match("#com#",$mail) && !preg_match("#ge#",$mail) && !preg_match("#ru#",$mail) && !preg_match("#gmail#",$mail) && !preg_match("#yahoo#",$mail)){
                    $mailError = " *Enter valid Email";
                }

                $query = "SELECT email FROM signup";
                $result = mysqli_query($connection, $query);
                $arr = [];
                foreach($result as $res){
                    $arr[] = $res['email'];
                }
                if(in_array($mail,$arr) ){
                    $mailError = " *This Email is already used";
                }
                else{
                    $mailError="";
                }

            }

            if(empty($pass)){
                $passError = " *Password is required";
            }
            else{
                $final = 7;
                if(strlen($pass)<8){
                    $final -=1;
                }
                if(!preg_match("#[0-9]+#", $pass)){
                    $final -=1;
                }
                if (!preg_match("#[a-z]+#", $pass)) {
                    $final -=1;
                }
                if (!preg_match("#[A-Z]+#", $pass) ) {
                    $final -=2;
                }
                if (!preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $pass) ) {
                    $final -=2;
                }

                if($final){
                    if($final <= 3){
                        $passError = "Weak Password";
                    }
                    else {$passError = "";}
                }
            }

            if(empty($confirmpass)){
                $confirmpassError =" *Confirmation is required";
            }
            else{
                if($confirmpass != $pass){
                    $confirmpassError = " *Passwords do not match";
                }
            }

            
            if(empty($nameError) && empty($lnameError) && empty($mailError) && empty($passError) && empty($confirmpassError)){
                $query = "INSERT INTO signup(firstName, lastName, email, password) VALUES('$name', '$lname', '$mail', '$pass')";
                $result = mysqli_query($connection, $query);
                echo header("Location: signed.php");
            }
        }
        

    ?>

    <div class="backSign"></div>
    <form method="POST">
        <div class="box">
            <div class="satauri">Sign Up</div>
            <span style="color:rgba(245, 245, 245, 0.63)">Please fill in this form to create an account!</span>
            <hr>
            <br>
            <input type="text" name="name" placeholder="First Name" value="<?=$name?>"> <br> <br>
            <input  type="text" name="lname"placeholder="Last Name" value="<?=$lname?>">
            <p><?php echo $nameError, $lnameError?></p>
            <input type="text" name="mail" placeholder="Email" class="inp" value="<?=$mail?>">
            <p><?= $mailError ?></p>
            <input type="text" name="pass" placeholder="Password" class="inp" value="<?=$pass?>">
            <p><?= $passError ?></p>
            <input type="text" name="confirmpass" placeholder="Confirm Password" class="inp" value="<?=$confirmpass?>">
            <p><?= $confirmpassError ?></p>
            <br>
            <!-- <input type="checkbox" style="position:absolute; top:345px; box-shadow:none;"> 
            <span style="position:absolute; top:351px;left:56px; color:whitesmoke;">I accept the <a href="#">Terms Of Use </a>and <a href="#">Privacy Policy. </a></span> 
            <br>
            <br> -->
            <button name="signUp">Sign Up</button>
        </div>
    </form>

</body>
</html>