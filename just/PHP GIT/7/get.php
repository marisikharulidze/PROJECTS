<!DOCTYPE html>
<head>
<body>
    <?php
        $connection = mysqli_connect('localhost','root','','mydata');
        if(!$connection){
            die('error'.mysqli_connect_error());
        }

        echo "<h1>menu</h1>";
        //1
        $query = "SELECT Title, Text FROM menu WHERE Id=1";
        $var = mysqli_query($connection, $query);
        if(!$var){
            die('error'.mysqli_error());
        }
        $get = mysqli_fetch_assoc($var);
        echo "1) first member <br> Title : ".$get['Title']."<br> Text : ".$get['Text'] . "<br>";

        //2
        $query = "SELECT Title, Text FROM menu";
        $var = mysqli_query($connection, $query);
        echo "<br>2) all members Text and Title : <br>";
        foreach($var as $varr){
            echo $varr['Text']."&nbsp&nbsp &nbsp&nbsp ".$varr['Title']."<br>";
        }

        //3
        $query = "SELECT Title, Meta_k, Meta_d, Text FROM menu WHERE Id=2";
        $var = mysqli_query($connection,$query);
        $get = mysqli_fetch_assoc($var);
        echo "<br>3) second member <br> Title : ".$get['Title']."<br> Text : ".$get['Text'] . "<br> Meta_k : ".$get['Meta_k']."<br> Meta_d : ".$get['Meta_d'] . "<br>";

        //4
        $query = "SELECT Title, Meta_k, Meta_d, Text FROM menu WHERE Id=2 OR Id>2";
        $var = mysqli_query($connection,$query);
        $get = mysqli_fetch_assoc($var);
        echo "<br>4) all members Text, Title, Meta_k and Meta_d which id is equal or greater than 2  : <br>";
        foreach($var as $varr){
            echo $varr['Text']."&nbsp&nbsp &nbsp&nbsp ".$varr['Title']."&nbsp&nbsp &nbsp&nbsp ".$varr['Meta_k']."&nbsp&nbsp &nbsp&nbsp ".$varr['Meta_d']."<br>";
        }

        //5
        $query = "SELECT Title, Meta_k, Meta_d, Text FROM menu WHERE Id=4 OR Id<4";
        $var = mysqli_query($connection,$query);
        echo "<br>5) all members Text, Title, Meta_k and Meta_d which id is equal or lower than 4  : <br>";
        foreach($var as $varr){
            echo $varr['Text']."&nbsp&nbsp &nbsp&nbsp ".$varr['Title']."&nbsp&nbsp &nbsp&nbsp ".$varr['Meta_k']."&nbsp&nbsp &nbsp&nbsp ".$varr['Meta_d']."<br>";
        }

        //6
        $query = "SELECT Title, Id,Text, Meta_k, Meta_d FROM menu WHERE Title='films' OR Title='games'";
        $var = mysqli_query($connection,$query);
        echo "<br>6) all members Title, Id, Text, Meta_k and Meta_d which title = films or title = games  : <br>";
        foreach($var as $varr){
            echo $varr['Title']."&nbsp&nbsp &nbsp&nbsp ".$varr['Id']."&nbsp&nbsp &nbsp&nbsp ".$varr['Text']."&nbsp&nbsp &nbsp&nbsp ".$varr['Meta_k']."&nbsp&nbsp &nbsp&nbsp ".$varr['Meta_d']."<br>";
        }

        //7
        $query = "SELECT Title, Id,Text, Meta_k, Meta_d FROM menu WHERE Title='musics' AND ID>3";
        $var = mysqli_query($connection,$query);
        echo "<br>7) all members Title, Id, Text, Meta_k and Meta_d which title = musics and id>3  : <br>";
        foreach($var as $varr){
            echo $varr['Title']."&nbsp&nbsp &nbsp&nbsp ".$varr['Id']."&nbsp&nbsp &nbsp&nbsp ".$varr['Text']."&nbsp&nbsp &nbsp&nbsp ".$varr['Meta_k']."&nbsp&nbsp &nbsp&nbsp ".$varr['Meta_d']."<br><br>";
        }


        echo "<h1>users</h1>";
        //1
        $query = "SELECT Age, Date, Reg_Date, Gender FROM users WHERE Id<4";
        $result = mysqli_query($connection,$query);
        echo "1) first 3 members Age, Date, Reg_Date and Gender : <br>";
        foreach($result as $res){
            echo $res['Age']."&nbsp&nbsp &nbsp&nbsp ".$res['Date']."&nbsp&nbsp &nbsp&nbsp ".$res['Reg_Date']."&nbsp&nbsp &nbsp&nbsp ".$res['Gender']."<br>";
        }

        //2
        $query = "SELECT Id,Name,Lastname,Age, Date, Reg_Date,Password, Gender FROM users WHERE Id<3";
        $result = mysqli_query($connection,$query);
        echo "<br>2) first 2 members Id, Name, Lastname, Age, Date, Reg_Date, Password and Gender : <br>";
        foreach($result as $res){
            echo $res['Id']."&nbsp&nbsp &nbsp&nbsp ".$res['Name']."&nbsp&nbsp &nbsp&nbsp ".$res['Lastname']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Age']."&nbsp&nbsp &nbsp&nbsp ".$res['Date']."&nbsp&nbsp &nbsp&nbsp ".$res['Reg_Date']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Password']."&nbsp&nbsp &nbsp&nbsp ".$res['Gender']."<br>";
        }

        //3
        $query = "SELECT Id,Name,Lastname,Age, Date, Reg_Date,Password, Gender FROM users WHERE Id<4 AND Id>1";
        $result = mysqli_query($connection,$query);
        echo "<br>3) all members Id, Name, Lastname, Age, Date, Reg_Date, Password and Gender which id is greater than 1 and less than 4 : <br>";
        foreach($result as $res){
            echo $res['Id']."&nbsp&nbsp &nbsp&nbsp ".$res['Name']."&nbsp&nbsp &nbsp&nbsp ".$res['Lastname']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Age']."&nbsp&nbsp &nbsp&nbsp ".$res['Date']."&nbsp&nbsp &nbsp&nbsp ".$res['Reg_Date']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Password']."&nbsp&nbsp &nbsp&nbsp ".$res['Gender']."<br>";
        }

        //4
        $query = "SELECT Id,Name,Lastname,Age, Date, Reg_Date,Password, Gender FROM users WHERE Id>4 OR Id=4 OR Id<2";
        $result = mysqli_query($connection,$query);
        echo "<br>4) all members Id, Name, Lastname, Age, Date, Reg_Date, Password and Gender which id is greater or equal 4 or less than 2 : <br>";
        foreach($result as $res){
            echo $res['Id']."&nbsp&nbsp &nbsp&nbsp ".$res['Name']."&nbsp&nbsp &nbsp&nbsp ".$res['Lastname']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Age']."&nbsp&nbsp &nbsp&nbsp ".$res['Date']."&nbsp&nbsp &nbsp&nbsp ".$res['Reg_Date']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Password']."&nbsp&nbsp &nbsp&nbsp ".$res['Gender']."<br>";
        }

        //5
        $query = "SELECT Id,Name,Lastname,Age, Date, Reg_Date,Password, Gender FROM users WHERE DATE='2014-07-04'";
        $result = mysqli_query($connection,$query);
        echo "<br>5) all members Id, Name, Lastname, Age, Date, Reg_Date, Password and Gender which Date = 2014-07-04 : <br>";
        foreach($result as $res){
            echo $res['Id']."&nbsp&nbsp &nbsp&nbsp ".$res['Name']."&nbsp&nbsp &nbsp&nbsp ".$res['Lastname']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Age']."&nbsp&nbsp &nbsp&nbsp ".$res['Date']."&nbsp&nbsp &nbsp&nbsp ".$res['Reg_Date']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Password']."&nbsp&nbsp &nbsp&nbsp ".$res['Gender']."<br>";
        }

        //6
        $query = "SELECT Id,Name,Lastname,Age, Date, Reg_Date,Password, Gender FROM users WHERE DATE>'2014-07-04'";
        $result = mysqli_query($connection,$query);
        echo "<br>6) all members Id, Name, Lastname, Age, Date, Reg_Date, Password and Gender which Date > 2014-07-04 : <br>";
        foreach($result as $res){
            echo $res['Id']."&nbsp&nbsp &nbsp&nbsp ".$res['Name']."&nbsp&nbsp &nbsp&nbsp ".$res['Lastname']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Age']."&nbsp&nbsp &nbsp&nbsp ".$res['Date']."&nbsp&nbsp &nbsp&nbsp ".$res['Reg_Date']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Password']."&nbsp&nbsp &nbsp&nbsp ".$res['Gender']."<br>";
        }

        //7
        $query = "SELECT Id,Name,Lastname,Age, Date, Reg_Date,Password, Gender FROM users WHERE DATE>'2014-06-04' AND Date<'2014-07-04'";
        $result = mysqli_query($connection,$query);
        echo "<br>7) all members Id, Name, Lastname, Age, Date, Reg_Date, Password and Gender which Date>2014-06-04 and Date<2014-07-04 : <br>";
        foreach($result as $res){
            echo $res['Id']."&nbsp&nbsp &nbsp&nbsp ".$res['Name']."&nbsp&nbsp &nbsp&nbsp ".$res['Lastname']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Age']."&nbsp&nbsp &nbsp&nbsp ".$res['Date']."&nbsp&nbsp &nbsp&nbsp ".$res['Reg_Date']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Password']."&nbsp&nbsp &nbsp&nbsp ".$res['Gender']."<br>";
        }

        //8
        $query = "SELECT Id,Name,Lastname,Age, Date, Reg_Date,Password, Gender FROM users WHERE (Age>10 or Age=10) AND (Age<18 or Age=18)";
        $result = mysqli_query($connection,$query);
        echo "<br>8) all members Id, Name, Lastname, Age, Date, Reg_Date, Password and Gender which age>=10 and age<=18 : <br>";
        foreach($result as $res){
            echo $res['Id']."&nbsp&nbsp &nbsp&nbsp ".$res['Name']."&nbsp&nbsp &nbsp&nbsp ".$res['Lastname']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Age']."&nbsp&nbsp &nbsp&nbsp ".$res['Date']."&nbsp&nbsp &nbsp&nbsp ".$res['Reg_Date']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Password']."&nbsp&nbsp &nbsp&nbsp ".$res['Gender']."<br><br>";
        }


        echo "<h1>data</h1>";
        //1
        $query = "SELECT Id, Title, Date, Type,Photo, Text,Autor,Description,Meta_k,Meta_d FROM data WHERE (Id<7 or Id=7) AND type='type2'";
        $result = mysqli_query($connection,$query);
        echo "1) all members Id, Title, Date, Type, Photo, Text, Autor, Description, Meta_k and Meta_d which Id<=7 and type=2 : <br>";
        foreach($result as $res){
            echo $res['Id']."&nbsp&nbsp &nbsp&nbsp ".$res['Title']."&nbsp&nbsp &nbsp&nbsp ".$res['Date']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Type']."&nbsp&nbsp &nbsp&nbsp ".$res['Photo']."&nbsp&nbsp &nbsp&nbsp ".$res['Text']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Autor']."&nbsp&nbsp &nbsp&nbsp ".$res['Description']."&nbsp&nbsp &nbsp&nbsp ".$res['Meta_k'].
                    "&nbsp&nbsp &nbsp&nbsp ".$res['Meta_d']."<br>";
        }

        //2
        echo "<br>2) all members Id, Title, Date, Type, Photo, Text, Autor, Description, Meta_k and Meta_d which are last 5 : <br>";
        for($i=0; $i<5; $i++){
            $query = "SELECT Id, Title, Date, Type,Photo, Text,Autor,Description,Meta_k,Meta_d FROM data WHERE Id=(SELECT max(Id)-$i FROM data)";
            $result = mysqli_query($connection,$query);
            foreach($result as $res){
                echo $res['Id']."&nbsp&nbsp &nbsp&nbsp ".$res['Title']."&nbsp&nbsp &nbsp&nbsp ".$res['Date']."&nbsp&nbsp &nbsp&nbsp ".
                        $res['Type']."&nbsp&nbsp &nbsp&nbsp ".$res['Photo']."&nbsp&nbsp &nbsp&nbsp ".$res['Text']."&nbsp&nbsp &nbsp&nbsp ".
                        $res['Autor']."&nbsp&nbsp &nbsp&nbsp ".$res['Description']."&nbsp&nbsp &nbsp&nbsp ".$res['Meta_k'].
                        "&nbsp&nbsp &nbsp&nbsp ".$res['Meta_d']."<br>";
            }
        }

        //3
        echo "<br>3) all members Id, Title, Date, Type, Photo, Text, Autor, Description, Meta_k and Meta_d which are last 3 in the reversed order : <br>";
        for($i=2; $i>-1; $i--){
            $query = "SELECT Id, Title, Date, Type,Photo, Text,Autor,Description,Meta_k,Meta_d FROM data WHERE Id=(SELECT max(Id)-$i FROM data)";
            $result = mysqli_query($connection,$query);
            foreach($result as $res){
                echo $res['Id']."&nbsp&nbsp &nbsp&nbsp ".$res['Title']."&nbsp&nbsp &nbsp&nbsp ".$res['Date']."&nbsp&nbsp &nbsp&nbsp ".
                        $res['Type']."&nbsp&nbsp &nbsp&nbsp ".$res['Photo']."&nbsp&nbsp &nbsp&nbsp ".$res['Text']."&nbsp&nbsp &nbsp&nbsp ".
                        $res['Autor']."&nbsp&nbsp &nbsp&nbsp ".$res['Description']."&nbsp&nbsp &nbsp&nbsp ".$res['Meta_k'].
                        "&nbsp&nbsp &nbsp&nbsp ".$res['Meta_d']."<br>";
            }
        }
            
        //4
        echo "<br>4) all members Id, Title, Date, Type, Photo, Text, Autor, Description, Meta_k and Meta_d which have even id s : <br>";
        
        $query = "SELECT Id, Title, Date, Type,Photo, Text,Autor,Description,Meta_k,Meta_d FROM data WHERE Id%2=0";
        $result = mysqli_query($connection,$query);
        foreach($result as $res){
            echo $res['Id']."&nbsp&nbsp &nbsp&nbsp ".$res['Title']."&nbsp&nbsp &nbsp&nbsp ".$res['Date']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Type']."&nbsp&nbsp &nbsp&nbsp ".$res['Photo']."&nbsp&nbsp &nbsp&nbsp ".$res['Text']."&nbsp&nbsp &nbsp&nbsp ".
                    $res['Autor']."&nbsp&nbsp &nbsp&nbsp ".$res['Description']."&nbsp&nbsp &nbsp&nbsp ".$res['Meta_k'].
                    "&nbsp&nbsp &nbsp&nbsp ".$res['Meta_d']."<br>";
        }
        
        
    ?>  
    <center>

    </center>
</body>
</html>