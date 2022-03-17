<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color:black;
            color:whitesmoke;
        }
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
        if(!is_dir('files')){
            mkdir('files');
        }
        // ააგეთ Files საქაღალდეში .txt ფიალის ატვირთვის ფუნქციონალი, ატვირთული ფაილებს
        // სახელებად დაარქვით მერამდენე იტვირთება ფაილი იმის რიგის ნომერი. თითეულ ფაილში
        // ჩაწერეთ მისი სახელის შესაბამისი რაოდენობის შემთხვევითი რიცხვი.

        $typeError = "";
        $right = "";
        $error = "";
        if(isset($_POST['button'])){
            @$file = $_FILES['file'];

            $type = pathinfo($file['name'], PATHINFO_EXTENSION);
            if($file['error'] == 4){
                $error = " *You have not chosen a file you want to upload";
            }
            else if($type != "txt"){
                $typeError = " *chose only txt files";
            }
            if(empty($typeError) && empty($error)){
                move_uploaded_file($file['tmp_name'],'files/'.$file['name']);
                $right = "File uploaded succesfully";

                $folder = scandir("files");
                for($i=1; $i<count($folder)-1; $i++){
                    $file['name'] = $i;
                    $f = fopen("files/".$file['name'],'w');
                    $text = "";
                    for($k=0; $k<$i; $k++){
                        $text .= rand(0,9);
                    }
                    fwrite($f,$text);
                }
            }
        }
    ?>
    
    <form method="POST" enctype='multipart/form-data'>
        <input type="file" name="file">
        <br><br>
        <button name = "button">upload file</button>
        <p><?=$typeError?></p>
        <p><?=$error?></p>
        <span><?=$right?></span>
    </form>
</body>
</html>