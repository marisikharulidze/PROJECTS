<?php


?>
<!DOCTYPE html>
<head>
    <style>
        body{
            margin:22px;
        }
    </style>
</head>
<body>
    <form method="POST">
        Input firest name : <input type="text" name="name" value="<?php echo @$name ;?>"><br><br>
        Input last name : <input type="text" name="lname" value="<?php echo @$lname; ?>"><br><br>

        <span style="font-size:19px">1)</span> Choose correct meaning of a word generation <br><br>
        <input type="checkbox" name="1"> გამოშვება<br>
        <input type="checkbox" name="2"> საზოგადოება<br>
        <input type="checkbox" name="3"> გენერაცია<br>
        <input type="checkbox" name="4"> დაგენერირება<br><br>

        <span style="font-size:19px">2)</span> Choose correct meaning of a word world <br><br>
        <input type="checkbox" name="5"> სამყარო<br>
        <input type="checkbox" name="6"> სიტყვა<br>
        <input type="checkbox" name="7"> დედამიწა<br>
        <input type="checkbox" name="8"> რაღაც<br><br>

        <span style="font-size:19px">3)</span> Choose correct meaning of a word generation <br><br>
        <input type="checkbox" name="9"> გამოშვება<br>
        <input type="checkbox" name="10"> დაგენერირება<br>
        <input type="checkbox" name="11"> გენერაცია<br>
        <input type="checkbox" name="12"> საზოგადოება<br><br>

        <span style="font-size:19px">4)</span> Choose correct meaning of a word world <br><br>
        <input type="checkbox" name="13"> სამყარო<br>
        <input type="checkbox" name="14"> სიტყვა<br>
        <input type="checkbox" name="15"> დედამიწა<br>
        <input type="checkbox" name="16"> რაღაც<br><br>

        <span style="font-size:19px">5)</span> Choose correct meaning of a word world <br><br>
        <input type="checkbox" name="17"> სამყარო<br>
        <input type="checkbox" name="18"> სიტყვა<br>
        <input type="checkbox" name="19"> დედამიწა<br>
        <input type="checkbox" name="20"> რაღაც<br><br>

        <button name="submit" onclick="alert('Test finished')" >submit</button>
    </form>

    <script>
        var answer = window.confirm('Do you want to start the test?');
        if (answer) {
            <?php
                @$name = $_POST['name'];
                @$lname = $_POST['lname'];
                $mark = 0;

                if(isset($_POST['2'])){
                    $mark +=1;
                }
                if(isset($_POST['5'])){
                    $mark +=1;
                }
                if(isset($_POST['12'])){
                    $mark +=1;
                }
                if(isset($_POST['13'])){
                    $mark +=1;
                }
                if(isset($_POST['17'])){
                    $mark +=1;
                }
                //echo $mark;
                
                // echo $_SERVER["REQUEST_TIME_FLOAT"];
                date_default_timezone_set('Asia/Tbilisi');
            
                try{
                    $pdo = new PDO("mysql:host=localhost;dbname=test","root","");
                }
                catch(PDOExeption $e){
                    echo "DB connection failed : ".$e->getMessage();
                }

                $query = "INSERT INTO start(Starting_time) VALUES(:Starting_time)";
                $prepare = $pdo->prepare($query);
                $exec = $prepare->execute([":Starting_time"=>date('Y-m-d g:i:s')]);

                // $query = $pdo->prepare("SELECT Starting_time FROM start");
                // $query -> execute();
                // $data = $query->fetchAll();

                $starting = date("Y-m-d g:i:s", strtotime("now"));

                if(isset($_POST['submit'])){
                    $query = "INSERT INTO end(Ending_time) VALUES(:Ending_time)";
                    $prepare = $pdo->prepare($query);
                    $exec = $prepare->execute([":Ending_time"=>date('Y-m-d g:i:s')]);

                    $query = "INSERT INTO student(Name,Lname) VALUES(:Name,:Lname)";
                    $prepare = $pdo->prepare($query);
                    $exec = $prepare->execute([":Name"=>$name, ":Lname"=>$lname]);

                    $query = "INSERT INTO mark(Mark) VALUES(:Mark)";
                    $prepare = $pdo->prepare($query);
                    $exec = $prepare->execute([":Mark"=>$mark]);


                    $ending = date("Y-m-d g:i:s", strtotime("now"));
                    echo $starting."<br>";

                    echo date_diff($starting,$ending);
                    // $Time_length = $starting -> diff($ending);
                    // $k = $Time_length->i;

                    $query = "INSERT INTO length(Time_length) VALUES(:Time_length)";
                    $prepare = $pdo->prepare($query);
                    $exec = $prepare->execute([":Time_length"=>date_diff($starting,$ending)]);
                    
                    // header('Location:finished.php');
                }

            ?>
        }
        else {
            window.location = 'blank.php';
        }
    </script>

    
    
</body>
</html>