<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<body>
<?php
        @$id = $_POST['id'];
        @$name = $_POST["name"];
        @$number = $_POST["number"];
        @$date = $_POST["date"];
        @$pass = $_POST["pass"];

        $connection = mysqli_connect('localhost','root','','cv');
        if(!$connection){
            die('error'.mysqli_connect_error());
        }

        if(empty($name)){
            $nameError = " *სახელი სავალდებულოა";
        }if(empty($number)){
            $numberError = " *პირადი ნომერ სავალდებულოა";
        }if(empty($date)){
            $dateError = " *რეგისტრაციის თარიღი სავალდებულოა";
        }if(empty($pass)){
            $passError = " *პაროლი სავალდებულოა";
        }
        
        if(!isset($nameError) && !isset($numberError) && !isset($dateError) && !isset($passError)){
            $query = "INSERT INTO aplicant(saxeli,piradobisNomeri,registraciisTarigi,paroli) VALUES('$name','$number','$date','$pass')";
            $var = mysqli_query($connection, $query);
            if(!$var){
                die('error'.mysqli_error());
            }else{
                $messege = "<br> *რეგისტრაცია გავლილია წარმატებით";
            }
        }

        if(isset($_GET['delete'])){
            $id = $_GET['delete'];
            $var = mysqli_query($connection,"DELETE FROM aplicant WHERE id=$id");
        }

        $id = 0;
        $update=false;
        $name = '';
        $number = '';
        $date = '';
        $pass = '';

        if(isset($_GET['edit'])){
            $update = true;
            $id = $_GET['edit'];
            $result = mysqli_query($connection, "SELECT * FROM aplicant WHERE id=$id");
            $row = mysqli_fetch_assoc($result);

            $name = $row['saxeli'];
            $number = $row['piradobisNomeri'];
            $date = $row['registraciisTarigi'];
            $pass = $row['paroli'];
        }

        if(isset($_POST['update'])){
            @$id = $_POST['id'];
            @$name = $_POST['name'];
            @$number = $_POST['number'];
            @$date = $_POST['date'];
            @$pass = $_POST['pass'];

            $result = mysqli_query($connection, "UPDATE aplicant SET id='$id', saxeli='$name',piradobisNomeri='$number',registraciisTarigi='$date',
                paroli='$pass'WHERE id=$id");
            
            $update = false;
            $name = '';
            $number = '';
            $date = '';
            $pass = '';
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

            პირადობის ნომერი : <input type="number" name="number" value="<?php echo @$number;?>"><br><br>
                <span> <?php echo @$numberError;?></span>
            <br><br>

            რეგისტრაციის თარიღი : <input type="date" name="date" value="<?php echo @$date;?>"><br><br>
                <span> <?php echo @$dateError;?></span>
            <br><br>

            პაროლი : <input type="text" name="pass" value="<?php echo @$pass;?>"><br><br>
                <span> <?php echo @$passError;?></span>
            <br><br>

            <input type="hidden" name="id">

            <?php 
            if(@$update == true){ ?>
                <button name="update">update</button><br>
            <?php }
            else { ?>
                <button name="submit">submit</button><br>
            <?php } ?>
            <p><?=@$messege?></p>
        </form>

        <table>
                <tr>
                    <th>აპლიკანტის სახელი</th>
                    <th>პირადობის ნომერი</th>
                    <th>რეგისტრაციის თარიღი</th>
                    <th>პაროლი</th>
                    <th colspan="2">action</th>
                </tr>
                
                <?php
                    $query = "SELECT * FROM aplicant";
                    $var = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($var)){ ?>
                        <tr>
                            <td><?php echo $row['saxeli'];?></td>
                            <td><?php echo $row['piradobisNomeri'];?></td>
                            <td><?php echo $row['registraciisTarigi'];?></td>
                            <td><?php echo $row['paroli'];?></td>
                            <td>
                                <a href="administrator.php?edit=<?php echo $row['id']; ?>" class="edit">Edit</a>
                                <a href="administrator.php?delete=<?php echo $row['id']; ?>" class="delete">Delete</a>
                            </td>
                        </tr>
                <?php };?>
            </table>
    </form>
</section>

        



</body>
</html>

