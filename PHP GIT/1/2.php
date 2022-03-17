<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="1.css">
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="POST"><br>
        saxeli : <input type="text" name="saxeli"><br><br>
        gvari : <input type="text" name="gvari"><br><br>
        kursi : <input type="text" name="kursi"><br><br>
        semestri : <input type="text" name="semestri"><br><br>
        saswavlo kursi : <input type="text" name="saswavlo"><br><br>
        migebuli nishani : <input type="text" name="migebuli"><br><br>
        lektoris saxeli : <input type="text" name="lektoriss"><br><br>
        lektoris gvari : <input type="text" name="lektorisg"><br><br>
        dekanis saxeli : <input type="text" name="dekaniss"><br><br>
        dekanis gvari : <input type="text" name="dekanisg"><br><br>
        <input type = "submit"><br><br>
    </form>

    <table style="left: 300px; width:1200px">
        <tr style="height: 50px;">
            <td>saxeli</td>
            <td>gvari</td>
            <td>kursi</td>
            <td>semestri</td>
            <td>saswavlo kursi</td>
            <td>migebuli nishani</td>
            <td>shefaseba</td>
            <td>lektoris saxeli</td>
            <td>lektoris gvari</td>
            <td>dekanis saxeli</td>
            <td>dekanis gvari</td>
        </tr>
        <tr>
            <td><?php echo $_POST["saxeli"]?></td>
            <td><?php echo $_POST["gvari"]?></td>
            <td><?php echo $_POST["kursi"]?></td>
            <td><?php echo $_POST["semestri"]?></td>
            <td><?php echo $_POST["saswavlo"]?></td>
            <td><?php echo $_POST["migebuli"]?></td>
            <td>
                <?php 
                    $x=$_POST["migebuli"];
                    if($x >= 91){echo "A";}
                    else if($x >= 81 && $x <= 90){echo "B";}
                    else if($x >= 71 && $x <= 80){echo "C";}
                    else if($x >= 61 && $x <= 70){echo "D";}
                    else if($x >= 51 && $x <= 60){echo "F";}
                    else {echo "FAIL";}
                ?>
            </td>
            <td><?php echo $_POST["lektoriss"]?></td>
            <td><?php echo $_POST["lektorisg"]?></td>
            <td><?php echo $_POST["dekaniss"]?></td>
            <td><?php echo $_POST["dekanisg"]?></td>
        </tr>
    </table>
</body>
</html>