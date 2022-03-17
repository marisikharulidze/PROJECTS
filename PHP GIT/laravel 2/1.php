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
        // function delete(){
        //     if(isset($_GET['delete'])){
        //         $id = $_GET['delete'];
        //         $query = $pdo->exec("DELETE FROM words WHERE Id=$id");
        //         // $pdo->exec($query);
        //         header("Refresh:0; url=1.php");
        //     }
        // }
        // $id = 0;
        // $update = false;

        // if(isset($_GET['edit'])){
        //     $update = true;
        //     $id = $_GET['edit'];
        //     $query = $pdo->prepare("SELECT English, Georgian FROM words WHERE Id=$id");
        //     $query->execute();
        //     $data = $query->fetchAll();
        //     for($i=0;$i<count($data); $i++){
        //         $eng = $data[$i]['English'];
        //         $geo = $data[$i]['Georgian'];
        //     }
        // }
        
        // if(isset($_POST['update'])){
        //     $id = $_POST['id'];
        //     $eng = $_POST['eng'];
        //     $geo = $_POST['geo'];

        //     $query = $pdo->prepare("UPDATE words SET English='$eng',Georgian='$geo' WHERE Id='$id'");
        //     $query -> execute();
        //     // echo "<script>alert('refreshing page')</script>";
        //     header("Refresh:0; url=1.php");
            
        //     $update = false;
        //     $eng = '';
        //     $geo = '';
            
        // }
        
    ?>
    <center>
        <form method="POST">
            <h2>ADD NEW TEST</h2>
                                  <!-- <input type="hidden" name="id" value="<?php echo $id; ?>" > -->
            Input Question : <input type="text" name="question" value="<?php echo @$question ;?>" style="margin-top:15px;"><br><br>
            Input Answer : <input type="text" name="answers" value="<?php echo @$answers; ?>"><br><br>
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
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=test2","root","");
            // $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
        }
        catch(PDOExeption $e){
            echo "DB connection failed : ".$e->getMessage();
        }
        class Upload{
            public function upload(){
                global $pdo;
                @$question = $_POST['question'];
                @$answers = $_POST['answers'];

                if(!empty($question) && !empty($answers)){
                    if(isset($_POST['submit'])){
                        $query = "INSERT INTO questions(Question) VALUES(:question)";
                        $prepare = $pdo->prepare($query);
                        $exec = $prepare->execute([":question"=>$question]);

                        $query = "INSERT INTO answers(Answer) VALUES(:answer)";
                        $prepare = $pdo->prepare($query);
                        $exec = $prepare->execute([":answer"=>$answers]);
                    }
                }
            }
        }
        class View{
            public function view(){
                global $pdo;
                $query = $pdo->prepare("SELECT Question,Id FROM questions");
                $query -> execute();
                $data = $query->fetchAll();

                $query = $pdo->prepare("SELECT Answer,Id FROM answers");
                $query -> execute();
                $datta = $query->fetchAll();?>

                <table>
                    <tr>
                        <th>Questions</th>
                        <th>Answers</th>
                        <th colspan="2">Action</th>
                    </tr>

                    <?php
                        foreach($data as $dat){
                            $question = $dat['Question'];
                            
                            ?>
                            
                            <tr>
                                <td><?php echo $question ?></td>
                                <td><?php foreach($datta as $datt){
                                $answer = $datt['Answer']; echo $answer;
                            } ?></td>
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
        $upload->upload();
        
        $View = new View;
        $View->view();
        // delete();
        
    ?>
</body>
</html>
