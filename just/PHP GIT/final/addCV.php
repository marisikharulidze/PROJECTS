<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<style>
    a{
        color:black;
    }
    li{
        margin-top:20px;
    }
    a:hover{
        background-color:whitesmoke;
    }
</style>
<body>
    <?php
        $connection = mysqli_connect('localhost','root','','cv');
        if(!$connection){
            die('error'.mysqli_connect_error());
        }

        @$id = $_POST['id'];
        @$inf = $_POST["inf"];
        @$ganatleba = $_POST["ganatleba"];
        @$gamocdileba = $_POST["gamocdileba"];

        if(isset($_POST['submit'])){
            $query = "INSERT INTO cv(sakontaktoInformacia,ganatleba,samushaoGamocdileba) VALUES('$inf','$ganatleba','$gamocdileba')";
            $var = mysqli_query($connection, $query);
            if(!$var){
                die('error'.mysqli_error());
            }else{
                $messege = "<br> *ოპერაცია გავლილია წარმატებით";
            }
        }
        if(empty($inf) || empty($ganatleba) || empty($gamocdileba)){
            $error = "<br> *სავალდებულოა ყველა";
            $messege = "";
        }
         
    ?>

    <header>
        <div style="color:whitesmoke; position:absolute;font-size:28px; top:19%; left:2%">Web site for cv</div>
        <a href="administrator.php" class="Administrator" style="color:whitesmoke;">Administrator</a>
        <a href="aplicant.php" class="Aplicant" style="color:whitesmoke;">Aplicant</a>
    </header>

    <section>
        <div style="font-size:3em">Profile</div>
        <ul>
            <li><a href="addCV.php">cv-ის დამატება</a></li>
            <li><a href="editCV.php">cv-ის რედაქტირება</a></li>
            <li><a href="">cv-ის წაშლა</a></li>
            <li><a href="">cv-ის ჩვენება</a></li>
        </ul>

        <form method="POST">
            <br>
            საკონტაქტო ინფორმაცია : <input type="text" name="inf"><br><br>

            განათლების მოკლე აღწერა : <input type="text" name="ganatleba" ><br><br>

            სამუშაო გამოცდილება : <input type="text" name="gamocdileba"><br><br>

            <button name="submit">submit</button><br>
            <span><?=@$error?></span>
            <p><?=@$messege?></p>
        </form>

    </section>

</body>
</html>

