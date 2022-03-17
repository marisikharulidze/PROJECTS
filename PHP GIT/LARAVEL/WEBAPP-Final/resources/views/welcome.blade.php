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
        @$name = $_GET["name"];
        @$model = $_GET["model"];
        @$releaseDate = $_GET["releaseDate"];
        @$dzravi = $_GET["dzravi"];
        @$ganbajeba = $_GET["ganbajeba"];
        @$cost = $_GET["cost"];

        $nameError = "";
        $modelError = "";
        $releaseDateError ="";
        $dzraviError = "";
        $ganbajebaError ="";
        $costError = "";

        if(empty($name)){
            $nameError = " *სახელი სავალდებულოა";
        }
        if(empty($model)){
            $modelError = " *სავალდებულოა";
        }
        if(empty($releaseDate)){
            $releaseDateError = " *სავალდებულოა";
        }
        if(empty($dzravi)){
            $dzraviError = " *სავალდებულოა";
        }   
        if(empty($ganbajeba)){
            $ganbajebaError = " *სავალდებულოა";
        }
        if(empty($cost)){
            $costError = " *სავალდებულოა";
        }
        
        if(empty($nameError) && empty($modelError) && empty($releaseDateError) && empty($dzraviError) && empty($ganbajebaError) && empty($costError)){
            DB::insert('INSERT INTO auto(name,model,release_year,dzravis_moculoba,ganbajeba,fasi)
                                        values(?,?,?,?,?,?)',[$name,$model,$releaseDate,$dzravi,$ganbajeba,$cost]);
            $correct = "inserted";
        }

        if(isset($_GET['delete'])){
            $id = $_GET['delete'];
            DB::delete('delete users where id = ?', [$id]);
        }

        $id = 0;
        $update = false;
        $name = '';
        $model = '';
        $releaseDate = '';
        $dzravi = '';
        $ganbajeba = '';
        $cost = '';

        if(isset($_GET['edit'])){
            $update = true;
            $id = $_GET['edit'];
            
            DB::select('select * from auto where id = ?', [$id]);
            
            $name = DB::select("select name from auto");
            $model = DB::select("select model from auto");
            $release_year = DB::select("select release_year from auto");
            $dzravis_moculoba = DB::select("select dzravis_moculoba from auto");
            $ganbajeba = DB::select("select ganbajeba from auto");
            $fasi = DB::select("select fasi from auto");
            
        }

        if(isset($_POST['update'])){
            $id = $_POST['id'];
            @$name = $_GET["name"];
            @$model = $_GET["model"];
            @$releaseDate = $_GET["releaseDate"];
            @$dzravi = $_GET["dzravi"];
            @$ganbajeba = $_GET["ganbajeba"];
            @$cost = $_GET["cost"];

            
            DB::update('update auto set name=?', [$name]);
            
            $update = false;
            $name = '';
            $model = '';
            $releaseDate = '';
            $dzravi = '';
            $ganbajeba = '';
            $cost = '';
        }
    
    ?>

<center>

    <form method="GET" enctype="multipart/form-data">
        <br>
        მანქანის დასახელება : <input type="text" name="name" value="<?php echo @$name;?>">
            <span> <?php echo @$nameError?></span>
        <br><br>

        ავტომობილის მოდელი : <input type="text" name="model" value="<?php echo @$model;?>">
            <span> <?php echo @$modelError?></span>
        <br><br>

        მანქანის გამოშვების თარიღი : <input type="date" name="releaseDate" value="<?php echo @$releaseDate;?>">
            <span> <?php echo @$releaseDateError?></span>
        <br><br>

        ძრავის მოცულობა : <input type="text" name="dzravi" value="<?php echo @$dzravi;?>">
            <span> <?php echo @$dzraviError?></span>
        <br><br>

        განბაჟება : <input type="text" name="ganbajeba" value="<?php echo @$ganbajeba;?>">
            <span> <?php echo @$ganbajebaError?></span>
        <br><br>

        ფასი : <input type="float" name="cost" value="<?php echo @$cost;?>">
            <span> <?php echo @$costError?></span>
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
                <th>მანქანის დასახელება</th>
                <th>ავტომობილის მოდელი</th>
                <th>მანქანის გამოშვების თარიღი</th>
                <th>ძრავის მოცულობა</th>
                <th>განბაჟება</th>
                <th>ფასი</th>
                <th colspan="2">action</th>
            </tr>
            
            
            <?php
                $name = DB::select("select name from auto");
                $model = DB::select("select model from auto");
                $release_year = DB::select("select release_year from auto");
                $dzravis_moculoba = DB::select("select dzravis_moculoba from auto");
                $ganbajeba = DB::select("select ganbajeba from auto");
                $fasi = DB::select("select fasi from auto");

                foreach($name as $nam){
                    ?>
                    <tr>
                    <?php
                    foreach($nam as $n){?>
                        <td><?php echo $n;?></td>
                        <?php
                    }
                    
                    ?>
                    <td>
                        <a href="{{ url('edit') }}" class="edit">Edit</a>
                        <a href="{{ url('delete') }}" class="delete">Delete</a>
                    </td>
                    </tr>
                    <?php
                }
            ?>
                    
                    
            
                
        </table>
    
</center>

</body>
</html>