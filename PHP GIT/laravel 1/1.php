<!DOCTYPE html>
<head>
    <style>
        table{
            border: solid black 1px;
            margin: 10px auto;
            padding: 20px;
            width: 1300px;
            background-color:whitesmoke;
        }
        th{
            border: solid black 2px;
            margin: 10px auto;
            padding: 30px;
        }
        td{
            border: solid black 1px;
            margin: 10px auto;
            padding: 15px;
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
            border: solid 0px;
            padding: 6px;
            margin: 5px;
        }
        a:hover{
            background-color:white;
        }
    </style>
</head>
<body>
    <?php
        function delete(){
            if(isset($_GET['delete'])){
                $pdo = new PDO("mysql:host=localhost;dbname=dictionaryyy","root","");
                $id = $_GET['delete'];
                $query = $pdo->exec("DELETE FROM words WHERE Id=$id");
                // $pdo->exec($query);
                header("Refresh:0; url=1.php");
            }
        }
        $id = 0;
        $update = false;

        if(isset($_GET['edit'])){
            $update = true;
            $id = $_GET['edit'];
            $pdo = new PDO("mysql:host=localhost;dbname=dictionaryyy","root","");
            $query = $pdo->prepare("SELECT English, Georgian FROM words WHERE Id=$id");
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $data = $query->fetchAll();
            for($i=0;$i<count($data); $i++){
                // echo $data[$i]['English'];
                $eng = $data[$i]['English'];
                $geo = $data[$i]['Georgian'];
            }
        }
        
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $eng = $_POST['eng'];
            $geo = $_POST['geo'];

            $query = $pdo->prepare("UPDATE words SET English='$eng',Georgian='$geo' WHERE Id='$id'");
            $query -> execute();
            // echo "<script>alert('refreshing page')</script>";
            header("Refresh:0; url=1.php");
            
            $update = false;
            $eng = '';
            $geo = '';
            
        }
        
    ?>
    <center>
        <form method="POST">
                                  <input type="hidden" name="id" value="<?php echo $id; ?>" >
            Input English words : <input type="text" name="eng" value="<?php echo @$eng ;?>" style="margin-top:15px;"><br><br>
            Input Georgian words : <input type="text" name="geo" value="<?php echo @$geo; ?>"><br><br>
            <?php 
                if(@$update == true){ ?>
                    <button name="update" >update</button><br>
                <?php }
                else { ?>
                    <button name="submit" >save</button><br>
                <?php } ?>
            
            <span><?=@$correct?></span>
            <p><?=@$error?></p>
        </form>
    </center>
    
    <?php
        abstract class Db{
            public $pdo;
            public function aconnect(){
                try{
                    $pdo = new PDO("mysql:host=localhost;dbname=dictionaryyy","root","");
                    // $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
                }
                catch(PDOExeption $e){
                    echo "DB connection failed : ".$e->getMessage();
                }
            }
        }
        class Upload extends Db{
            public function upload(){
                @$eng = $_POST['eng'];
                @$geo = $_POST['geo'];

                if(!empty($eng) && !empty($geo)){
                    if(isset($_POST['submit'])){
                        $pdo = new PDO("mysql:host=localhost;dbname=dictionaryyy","root","");
                        $query = "INSERT INTO words(English,Georgian) VALUES(:english,:georgian)";
                        $prepare = $pdo->prepare($query);
                        $exec = $prepare->execute([":english"=>$eng, ":georgian"=>$geo]);
                    }
                }
            }
        }
        class View extends Upload{
            public function view(){
                $pdo = new PDO("mysql:host=localhost;dbname=dictionaryyy","root","");
                $query = $pdo->prepare("SELECT English,Georgian,Id FROM words");
                $query -> execute();
                $data = $query->fetchAll();?>

                <table>
                    <tr>
                        <th>English</th>
                        <th>Georgian</th>
                        <th colspan="2">Action</th>
                    </tr>

                    <?php
                        foreach($data as $dat){
                            $valEng = $dat['English'];
                            $valGeo = $dat['Georgian']; ?>
                            
                            <tr>
                                <td><?php echo $valEng ?></td>
                                <td><?php echo $valGeo ?></td>
                                <td>
                                    <a href="1.php?edit=<?php echo $dat['Id'];?>" class="edit">Edit</a>
                                    <a href="1.php?delete=<?php echo $dat['Id'];?>" class="del">Delete</a>
                                </td>
                            </tr>

                            <?php
                        }
                    ?>
                </table>
                
                <?php
                }
            }
        $upload = new upload;
        $upload->aconnect();
        $upload->upload();
        
        $View = new View;
        $View->view();
        delete();
        
    ?>
</body>
</html>
