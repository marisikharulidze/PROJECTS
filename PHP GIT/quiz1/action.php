
<!DOCTYPE html>
<head>
    <style>
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
        @$name = $_POST["name"];
        @$director = $_POST["director"];
        @$date = $_POST["date"];
        @$code = $_POST["code"];
        @$adress = $_POST["adress"];
        @$dt = $_POST["dt"];
        @$phone = $_POST["phone"];
        @$inf = $_POST["inf"];

        if(!isset($nameError) && !isset($directorError) && !isset($dateError) && !isset($codeError) && !isset($adressError) && !isset($dtError) && !isset($phoneError)){
            echo "<br><br><table>";

                echo "<tr>";
                    echo "<td>".'სკოლის სახელი :'."</td>";
                    echo "<td>".@$name."</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td>".'სკოლის დირექტორის სახელი, გვარი : '."</td>";
                    echo "<td>".@$director."</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td>".'სკოლის დაარსების თარიღი : '."</td>";
                    echo "<td>".@$date."</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td>".'საიდენტიფიკაციო კოდი :'."</td>";
                    echo "<td>".@$code."</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td>".'მისამართი : '."</td>";
                    echo "<td>".@$adress."</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td>".'რეგისტრაციის თარიღი : '."</td>";
                    echo "<td>".@$dt."</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td>".'საკონტაქტო ტელეფონი : '."</td>";
                    echo "<td>".@$phone."</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td>".'დამატებითი ინფორმაცია : '."</td>";
                    echo "<td>".@$inf."</td>";
                echo "</tr>";
            echo "</table>";
        }
    ?>
</body>
</html>