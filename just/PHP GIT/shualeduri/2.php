<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        p{
            color:red;
        }
        form{
            margin: 30px auto;
            border:solid black 1px;
            width:300px;
            padding:20px;
            text-align:center;
            background-color:whitesmoke;
            color:black;
        }
        span{
            color:green;
        }
    </style>
</head>
<body>
    <?php
        // ჩაწერეთ lexicon.txt ფაილში ინგლისური სიტყვების დამატების ფორმა, თავისი ქართული
        // განმარტებით, ააგეთ შესაბამისი PHP-ის ფუნქციონალით, ინგლისურ სიტყვაში სიმბოლოების
        // რაოდენობა მინიმუმ 2 მაქსიმუმ 50, თუ პირობა ვერ კმაყოფილდება გამოიტანეთ შეტყობინება
        // შეცდომის შესახებ.

        if(isset($_POST['button'])){
            @$file = "lexicon.txt";
            
            $f = fopen($file,'a');
            $error = "";
            
            //var_dump(filesize($file));
            
            $f = fopen($file,'a');
            $text = $_POST['text'];
            fwrite($f,$text);
            
            if(filesize($file)<2 || filesize($file)>50){
                $error = " *sitkvebi dzaan cotaa an dzaan bevri";
            }
            else {
                $right = "text has been added";
            }
        }
    ?>
    
    <form method="POST" enctype='multipart/form-data'>
        <textarea name="text" cols="40" rows="10"></textarea><br><br>
        <button name = "button">upload file</button>
        <p><?=@$error?></p>
        <span><?=@$right?></span>
    </form>
</body>
</html>