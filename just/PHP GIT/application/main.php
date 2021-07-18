<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<body>
    <div class="back"></div>
    <a href="welcome.php" class="welcome" name="welcome">Welcome To The Future</a>
    <form method="POST">
        <button class="signIn" name="signIn">Sign In</button>
    </form>

    <!-- <table>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="signIn.php " class="button signIn" name="signIn">Sign In</a></td>
        </tr>
    </table> -->
    <?php
        if(isset($_POST['signIn'])){
            header("Location: signIn.php");
        }

    ?>
</body>
</html>

