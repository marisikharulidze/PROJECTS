<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<body>
    <?php
        $connection = mysqli_connect('localhost','root','','cv');
        if(!$connection){
            die('error'.mysqli_connect_error());
        }

        @$id = $_POST['id'];
        @$name = $_POST["name"];
        @$pass = $_POST["pass"];
        $nameError = "";
        $passError = "";

        if(isset($_POST['submit'])){
            if(empty($name)){
                $nameError = " *სახელი სავალდებულოა";
            }
            else{
                $query = "SELECT saxeli FROM aplicant";
                $result = mysqli_query($connection, $query);
                $arr = [];
                foreach($result as $res){
                    $arr[] = $res['saxeli'];
                }
                if(!in_array($name,$arr) ){
                    $nameError = " *სახელი არასწორია";
                }
                else{
                    $nameError="";
                }
            }
    
            if(empty($pass)){
                $passError = " *პაროლი სავალდებულოა";
            }
            else{
                $query = "SELECT paroli FROM aplicant WHERE saxeli='$name'";
                $result = mysqli_query($connection, $query);
                $get = mysqli_fetch_assoc($result);
                if(@$get['paroli'] != $pass){
                    $passError = " *პაროლი არასწორია";
                }
            }
            if(empty($nameError) && empty($passError)){
                echo header("Location: profile.php");
            }
        }
        

        
    ?>


    <header>
        <div style="color:whitesmoke; position:absolute;font-size:28px; top:19%; left:2%">Web site for cv</div>
        <a href="administrator.php" class="Administrator">Administrator</a>
        <a href="aplicant.php" class="Aplicant">Aplicant</a>
    </header>

<section>
    <form method="POST">
        <br>
        აპლიკანტის სახელი : <input type="text" name="name" value="<?php echo @$name;?>"><br><br>
            <span> <?php echo @$nameError;?></span>
        <br><br>

        პაროლი : <input type="text" name="pass" value="<?php echo @$pass;?>"><br><br>
            <span> <?php echo @$passError;?></span>
        <br><br>

        <input type="hidden" name="id">

        <button name="submit">submit</button><br>
        
    </form>
</section>


</body>
</html>

