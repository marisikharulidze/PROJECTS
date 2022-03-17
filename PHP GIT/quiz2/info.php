<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        form {
            border: solid 1px black;
            height:400px;
            width: 400px;
            margin: 20px auto;
            padding: 20px;
            margin-top: 35px;
            background-color: whitesmoke;
        }
        span {
            color: red;
        }
        p{
            color:green;
        }
        table{
            border: solid black 1px;
            margin: 10px auto;
            padding: 20px;
            width: 1300px;
            background-color:whitesmoke;
        }
        th{
            border: solid white 2px;
            margin: 10px auto;
            padding: 30px;
        }
        td{
            border: solid white 1px;
            margin: 10px auto;
            padding: 15px;
            text-align:center;
        }
        .delete{
            background-color:red;
            color:black;
        }
        .edit{
            background-color:blue;
            color:black;
        }
        a{
            text-decoration:none;
            border: solid 1px;
            padding: 10px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php
        @$name = $_POST["name"];
        @$number = rand(50,1000);
        //@$number = $_POST["number"];
        @$cost = $_POST["cost"];
        @$code = $_POST["code"];
        @$author = $_POST["author"];

        function name(){
            @$name = $_POST["name"];
            if(empty($name)){
                echo $nameError = " *სახელი სავალდებულოა";
            }
            else{
                if(strlen($name)<=2 || strlen($name)>100){
                    echo $nameError = " *სახელი ძალიან მოკლეა ან ძალიან გრძელი";
                }
            }
        }

        function number(){
            @$number = rand(50,1000);
            return  rand(50,1000); 
        }
        
        function cost(){
            @$number = rand(50,1000);
            $cost = $number*0.20;
            return $cost;
        }$cost = $number*0.20;

        
        $str = "abcdifghijklmnopqrstuvwxyz";
        for($i=0; $i<11; $i++){
            @$code .=  $str[rand(0,25)];
        }
         
        
        
        function author(){
            @$author = $_POST["author"];
            if(empty($author)){
                echo $authorError = " *სახელი სავალდებულოა";
            }
            else{
                if(strlen($author)<=5 || strlen($author)>50){
                    echo $authorError =" *სახელი ძალიან მოკლეა ან ძალიან გრძელი";
                }
            }
        }

        $connection = mysqli_connect('localhost','root','','book');
        if(!$connection){
            die('error'.mysqli_connect_error());
        }

        if(!isset($nameError) && !isset($authorError) && !empty($name) && !empty($author)){
            $query = "INSERT INTO info(wignis_dasaxeleba,gverdebis_raodenoba,fasi, shtrix_kodi,avtori) VALUES('$name','$number','$cost','$code','$author')";
            $var = mysqli_query($connection, $query);
    
            if(!$var){
                die('error'.mysqli_error());
            }else{
                $correct = "<br> You have been verified sucessfully";
            }
        }
        
        if(isset($_GET['delete'])){
            $id = $_GET['delete'];
            $var = mysqli_query($connection,"DELETE FROM info WHERE Id=$id");
        }

        $id = 0;
        $name = false;
        $number = '';
        $cost = '';
        $code = '';
        $author = '';

        if(isset($_GET['edit'])){
            $update = true;
            $id = $_GET['edit'];
            $result = mysqli_query($connection, "SELECT * FROM info WHERE Id=$id");
            $row = mysqli_fetch_assoc($result);

            $name = $row['wignis_dasaxeleba'];
            $number = $row['gverdebis_raodenoba'];
            $cost = $row['fasi'];
            $code = $row['shtrix_kodi'];
            $author = $row['avtori'];

            
        }

        if(isset($_POST['update'])){
            $id = $_POST['id'];
            @$name = $_POST['name'];
            @$number = $_POST['number'];
            @$cost = $_POST['cost'];
            @$code = $_POST['code'];
            @$author = $_POST['author'];

            $result = mysqli_query($connection, "UPDATE info SET Id='$id', wignis_dasaxeleba='$name',gverdebis_raodenoba='$number',fasi='$cost',
                shtrix_kodi='$code',avtori='$author' WHERE Id=$id");
            
            $update = false;
            $name = '';
            $number = '';
            $cost = '';
            $code = '';
            $author = '';
        }
    
    ?>

<center>

    <form method="POST">
        <br>
        წიგნის დასახელება : <input type="text" name="name" value="<?php echo @$name;?>">
            <span> <?php name();?></span>
        <br><br>

        გვერდების რაოდენობა : <input type="number" name="number" disabled="disabled" value="<?php echo number();?>"><br><br><br>

        ფასი : <input type="number" name="cost" disabled="disabled" value="<?php echo cost();?>"><br><br><br>

        შტრიხ კოდი : <input type="text" name="code" disabled="disabled" value="<?php echo $code;?> "><br><br><br>

        ავტორი : <input type="text" name="author" value="<?php echo @$author;?>"><br><br>
            <span> <?php author();?></span>
        <br><br>

        <input type="hidden" name="id">

        <?php 
        if(@$update == true){ ?>
            <button name="update" >update</button><br>
        <?php }
        else { ?>
            <button name="submit" >submit</button><br>
        <?php } ?>

        <p><?=@$correct?></p>
    </form>

    <table>
            <tr>
                <th>წიგნის დასახელება</th>
                <th>გვერდების რაოდენობა</th>
                <th>ფასი</th>
                <th>შტრიხ კოდი</th>
                <th>ავტორი</th>
                <th colspan="2">action</th>
            </tr>
            
            <?php
                $query = "SELECT * FROM info";
                $var = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($var)): ?>
                    <tr>
                        <td><?php echo $row['wignis_dasaxeleba'];?></td>
                        <td><?php echo $row['gverdebis_raodenoba'];?></td>
                        <td><?php echo $row['fasi'];?></td>
                        <td><?php echo $row['shtrix_kodi'];?></td>
                        <td><?php echo $row['avtori'];?></td>
                        <td>
                            <a href="info.php?edit=<?php echo $row['id']; ?>" class="edit">Edit</a>
                            <a href="info.php?delete=<?php echo $row['id']; ?>" class="delete">Delete</a>
                        </td>
                    </tr>
            <?php endwhile;?>
        </table>
    
</center>

</body>
</html>