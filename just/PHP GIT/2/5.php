<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        form {
            border: solid 1px black;
            height: 465px;
            width: 400px;
            margin: auto;
            padding: 2px 25px;
            margin-top: 35px;
            background-color: whitesmoke;
        }

        span {
            color: red;
        }
        table {
            border: solid 1px black;
            width: 450px;
            height:400px;
            margin:auto;
            text-align: center;
            background-color: whitesmoke;
        }

        td {
            border: solid 1px black;
            padding:40px;
        }
    </style>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name = $_POST["name"];
            $mail = $_POST["mail"];
            $website = $_POST["website"];
            $comment = $_POST["comment"];
            @$gender = $_POST["gender"];

            if(empty($name)){
                $nameError = " *Name is required";
            }
            if(is_numeric($name)){
                $nameError = " *Name should be alphabetical";
            }

            if(empty($mail)){
                $mailError = " *E-mail is required";
            }
            if(!empty($mail)){
                if(strpos("$mail", "@") != 0){
                    $websiteError = null;
                    if(strpos("$mail", ".") != 0){
                        $websiteError = null;
                    }
                    else{$mailError = " *input valid E-mail";}
                }
                else{$mailError = " *E-mail must contain @";}
            }

            if(empty($website)){
                $websiteError = " *Website is required";
            }
            if(!empty($website)){
                if(strpos("$website", ".") != 0){
                    $websiteError = null;
                }
                else{$websiteError = " *input valid website";}
            }

            if(empty($comment)){
                $commentError = " *Comment is required";
            }
            if(!empty($comment)){
                if(strlen($comment) > 10){
                    $commentError = null;
                }
                else{$commentError = " *comment must contain at least 10 characters";}
            }

            if(empty($gender)){
                $genderError = " *gender is required";
            }
        }
    ?>

    <form action ="<?php $_SERVER['PHP_SELF'];?>"method="POST">
        <h2><b>Validation : </b></h2>
        
        Name : <input type="text" name="name">
        <?php if(isset($nameError)){ ?>
            <span> <?php echo $nameError;}?></span>
        <br><br>

        E-mail : <input type="text" name="mail">
        <?php if(isset($mailError)){ ?>
            <span><?php echo $mailError; }?></span>
        <br><br>

        Website : <input type="text" name="website">
        <?php if(isset($websiteError)){ ?>
            <span><?php echo $websiteError; }?></span>
        <br><br>

        Comment :<textarea name="comment" rows="5" cols="35"></textarea>
        <?php if(isset($commentError)){ ?>
            <span><?php echo "<br><br>".$commentError; }?></span>
        <br><br>

        Gender : <input type="radio" name="gender" value="female">Female 
                 <input type="radio" name="gender" value="mail"> Male 
                 <input type="radio" name="gender" value="other"> Other
        <?php if(isset($genderError)){ ?>
            <span><?php echo $genderError; }?></span>
        <br><br>

        <input type="submit">
        <h2><b>Your Input : </b></h2>
    </form>
    
    <?php
        if(!isset($nameError) && !isset($mailError) && !isset($websiteError) && !isset($commentError) && !isset($genderError)){
            echo "<br><br><table>";

                echo "<tr>";
                    echo "<td>".'Name'."</td>";
                    echo "<td>$name</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td>".'E-mail'."</td>";
                    echo "<td>$mail</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td>".'Website'."</td>";
                    echo "<td>$website</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td>".'Comment'."</td>";
                    echo "<td>$comment</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td>".'Gender'."</td>";
                    echo "<td>$gender</td>";
                echo "</tr>";
            echo "</table>";
        }
    ?>
    
</body>
</html>