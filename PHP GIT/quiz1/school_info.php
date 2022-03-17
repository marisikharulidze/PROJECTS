<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        form {
            border: solid 1px black;
            height: 630px;
            width: 500px;
            margin: auto;
            padding: 2px 25px;
            margin-top: 35px;
            background-color: whitesmoke;
        }
        span {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        @$name = $_POST["name"];
        @$director = $_POST["director"];
        @$date = $_POST["date"];
        @$code = $_POST["code"];
        @$adress = $_POST["adress"];
        @$dt = $_POST["dt"];
        @$phone = $_POST["phone"];
        @$inf = $_POST["inf"];

        function name(){
            @$name = $_POST["name"];
            if(empty($name)){
                echo $nameError = " *სახელი სავალდებულოა";
            }
            else{
                if(!preg_match("#[0-9]+#", $name)){
                    echo $nameError = " *სახელი უნდა შეიცავდეს ერთ ციფრს მაინც";
                }
                if(strlen($name)<=2 || strlen($name)>20){
                    echo $nameError = " *სახელი ძალიან მოკლეა ან ძალიან გრძელი";
                }
            }
        }
        
        function director(){
            @$director = $_POST["director"];
            if(empty($director)){
                return $directorError = " *სახელი სავალდებულოა";
            }
            else if(strlen($director)<5 || strlen($director)>50){
                return $directorError = " *სახელი ძალიან მოკლეა ან ძალიან გრძელი";
            }
        }
        
        function datee(){
            @$date = $_POST["date"];
            if(empty($date)){
                return $dateError = " *დაარსების თარიღი სავალდებულოა";
            }
            else{
                if(date('Y', strtotime($date)) < 1800){
                    return $dateError = " *დაარსების თარიღი უნდა იყოს 1800 წელზე მეტი";
                }
            }
        }
        
        function code(){
            @$code = $_POST["code"];
            if(empty($code)){
                echo $codeError = " *კოდი სავალდებულოა";
            }
            else{
                if(!is_numeric($code)){
                    echo $codeError = " *კოდი უნდა შედგებოდეს მხოლოდ ციფრისგან";
                }
                if(is_numeric($code)){
                    if(strlen($code) < 9 || strlen($code)>9){
                        echo $codeError = " *კოდი უნდა შედგებოდეს 9 ციფრისგან";
                    }
                }
            }
        }
        
        function adress(){
            @$adress = $_POST["adress"];
            if(empty($adress)){
                return $adressError = " *მისამართი სავალდებულოა";
            }
            else if(strlen($adress) > 70){
                return $adressError = " *მისამართი ძალიან გრძელია";
            }
        }
        
        function dt(){
            @$dt = $_POST["dt"];
            if(empty($dt)){
                return $dtError = " *რეგისტრაციის თარიღი სავალდებულოა";
            }
        }
        
        function phone(){
            @$phone = $_POST["phone"];
            if(empty($phone)){
                echo $phoneError = " *საკონტაქტო ტელეფონი სავალდებულოა";
            }
        }
    ?>

    <form method="POST">
        <br>
        სკოლის სახელი : <input type="text" name="name" value="<?php echo @$name;?>">
            <span> <?php name();?></span>
        <br><br>

        სკოლის დირექტორის სახელი, გვარი : <input type="text" name="director" value="<?php echo @$director;?>"><br><br>
            <span> <?php echo director();?></span>
        <br><br>

        სკოლის დაარსების თარიღი : <input type="date" name="date" value="<?php echo @$date;?>"><br><br>
            <span> <?php echo datee();?></span>
        <br><br>

        საიდენტიფიკაციო კოდი : <input type="text" name="code" value="<?php echo @$code;?>"><br><br>
            <span> <?php code();?></span>
        <br><br>

        მისამართი : <input type="text" name="adress" value="<?php echo @$adress;?>"><br><br>
            <span> <?php echo adress();?></span>
        <br><br>

        რეგისტრაციის თარიღი : <input type="date" name="dt" value="<?php echo @$dt;?>"><br><br>
            <span> <?php echo dt();?></span>
        <br><br>

        საკონტაქტო ტელეფონი : <input type="number" name="phone" value="<?php echo @$phone;?>"><br><br>
            <span> <?php phone();?></span>
        <br><br>

        დამატებითი ინფორმაცია : <input type="text" name="inf" value="<?php echo @$inf;?>"><br><br>

        <input type="submit">
    </form>
    <?php
        //if(!isset($nameError) && !isset($directorError) && !isset($dateError) && !isset($codeError) && !isset($adressError) && !isset($dtError) && !isset($phoneError)){
         //   //echo "<meta http-equiv='refresh' content='1; url=action.php'>";
        //    header("location:action.php");
        //}

        
    ?>
    
</body>
</html>