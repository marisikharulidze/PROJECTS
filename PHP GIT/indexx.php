<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>                

    <script>
        var inputSize = document.createElement("input");
        inputSize.setAttribute("type","number");
        inputSize.setAttribute("id","size");
        inputSize.setAttribute("name","size");

        



    </script>
    <?php
        $.ajax({
            url:"frameworks.php",
            method:"post",
            data:inputSize,
            success: function(last){
                console.log(last+"whaaattttttt");
            }
            
        })
    ?>

</body>
</html>