<!DOCTYPE html>
<head>
    <style>
        body{
            margin:22px;
        }
        p{
            color:red;
        }
        div{
            color:green;
        }
    </style>
</head>
<body>
    <?php
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=testt","root","");
        }
        catch(PDOExeption $e){
            echo "DB connection failed : ".$e->getMessage();
        }

        @$name = $_POST['name'];
        @$lname = $_POST['lname'];
        $mark = 0;
        $incorrect = 0;
        $correct = 0;

        if(isset($_POST['submit'])){
            if(!isset($_POST['3']) || isset($_POST['2']) || isset($_POST['1'])){$incorrect +=1; $incc1 = "INCORRECT<br><br>";}
            else{$correct +=1; $corr1 = "CORRECT<br><br>";}

            if(!isset($_POST['5']) || isset($_POST['4']) || isset($_POST['6'])){$incorrect +=1; $incc2 = "INCORRECT<br><br>";}
            else{$correct +=1; $corr2 = "CORRECT<br><br>";}

            if(!isset($_POST['9']) || isset($_POST['8']) || isset($_POST['7'])){$incorrect +=1; $incc3 = "INCORRECT<br><br>";}
            else{$correct +=1; $corr3 = "CORRECT<br><br>";}

            if(!isset($_POST['12']) || isset($_POST['11']) || isset($_POST['10'])){$incorrect +=1; $incc4 = "INCORRECT<br><br>";}
            else{$correct +=1; $corr4 = "CORRECT<br><br>";}

            if(!isset($_POST['15']) || isset($_POST['13']) || isset($_POST['14'])){$incorrect +=1; $incc5 = "INCORRECT<br><br>";}
            else{$correct +=1; $corr5 = "CORRECT<br><br>";}

            if(!isset($_POST['18']) || isset($_POST['16']) || isset($_POST['17'])){$incorrect +=1; $incc6 = "INCORRECT<br><br>";}
            else{$correct +=1; $corr6 = "CORRECT<br><br>";}

            if(!isset($_POST['21']) || isset($_POST['20']) || isset($_POST['19'])){$incorrect +=1; $incc7 = "INCORRECT<br><br>";}
            else{$correct +=1; $corr7 = "CORRECT<br><br>";}

            // header("Refresh:0; url=test.php");

            @$mark = 2*$correct;

            if(!empty($name) && !empty($lname)){
                $query = "INSERT INTO students(Name,Lname,Mark,End_time) VALUES(:Name,:Lname,:Mark,:End_time)";
                $prepare = $pdo->prepare($query);
                $exec = $prepare->execute([":Name"=>$name, ":Lname"=>$lname,":Mark"=>@$mark, ":End_time"=>date('Y-m-d g:i:s')]);
                // if($exec){
                //     echo "suceeessss<br><br>";
                // }
            }

            
        }

        // echo $correct;
        // echo $incorrect;

        

        

    ?>

    <form method="POST">
        Input firest name : <input type="text" name="name" value="<?php echo @$name ;?>"><br><br>
        Input last name : <input type="text" name="lname" value="<?php echo @$lname; ?>"><br><br>    

        <span style="font-size:19px">1)</span> What does PHP stand for? <br><br>
        <input type="checkbox" name="1" <?php echo (isset($_POST['1'])?'checked="checked"':'') ?>> Hypertext Transfer Protocol<br>
        <input type="checkbox" name="2" <?php echo (isset($_POST['2'])?'checked="checked"':'') ?> > Preprocessed Hypertext Page<br>
        <input type="checkbox" name="3" <?php echo (isset($_POST['3'])?'checked="checked"':'') ?> > PHP: Hypertext Preprocessor<br>

        <p><?php echo @$incc1?></p>
        <div><?php echo @$corr1?></div>

        <span style="font-size:19px">2)</span> What does PHP stand for? <br><br>
        <input type="checkbox" name="4" <?php echo (isset($_POST['4'])?'checked="checked"':'') ?>> Hypertext Transfer Protocol<br>
        <input type="checkbox" name="5" <?php echo (isset($_POST['5'])?'checked="checked"':'') ?> > PHP: Hypertext Preprocessor<br>
        <input type="checkbox" name="6" <?php echo (isset($_POST['6'])?'checked="checked"':'') ?> > Preprocessed Hypertext Page<br>
        
        <p><?php echo @$incc2?></p>
        <div><?php echo @$corr2?></div>

        <span style="font-size:19px">3)</span> What does PHP stand for? <br><br>
        <input type="checkbox" name="7" <?php echo (isset($_POST['7'])?'checked="checked"':'') ?>> Hypertext Transfer Protocol<br>
        <input type="checkbox" name="8" <?php echo (isset($_POST['8'])?'checked="checked"':'') ?> > Preprocessed Hypertext Page<br>
        <input type="checkbox" name="9" <?php echo (isset($_POST['9'])?'checked="checked"':'') ?> > PHP: Hypertext Preprocessor<br>

        <p><?php echo @$incc3?></p>
        <div><?php echo @$corr3?></div>

        <span style="font-size:19px">4)</span> What does PHP stand for? <br><br>
        <input type="checkbox" name="10" <?php echo (isset($_POST['10'])?'checked="checked"':'') ?>> Hypertext Transfer Protocol<br>
        <input type="checkbox" name="11" <?php echo (isset($_POST['11'])?'checked="checked"':'') ?> > Preprocessed Hypertext Page<br>
        <input type="checkbox" name="12" <?php echo (isset($_POST['12'])?'checked="checked"':'') ?> > PHP: Hypertext Preprocessor<br>
        
        <p><?php echo @$incc4?></p>
        <div><?php echo @$corr4?></div>

        <span style="font-size:19px">5)</span> What does PHP stand for? <br><br>
        <input type="checkbox" name="13" <?php echo (isset($_POST['13'])?'checked="checked"':'') ?>> Hypertext Transfer Protocol<br>
        <input type="checkbox" name="14" <?php echo (isset($_POST['14'])?'checked="checked"':'') ?> > Preprocessed Hypertext Page<br>
        <input type="checkbox" name="15" <?php echo (isset($_POST['15'])?'checked="checked"':'') ?> > PHP: Hypertext Preprocessor<br>

        <p><?php echo @$incc5?></p>
        <div><?php echo @$corr5?></div>

        <span style="font-size:19px">6)</span> What does PHP stand for? <br><br>
        <input type="checkbox" name="16" <?php echo (isset($_POST['16'])?'checked="checked"':'') ?>> Hypertext Transfer Protocol<br>
        <input type="checkbox" name="17" <?php echo (isset($_POST['17'])?'checked="checked"':'') ?> > Preprocessed Hypertext Page<br>
        <input type="checkbox" name="18" <?php echo (isset($_POST['18'])?'checked="checked"':'') ?> > PHP: Hypertext Preprocessor<br>
        
        <p><?php echo @$incc6?></p>
        <div><?php echo @$corr6?></div>

        <span style="font-size:19px">7)</span> What does PHP stand for? <br><br>
        <input type="checkbox" name="19" <?php echo (isset($_POST['16'])?'checked="checked"':'') ?>> Hypertext Transfer Protocol<br>
        <input type="checkbox" name="20" <?php echo (isset($_POST['17'])?'checked="checked"':'') ?> > Preprocessed Hypertext Page<br>
        <input type="checkbox" name="21" <?php echo (isset($_POST['18'])?'checked="checked"':'') ?> > PHP: Hypertext Preprocessor<br>
        
        <p><?php echo @$incc7?></p>
        <div><?php echo @$corr7?></div>

        <?php
        if(isset($_POST['submit'])){
            if($mark >= 8){
                echo "<script>alert('TEST PASSED')</script>";
            }
            else{
                echo "<script>alert('TRY ONE MORE TIME')</script>";
                echo "<script>window.location = 'another.php';</script>";
            }
            ?>
            <button name="submit" disabled>submit</button>
        <?php }
        else{?>
            <button name="submit">submit</button>
        <?php

        }
        ?>

    </form>
        
        
    
</body>
</html>