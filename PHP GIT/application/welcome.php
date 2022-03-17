<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<body>
    <form method="POST">
        <div class="contain">
            <h1 style="color:red;"> NOT FUCKING ADDED YET</h1>
        </div>
    </form>

    <?php
        if(isset($_POST['signUp'])){
            header("Location: signUp.php");
        }
        if(isset($_POST['signIn'])){
            header("Location: signIn.php");
        }

    ?>
</body>
</html>