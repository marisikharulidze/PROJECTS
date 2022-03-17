<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: solid 1px black;
            width: 1050px;
            height: 140px;
            position: absolute;
            top: 30px;
            left: 420px;
            background-color: rgb(235, 235, 235);
            text-align: center;
        }

        td {
            border: solid 1px black;
        }
    </style>
</head>
<body>
    <form action="another.php" method = "GET"><br>
        saxeli : <input type="text" name="saxeli"><br><br>
        gvari : <input type="text" name="gvari"><br><br>
        tanamdeboba : <input type="text" name="tanamdeboba"><br><br>
        xelfasis raodenoba : <input type="text" name="xelfasis"><br><br>
        dakavebuli sashemosavlo : <input type="text" name="dakavebuli"><br><br>
        daricxuli xelfasi : <input type="text" name="daricxuli"><br><br>
        <input type = "submit"><br><br>
    </form>

    <table>
        <tr style="height: 50px;">
            <td>saxeli</td>
            <td>gvari</td>
            <td>tanamdeboba</td>
            <td>xelfasis raodenoba</td>
            <td>dakavebuli sashemosavlo</td>
            <td>daricxuli xelfasi</td>
        </tr>
        <tr>
            <td><?php echo $_GET["saxeli"]?></td>
            <td><?php echo $_GET["gvari"]?></td>
            <td><?php echo $_GET["tanamdeboba"]?></td>
            <td><?php echo $_GET["xelfasis"]?></td>
            <td><?php echo $_GET["dakavebuli"]?></td>
            <td><?php echo $_GET["daricxuli"]?></td>
        </tr>
    </table>

</body>
</html>