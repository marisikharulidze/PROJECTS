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

        if(isset($_POST['submit2'])){
            @$name = $_POST['name'];
            @$lname = $_POST['lname'];
            @$age = $_POST['age'];
            @$date = $_POST['date'];
            @$Reg_Date = $_POST['Reg_Date'];
            @$password = $_POST['password'];
            @$gender = $_POST['gender'];
            $error2 ="";
            $correct2 = "";

            if(!empty($name) && !empty($lname) && !empty($age) && !empty($date) && !empty($Reg_Date) && !empty($password) && !empty($gender)){
                $query = "INSERT INTO users(Name,Lastname,Age, Date, Reg_Date ,Password, Gender)
                                VALUES('$name','$lname','$age','$date','$Reg_Date','$password','$gender')";
                $var = mysqli_query($connection, $query);
                if(!$var){
                    die('error'.mysqli_error());
                }else{
                    $correct2 = "<br> uploaded succesfully";
                }
            }
            else{
                $error2 = "fill all input fields in order to continue";
            }
        }

        if(isset($_POST['submit2'])){
            @$title = $_POST['title'];
            @$date = $_POST['date'];
            @$type = $_POST['type'];
            @$photo = $_POST['photo'];
            @$text = $_POST['text'];
            @$author = $_POST['author'];
            @$description = $_POST['description'];
            @$metak = $_POST['metak'];
            @$metad = $_POST['metad'];

            $error3 ="";
            $correct3 = "";

            if(!empty($title) && !empty($date) && !empty($type) && !empty($photo) && !empty($text) && !empty($author) && !empty($description)
                                                                                                    && !empty($metak) && !empty($metad))
            {
                $query = "INSERT INTO data(Title,Date,Type, Photo, Text ,Autor, Description,Meta_k,Meta_d)
                                VALUES('$title','$date','$type','$photo','$text','$author','$description','$metak','$metad')";
                $var = mysqli_query($connection, $query);
                if(!$var){
                    die('error query'.mysqli_error());
                }else{
                    $correct3 = "<br> uploaded succesfully";
                }
            }
            else{
                $error3 = "fill all input fields in order to continue";
            }
        }
    ?>  
    <center>
    <form method="POST">
            <h1>menu</h1>
            title : <input type="text" name="title"><br><br>
            meta k : <input type="text" name="metak"><br><br>
            meta d : <input type="text" name="metad"><br><br>
            text : <input type="text" name="text"><br><br>
            <button name="submit1" >submit</button><br>
            <span><?=@$correct1?></span>
            <p><?=@$error1?></p>
        </form>

        <form method="POST">
            <h1>users</h1>
            name : <input type="text" name="name"><br><br>
            last name : <input type="text" name="lname"><br><br>
            age : <input type="number" name="age"><br><br>
            date : <input type="date" name="date"><br><br>
            Reg_Date : <input type="date" name="Reg_Date"><br><br>
            password : <input type="password" name="password"><br><br>
            gender : <input type="text" name="gender"><br><br>

            <button name="submit2" >submit</button><br>
            <span><?=@$correct2?></span>
            <p><?=@$error2?></p>
        </form>

        <form method="POST">
            <h1>data</h1>
            title : <input type="text" name="title"><br><br>
            date : <input type="date" name="date"><br><br>
            type : <input type="text" name="type"><br><br>
            photo : <input type="text" name="photo"><br><br>
            text : <input type="text" name="text"><br><br>
            author : <input type="text" name="author"><br><br>
            description : <input type="text" name="description"><br><br>
            meta k : <input type="text" name="metak"><br><br>
            meta d : <input type="text" name="metad"><br><br>

            <button name="submit2" >submit</button><br>
            <span><?=@$correct3?></span>
            <p><?=@$error3?></p>
        </form>
    </center>
</body>
</html>