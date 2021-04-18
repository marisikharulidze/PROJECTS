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
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            @$name = $_POST["name"];
            @$director = $_POST["director"];
            @$date = $_POST["date"];
            @$code = $_POST["code"];
            @$adress = $_POST["adress"];
            @$dt = $_POST["dt"];
            @$phone = $_POST["phone"];
            @$inf = $_POST["inf"];

            if(empty($name)){
                $nameError = " *სახელი სავალდებულოა";
            }
            else{
                if(!preg_match("#[0-9]+#", $name)){
                    $nameError = " *სახელი უნდა შეიცავდეს ერთ ციფრს მაინც";
                }
                else if(strlen($name)<2 || strlen($name)>20){
                    $nameError = " *სახელი ძალიან მოკლეა ან ძალიან გრძელი";
                }
            }
            
            if(empty($director)){
                $directorError = " *სახელი სავალდებულოა";
            }
            else if(strlen($director)<5 || strlen($director)>50){
                $directorError = " *სახელი ძალიან მოკლეა ან ძალიან გრძელი";
            }

            if(empty($date)){
                $dateError = " *დაარსების თარიღი სავალდებულოა";
            }
            else{
                if(date('Y', strtotime($date)) < 1800){
                    $dateError = " *დაარსების თარიღი უნდა იყოს 1800 წელზე მეტი";
                }
            }
            
            if(empty($code)){
                $codeError = " *კოდი სავალდებულოა";
            }
            else{
                if(!is_numeric($code)){
                    $codeError = " *კოდი უნდა შედგებოდეს მხოლოდ ციფრისგან";
                }
                if(is_numeric($code)){
                    if(strlen($code) < 9 || strlen($code)>9){
                        $codeError = " *კოდი უნდა შედგებოდეს 9 ციფრისგან";
                    }
                }
            }

            if(empty($adress)){
                $adressError = " *მისამართი სავალდებულოა";
            }
            else if(strlen($adress) > 70){
                $adressError = " *მისამართი ძალიან გრძელია";
            }

            if(empty($dt)){
                $dtError = " *რეგისტრაციის თარიღი სავალდებულოა";
            }

            if(empty($phone)){
                $phoneError = " *საკონტაქტო ტელეფონი სავალდებულოა";
            }
            

        }
    ?>

    <form action="action.php" method="POST">
        <br>
        სკოლის სახელი : <input type="text" name="name" value="<?php echo @$name;?>">
        <?php if(isset($nameError)){ ?>
            <span> <?php echo $nameError;}?></span>
        <br><br>

        სკოლის დირექტორის სახელი, გვარი : <input type="text" name="director" value="<?php echo @$director;?>"><br><br>
        <?php if(isset($directorError)){ ?>
            <span> <?php echo $directorError;}?></span>
        <br><br>

        სკოლის დაარსების თარიღი : <input type="date" name="date" value="<?php echo @$date;?>"><br><br>
        <?php if(isset($dateError)){ ?>
            <span> <?php echo $dateError;}?></span>
        <br><br>

        საიდენტიფიკაციო კოდი : <input type="text" name="code" value="<?php echo @$code;?>"><br><br>
        <?php if(isset($codeError)){ ?>
            <span> <?php echo $codeError;}?></span>
        <br><br>

        მისამართი : <input type="text" name="adress" value="<?php echo @$adress;?>"><br><br>
        <?php if(isset($adressError)){ ?>
            <span> <?php echo $adressError;}?></span>
        <br><br>

        რეგისტრაციის თარიღი : <input type="date" name="dt" value="<?php echo @$dt;?>"><br><br>
        <?php if(isset($dtError)){ ?>
            <span> <?php echo $dtError;}?></span>
        <br><br>

        საკონტაქტო ტელეფონი : <input type="number" name="phone" value="<?php echo @$dt;?>"><br><br>
        <?php if(isset($phoneError)){ ?>
            <span> <?php echo $phoneError;}?></span>
        <br><br>

        დამატებითი ინფორმაცია : <input type="text" name="inf" value="<?php echo @$inf;?>"><br><br>

        <input type="submit">
    </form>
    
</body>
</html>