<?php
    if(isset($_POST['add'])){
        header("location:Product Add.php");
    }

    $connect = mysqli_connect('localhost','root', '', 'web application');
    if(!$connect) die('ERROR'.mysqli_connect_error());

    $query = "SELECT * FROM product";
    $connectQuery = mysqli_query($connect,$query);
    if(!$connectQuery) die('ERROR');
?>
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<head>
    <style>
        table {
            height: 600px;
            width: 97%;
            position: relative;
            border: black solid 0px;
        }
        td {
            border: solid 2.5px black;
            height: 170px;
            width: 261px;
            padding:5px;
        }
        tr{
            position: absolute;
            /* border:red 3px solid; */
        }
        .td2{
            border:red 0px solid;
            width:75px;
        }
        div{
            text-align:center;
        }
    </style>
</head>
<body>
    <form method="POST" id="product_form">

        <header>
            <h1>Product List</h1>    
            <button name="add" class="add">ADD</button>
            <button name="delete" class="delete" id="delete-product-btn">MASS DELETE</button>
            <div class="line"></div>
        </header>

        <section>

            <table>
                <?php
                    $num=0;
                    echo "<tr>";
                        foreach($connectQuery as $each){
                            
                            $num++;
                            if($num == 1){
                                echo "<td>";
                                    echo "<input style='top:10px;left:10px;' type='checkbox' value='$num' name='chk[]'>";
                                    echo "<div>";
                                        echo $each['SKU'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Name'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Price'].".00 $";
                                    echo "</div>";
                                    echo "<div>";
                                        if($each['Type'] == "dvd"){
                                            echo "Size : ".$each['Size']." MB";
                                        }else if($each['Type'] == "book"." KG"){
                                            echo "Weight : ".$each['Weight'];
                                        }else if($each['Type'] == "furniture"){
                                            echo "Dimensions : ".$each['Height']."x".$each['Width']."x".$each['Length'];
                                        }
                                    echo "</div>";
                                echo "</td>";
                                echo "<td class='td2'></td>";

                                $id = $each['Id'];
                                if(isset($_POST['chk']) && in_array($num,$_POST['chk']) && isset($_POST['delete'])){
                                    $querry = "DELETE FROM product WHERE Id=$id";
                                    $connectQuerry = mysqli_query($connect,$querry);
                                    header("location:Product List.php");
                                }
                                
                            }
                            else if($num == 2){
                                echo "<td>";
                                    echo "<input style='top:10px;left:375px;' type='checkbox' value='$num' name='chk[]'>";
                                    echo "<div>";
                                        echo $each['SKU'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Name'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Price'].".00 $";
                                    echo "</div>";
                                    echo "<div>";
                                        if($each['Type'] == "dvd"){
                                            echo "Size : ".$each['Size']." MB";
                                        }else if($each['Type'] == "book"){
                                            echo "Weight : ".$each['Weight']." KG";
                                        }else if($each['Type'] == "furniture"){
                                            echo "Dimensions : ".$each['Height']."x".$each['Width']."x".$each['Length'];
                                        }
                                    echo "</div>";
                                echo "</td>";
                                echo "<td class='td2'></td>";

                                $id = $each['Id'];
                                if(isset($_POST['chk']) && in_array($num,$_POST['chk']) && isset($_POST['delete'])){
                                    $querry = "DELETE FROM product WHERE Id=$id";
                                    $connectQuerry = mysqli_query($connect,$querry);
                                    header("location:Product List.php");
                                }
                            }
                            else if($num == 3){
                                echo "<td>";
                                    echo "<input style='top:10px;left:738px;' type='checkbox' value='$num' name='chk[]'>";
                                    echo "<div>";
                                        echo $each['SKU'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Name'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Price'].".00 $";
                                    echo "</div>";
                                    echo "<div>";
                                        if($each['Type'] == "dvd"){
                                            echo "Size : ".$each['Size']." MB";
                                        }else if($each['Type'] == "book"){
                                            echo "Weight : ".$each['Weight']." KG";
                                        }else if($each['Type'] == "furniture"){
                                            echo "Dimensions : ".$each['Height']."x".$each['Width']."x".$each['Length'];
                                        }
                                    echo "</div>";
                                echo "</td>";
                                echo "<td class='td2'></td>";

                                $id = $each['Id'];
                                if(isset($_POST['chk']) && in_array($num,$_POST['chk']) && isset($_POST['delete'])){
                                    $querry = "DELETE FROM product WHERE Id=$id";
                                    $connectQuerry = mysqli_query($connect,$querry);
                                    header("location:Product List.php");
                                }
                            }
                            else if($num == 4){
                                echo "<td>";
                                    echo "<input style='top:10px;left:1105px;' type='checkbox' value='$num' name='chk[]'>";
                                    echo "<div>";
                                        echo $each['SKU'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Name'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Price'].".00 $";
                                    echo "</div>";
                                    echo "<div>";
                                        if($each['Type'] == "dvd"){
                                            echo "Size : ".$each['Size']." MB";
                                        }else if($each['Type'] == "book"){
                                            echo "Weight : ".$each['Weight']." KG";
                                        }else if($each['Type'] == "furniture"){
                                            echo "Dimensions : ".$each['Height']."x".$each['Width']."x".$each['Length'];
                                        }
                                    echo "</div>";
                                echo "</td>";

                                $id = $each['Id'];
                                if(isset($_POST['chk']) && in_array($num,$_POST['chk']) && isset($_POST['delete'])){
                                    $querry = "DELETE FROM product WHERE Id=$id";
                                    $connectQuerry = mysqli_query($connect,$querry);
                                    header("location:Product List.php");
                                }
                            }
                        }
                    echo "</tr>";
        
                    $num = 0;
                    echo "<tr style='top:205px'>";
                        foreach($connectQuery as $each){
                            $num++;
                            if($num == 5){
                                echo "<td>";
                                    echo "<input style='top:10px;left:10px;' type='checkbox' value='$num' name='chk[]'>";
                                    echo "<div>";
                                        echo $each['SKU'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Name'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Price'].".00 $";
                                    echo "</div>";
                                    echo "<div>";
                                        if($each['Type'] == "dvd"){
                                            echo "Size : ".$each['Size']." MB";
                                        }else if($each['Type'] == "book"){
                                            echo "Weight : ".$each['Weight']." KG";
                                        }else if($each['Type'] == "furniture"){
                                            echo "Dimensions : ".$each['Height']."x".$each['Width']."x".$each['Length'];
                                        }
                                    echo "</div>";
                                echo "<td class='td2'></td>";

                                $id = $each['Id'];
                                if(isset($_POST['chk']) && in_array($num,$_POST['chk']) && isset($_POST['delete'])){
                                    $querry = "DELETE FROM product WHERE Id=$id";
                                    $connectQuerry = mysqli_query($connect,$querry);
                                    header("location:Product List.php");
                                }
                            }
                            else if($num == 6){
                                echo "<td>";
                                    echo "<input style='top:10px;left:375px;' type='checkbox' value='$num' name='chk[]'>";
                                    echo "<div>";
                                        echo $each['SKU'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Name'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Price'].".00 $";
                                    echo "</div>";
                                    echo "<div>";
                                        if($each['Type'] == "dvd"){
                                            echo "Size : ".$each['Size']." MB";
                                        }else if($each['Type'] == "book"){
                                            echo "Weight : ".$each['Weight']." KG";
                                        }else if($each['Type'] == "furniture"){
                                            echo "Dimensions : ".$each['Height']."x".$each['Width']."x".$each['Length'];
                                        }
                                    echo "</div>";
                                echo "<td class='td2'></td>";

                                $id = $each['Id'];
                                if(isset($_POST['chk']) && in_array($num,$_POST['chk']) && isset($_POST['delete'])){
                                    $querry = "DELETE FROM product WHERE Id=$id";
                                    $connectQuerry = mysqli_query($connect,$querry);
                                    header("location:Product List.php");
                                }
                            }
                            else if($num == 7){
                                echo "<td>";
                                    echo "<input style='top:10px;left:738px;' type='checkbox' value='$num' name='chk[]'>";
                                    echo "<div>";
                                        echo $each['SKU'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Name'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Price'].".00 $";
                                    echo "</div>";
                                    echo "<div>";
                                        if($each['Type'] == "dvd"){
                                            echo "Size : ".$each['Size']." MB";
                                        }else if($each['Type'] == "book"){
                                            echo "Weight : ".$each['Weight']." KG";
                                        }else if($each['Type'] == "furniture"){
                                            echo "Dimensions : ".$each['Height']."x".$each['Width']."x".$each['Length'];
                                        }
                                    echo "</div>";
                                echo "<td class='td2'></td>";

                                $id = $each['Id'];
                                if(isset($_POST['chk']) && in_array($num,$_POST['chk']) && isset($_POST['delete'])){
                                    $querry = "DELETE FROM product WHERE Id=$id";
                                    $connectQuerry = mysqli_query($connect,$querry);
                                    header("location:Product List.php");
                                }
                            }
                            else if($num == 8){
                                echo "<td>";
                                echo "<input style='top:10px;left:1105px;' type='checkbox' value='$num' name='chk[]'>";
                                    echo "<div>";
                                        echo $each['SKU'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Name'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Price'].".00 $";
                                    echo "</div>";
                                    echo "<div>";
                                        if($each['Type'] == "dvd"){
                                            echo "Size : ".$each['Size']." MB";
                                        }else if($each['Type'] == "book"){
                                            echo "Weight : ".$each['Weight']." KG";
                                        }else if($each['Type'] == "furniture"){
                                            echo "Dimensions : ".$each['Height']."x".$each['Width']."x".$each['Length'];
                                        }
                                echo "</div>";

                                $id = $each['Id'];
                                if(isset($_POST['chk']) && in_array($num,$_POST['chk']) && isset($_POST['delete'])){
                                    $querry = "DELETE FROM product WHERE Id=$id";
                                    $connectQuerry = mysqli_query($connect,$querry);
                                    header("location:Product List.php");
                                }
                            }
                            
                        }
                    echo "</tr>";

                    $num = 0;
                    echo "<tr style='top:405px'>";
                        foreach($connectQuery as $each){
                            $num++;
                            if($num == 9){
                                echo "<td>";
                                    echo "<input style='top:10px;left:10px;' type='checkbox' value='$num' name='chk[]'>";
                                    echo "<div>";
                                        echo $each['SKU'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Name'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Price'].".00 $";
                                    echo "</div>";
                                    echo "<div>";
                                        if($each['Type'] == "dvd"){
                                            echo "Size : ".$each['Size']." MB";
                                        }else if($each['Type'] == "book"){
                                            echo "Weight : ".$each['Weight']." KG";
                                        }else if($each['Type'] == "furniture"){
                                            echo "Dimensions : ".$each['Height']."x".$each['Width']."x".$each['Length'];
                                        }
                                echo "</div>";
                                echo "<td class='td2'></td>";

                                $id = $each['Id'];
                                if(isset($_POST['chk']) && in_array($num,$_POST['chk']) && isset($_POST['delete'])){
                                    $querry = "DELETE FROM product WHERE Id=$id";
                                    $connectQuerry = mysqli_query($connect,$querry);
                                    header("location:Product List.php");
                                }
                            }
                            else if($num == 10){
                                echo "<td>";
                                    echo "<input style='top:10px;left:375px;' type='checkbox' value='$num' name='chk[]'>";
                                    echo "<div>";
                                        echo $each['SKU'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Name'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Price'].".00 $";
                                    echo "</div>";
                                    echo "<div>";
                                        if($each['Type'] == "dvd"){
                                            echo "Size : ".$each['Size']." MB";
                                        }else if($each['Type'] == "book"){
                                            echo "Weight : ".$each['Weight']." KG";
                                        }else if($each['Type'] == "furniture"){
                                            echo "Dimensions : ".$each['Height']."x".$each['Width']."x".$each['Length'];
                                        }
                                echo "</div>";
                                echo "<td class='td2'></td>";

                                $id = $each['Id'];
                                if(isset($_POST['chk']) && in_array($num,$_POST['chk']) && isset($_POST['delete'])){
                                    $querry = "DELETE FROM product WHERE Id=$id";
                                    $connectQuerry = mysqli_query($connect,$querry);
                                    header("location:Product List.php");
                                }
                            }
                            else if($num == 11){
                                echo "<td>";
                                    echo "<input style='top:10px;left:738px;' type='checkbox' value='$num' name='chk[]'>";
                                    echo "<div>";
                                        echo $each['SKU'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Name'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Price'].".00 $";
                                    echo "</div>";
                                    echo "<div>";
                                        if($each['Type'] == "dvd"){
                                            echo "Size : ".$each['Size']." MB";
                                        }else if($each['Type'] == "book"){
                                            echo "Weight : ".$each['Weight']." KG";
                                        }else if($each['Type'] == "furniture"){
                                            echo "Dimensions : ".$each['Height']."x".$each['Width']."x".$each['Length'];
                                        }
                                echo "</div>";
                                echo "<td class='td2'></td>";

                                $id = $each['Id'];
                                if(isset($_POST['chk']) && in_array($num,$_POST['chk']) && isset($_POST['delete'])){
                                    $querry = "DELETE FROM product WHERE Id=$id";
                                    $connectQuerry = mysqli_query($connect,$querry);
                                    header("location:Product List.php");
                                }
                            }
                            else if($num == 12){
                                echo "<td>";
                                    echo "<input style='top:10px;left:1105px;' type='checkbox' value='$num' name='chk[]'>";
                                    echo "<div>";
                                        echo $each['SKU'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Name'];
                                    echo "</div>";
                                    echo "<div>";
                                        echo $each['Price'].".00 $";
                                    echo "</div>";
                                    echo "<div>";
                                        if($each['Type'] == "dvd"){
                                            echo "Size : ".$each['Size']." MB";
                                        }else if($each['Type'] == "book"){
                                            echo "Weight : ".$each['Weight']." KG";
                                        }else if($each['Type'] == "furniture"){
                                            echo "Dimensions : ".$each['Height']."x".$each['Width']."x".$each['Length'];
                                        }
                                echo "</div>";

                                $id = $each['Id'];
                                if(isset($_POST['chk']) && in_array($num,$_POST['chk']) && isset($_POST['delete'])){
                                    $querry = "DELETE FROM product WHERE Id=$id";
                                    $connectQuerry = mysqli_query($connect,$querry);
                                    header("location:Product List.php");
                                }
                            }
                        }
                    echo "</tr>";

                    // $num = 0;
                    // echo "<tr style='top:605px'>";
                    //     foreach($connectQuery as $each){
                    //         $num++;
                    //         if($num == 13){
                    //             echo "<td><input style='top:10px;left:10px;' type='checkbox'></td>";
                    //             echo "<td class='td2'></td>";
                    //         }
                    //         else if($num == 14){
                    //             echo "<td><input style='top:10px;left:395px;' type='checkbox'></td>";
                    //             echo "<td class='td2'></td>";
                    //         }
                    //         else if($num == 15){
                    //             echo "<td><input style='top:10px;left:775px;' type='checkbox'></td>";
                    //             echo "<td class='td2'></td>";
                    //         }
                    //         else if($num == 16){
                    //             echo "<td><input style='top:10px;left:1155px;' type='checkbox'></td>";
                    //         }
                    //     }
                    // echo "</tr>";
                ?>
            </table>
            
        </section>

        <footer>
            <div class="line" style="top:680px"></div>
        </footer>
    </form>
</body>
</html>