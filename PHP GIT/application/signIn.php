<?php
    session_start();
?>
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<body>

    <?php        
        @$mail = $_POST["mail"];
        $_SESSION['mail']=$mail;
        @$pass = $_POST["pass"];

        $mailError = "";
        $passError = "";

        $connection = mysqli_connect('localhost', 'root', '', 'applicationnn');
        if(!$connection){
            die('error'.mysqli_connect_error());
        }

        if(isset($_POST['signUp'])){
            if(empty($mail)){
                $mailError = " *Email is required";
            }
            else{
                $query = "SELECT email FROM signup";
                $result = mysqli_query($connection, $query);
                $arr = [];
                foreach($result as $res){
                    $arr[] = $res['email'];
                }
                if(!in_array($mail,$arr) ){
                    $mailError = " *Incorrect Email";
                }
                else{
                    $mailError="";
                }

            }

            if(empty($pass)){
                $passError = " *Password is required";
            }
            else{
                $query = "SELECT password FROM signup WHERE email='$mail'";
                $result = mysqli_query($connection, $query);
                $get = mysqli_fetch_assoc($result);
                if(@$get['password'] != @$pass){
                    $passError = " *Incorrect password";
                }
            }

            
            if(empty($passError) && empty($mailError)){
                echo header("Location: signed.php?mail=value1&pass=value2");
            }
        }
        

    ?>
    <div class="backSign"></div>
    <form method="POST">
        <div class="box">
            <div class="satauri">Sign In</div>
            <span style="color:rgba(245, 245, 245, 0.63)">Please fill in this form to sign in an account!</span>
            <hr>
            <br>
            <input type="text" name="mail" placeholder="Email" class="inp" value="<?=$mail?>">
            <p><?= $mailError ?></p>
            <input type="text" name="pass" placeholder="Password" class="inp" value="<?=$pass?>">
            <p><?= $passError ?></p>
            <a href="signUp.php" style="color:rgba(245, 245, 245, 0.63); text-decoration: underline;">Create a new account</a>
            <br><br>
            <button name="signUp">Sign In</button>
        </div>
    </form>

</body>
</html>