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

        

    </section>

</body>
</html>

