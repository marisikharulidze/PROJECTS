<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<body>
    <form method="POST">
        <div class="contain">
            lakfdkdsjhfks
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