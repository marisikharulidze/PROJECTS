<?php
    session_start();
?>
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<body>    
    <?php
        $mail = $_SESSION['mail'];
        $connection = mysqli_connect('localhost', 'root', '', 'applicationnn');
        $query = "SELECT firstName, lastName FROM signup WHERE email='$mail'";
        $result = mysqli_query($connection,$query);
        $get = mysqli_fetch_assoc($result);
        @$name = $get['firstName'];
        @$lname = $get['lastName'];
        @$profile = $name . "  " . $lname;

        if(isset($_POST['profile'])){
            header("Location: profile.php");
        }
    ?>
    
    <div class="back"></div>
    <form method="POST">
        <div class="contain">
            <a href="welcome.php" class="welcome" name="welcome">Welcome To The Future</a>
            <button class="profile" name="profile"><?php echo $profile;?></button>
        </div>
    </form>
</body>
</html>