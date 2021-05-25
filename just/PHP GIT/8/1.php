<!DOCTYPE html>
<head>
    <style>
        form{
            border: solid black 1px;
            margin: 10px auto;
            padding: 20px;
            width: 320px;
            background-color:whitesmoke;
            color:black;
        }
        p{
            color:red;
        }
        span{
            color:green;
        }
        table{
            border: solid black 1px;
            margin: 10px auto;
            padding: 20px;
            width: 1300px;
            background-color:black;
            color:whitesmoke;
        }
        th{
            border: solid white 2px;
            margin: 10px auto;
            padding: 30px;
            color:whitesmoke;
        }
        td{
            border: solid white 1px;
            margin: 10px auto;
            padding: 15px;
            color:whitesmoke;
            text-align:center;
        }
        .del{
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
<body>
    <?php
        $connection = mysqli_connect('localhost','root','','mydata');
        if(!$connection){
            die('error'.mysqli_connect_error());
        }
        

        if(isset($_POST['submit1'])){
            @$title = $_POST['title'];
            @$metak = $_POST['metak'];
            @$metad = $_POST['metad'];
            @$text = $_POST['text'];
            $error1 ="";
            $correct1 = "";

            if(!empty($title) && !empty($metak) && !empty($metad) && !empty($text)){
                $query = "INSERT INTO menu(Title,Meta_k,Meta_d, Text) VALUES('$title','$metak','$metad','$text')";
                $var = mysqli_query($connection, $query);

                if(!$var){
                    die('error'.mysqli_error());
                }else{
                    $correct1 = "<br> uploaded succesfully";
                }
            }
            else{
                $error1 = "fill all input fields in order to continue";
            }
        }

        if(isset($_GET['delete'])){
            $id = $_GET['delete'];
            $var = mysqli_query($connection,"DELETE FROM menu WHERE Id=$id");
            // $query = "DELETE FROM menu WHERE Id=$id";
            // $var = mysqli_query($connection,$query);
        }

        $id = 0;
        $update = false;
        $title = '';
        $metak = '';
        $metad = '';
        $text = '';

        if(isset($_GET['edit'])){
            $update = true;
            $id = $_GET['edit'];
            $result = mysqli_query($connection, "SELECT * FROM menu WHERE Id=$id");
            $row = mysqli_fetch_assoc($result);

            $title = $row['Title'];
            $metak = $row['Meta_k'];
            $metad = $row['Meta_d'];
            $text = $row['Text'];
        }

        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $title = $_POST['title'];
            $metak = $_POST['metak'];
            $metad = $_POST['metad'];
            $text = $_POST['text'];

            $result = mysqli_query($connection, "UPDATE menu SET Id='$id', Title='$title',Meta_k='$metak',Meta_d='$metad',Text='$text' WHERE Id=$id");
            
            $update = false;
            $title = '';
            $metak = '';
            $metad = '';
            $text = '';
        }
        
    ?>
    <center>
        <form method="POST">
                <h1>menu</h1>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                title : <input type="text" name="title" value="<?php echo $title?>"><br><br>
                meta k : <input type="text" name="metak" value="<?php echo $metak?>"><br><br>
                meta d : <input type="text" name="metad" value="<?php echo $metad?>"><br><br>
                text : <input type="text" name="text" value="<?php echo $text?>"><br><br>

                <?php 
                    if($update == true){ ?>
                        <button name="update" >update</button><br>
                    <?php }
                    else { ?>
                        <button name="submit1" >save</button><br>
                    <?php } ?>
                
                <span><?=@$correct1?></span>
                <p><?=@$error1?></p>
        </form><br>
        
        <table>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Meta_k</th>
                <th>Meta_d</th>
                <th>Text</th>
                <th colspan="2">action</th>
            </tr>
            
            <?php
                $query = "SELECT * FROM menu";
                $var = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($var)): ?>
                    <tr>
                        <td><?php echo $row['Id'];?></td>
                        <td><?php echo $row['Title'];?></td>
                        <td><?php echo $row['Meta_k'];?></td>
                        <td><?php echo $row['Meta_d'];?></td>
                        <td><?php echo $row['Text'];?></td>
                        <td>
                            <a href="1.php?edit=<?php echo $row['Id']; ?>" class="edit">Edit</a>
                            <a href="1.php?delete=<?php echo $row['Id']; ?>" class="del">Delete</a>
                        </td>
                    </tr>
            <?php endwhile;?>
        </table>
    </center>
</body>
</html>