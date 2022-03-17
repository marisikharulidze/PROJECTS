<!DOCTYPE html>
<head>
    <style>
        table{
            border: solid black 1px;
            margin: 10px auto;
            padding: 20px;
            width: 1300px;
            background-color:whitesmoke;
        }
        th{
            border: solid black 2px;
            margin: 10px auto;
            padding: 30px;
        }
        td{
            border: solid black 1px;
            margin: 10px auto;
            padding: 15px;
            text-align:center;
        }
        .del{
            background-color:red;
            color:black;
        }
        .edit{
            background-color:blue;
            color:black;
        }
        a{
            text-decoration:none;
            border: solid 0px;
            padding: 3px;
            margin: 5px;
        }
        a:hover{
            background-color:white;
        }
    </style>
</head>
<body>
    <?php
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=personal","root","");
        }
        catch(PDOExeption $e){
            echo "DB connection failed : ".$e->getMessage();
        }

        if(isset($_GET['delete'])){
            $id = $_GET['delete'];
            $query = $pdo->exec("DELETE FROM person WHERE AppointmentOrderNumber=$id");
            header("Refresh:0; url=main.php");
        }

        if(isset($_GET['edit'])){
            $update = true;
            $id = $_GET['edit'];
            $query = $pdo->prepare("SELECT Name,LastName,Birthday,PrivateNum,Position,RegistrationDate,AppointmentOrderNumber FROM person WHERE AppointmentOrderNumber=$id");
            $query->execute();
            $data = $query->fetchAll();
            for($i=0;$i<count($data); $i++){
                $name = $data[$i]['Name'];
                $lastName = $data[$i]['LastName'];
                $birthday = $data[$i]['Birthday'];
                $privateNum = $data[$i]['PrivateNum'];
                $position = $data[$i]['Position'];
                $appointmentOrderNumber = $data[$i]['AppointmentOrderNumber'];
                $registrationDate = $data[$i]['RegistrationDate'];
                echo $appointmentOrderNumber;
            }
        }
    
        $id = 0;

        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $lastName = $_POST['lastName'];
            $birthday = $_POST['birthday'];
            $privateNum = $_POST['privateNum'];
            $position = $_POST['position'];
            $appointmentOrderNumber = $_POST['appointmentOrderNumber'];
            echo $appointmentOrderNumber;
            $registrationDate = $_POST['registrationDate'];

            $query = $pdo->prepare("UPDATE person SET Name='$name',LastName='$lastName',birthday='$birthday',privateNum='$privateNum',position='$position',appointmentOrderNumber='$appointmentOrderNumber',registrationDate='$registrationDate' WHERE AppointmentOrderNumber='$id'");
            $query -> execute();
            // echo "<script>alert('refreshing page')</script>";
            // header("Refresh:0; url=main.php");
            
            $update = false;
            $name = '';
            $lastName = '';
            $birthday = '';
            $privateNum = '';
            $position = '';
            $appointmentOrderNumber ='';
            $registrationDate = '';
        }
    ?>
    <center>
        <form method="POST">
            <h2>ADD A NEW PERSON'S INFORMATION</h2>
                                  <input type="hidden" name="id">
            Input Person's Name : <input type="text" name="name" value="<?php echo @$name ;?>" style="margin-top:15px;"><br><br>
            Input Person's Last Name : <input type="text" name="lastName" value="<?php echo @$lastName; ?>"><br><br>
            Input Person's Birthday : <input type="date" name="birthday" value="<?php echo @$birthday; ?>"><br><br>
            Input Person's Private Number : <input type="text" name="privateNum" value="<?php echo @$privateNum; ?>"><br><br>
            Input Person's Position : <input type="text" name="position" value="<?php echo @$position; ?>"><br><br>
            Input Person's Registration Date : <input type="date" name="registrationDate" disabled="disabled" value="<?php echo date('Y-m-d'); ?>"><br><br>
            Input Person's Appointment Order Number : <input type="text" name="appointmentOrderNumber" disabled="disabled" value="<?php echo @$appointmentOrderNumber; ?>"><br><br>

            <?php 
                if(@$update == true){ ?>
                    <button name="update" >update</button><br>
                <?php }
                else { ?>
                    <button name="submit" >save</button><br>
                <?php } ?>
            
            <span><?=@$correct?></span>
            <p><?=@$error?></p>
        </form>
    </center>
    
<?php
        @$name = $_POST['name'];
        @$lastName = $_POST['lastName'];
        @$birthday = $_POST['birthday'];
        @$privateNum = $_POST['privateNum'];
        @$position = $_POST['position'];
        
        
        if(!empty($name) && !empty($lastName) && !empty($birthday) && !empty($privateNum) && !empty($position)){
            if(isset($_POST['submit'])){
                $query = "INSERT INTO person(Name,LastName,Birthday,PrivateNum,Position,RegistrationDate,AppointmentOrderNumber) VALUES(:Name,:LastName,:Birthday,:PrivateNum,:Position,:RegistrationDate,:AppointmentOrderNumber)";
                $prepare = $pdo->prepare($query);
                $exec = $prepare->execute([":Name"=>$name,":LastName"=>$lastName,":Birthday"=>$birthday,":PrivateNum"=>$privateNum,":Position"=>$position,":RegistrationDate"=>date('Y-m-d'),":AppointmentOrderNumber"=>'']);
            }
        }

        $query = $pdo->prepare("SELECT Name,LastName,Birthday,PrivateNum,Position,RegistrationDate,AppointmentOrderNumber FROM person");
        $query -> execute();
        $data = $query->fetchAll();?>

        <table>
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Birthday</th>
                <th>Private Number</th>
                <th>Position</th>
                <th>Appointment Order Number</th>
                <th>Registration Date</th>
                <th colspan="2">Action</th>
            </tr>

            <?php
                foreach($data as $dat){
                    $name = $dat['Name'];
                    $lastName = $dat['LastName'];
                    $birthday = $dat['Birthday'];
                    $privateNum = $dat['PrivateNum'];
                    $position = $dat['Position'];
                    $appointmentOrderNumber = $dat['AppointmentOrderNumber'];
                    $registrationDate = $dat['RegistrationDate'];
                    ?>

                    <tr>
                        <td><?php echo $name;?></td>
                        <td><?php echo $lastName;?></td>
                        <td><?php echo $birthday;?></td>
                        <td><?php echo $privateNum;?></td>
                        <td><?php echo $position;?></td>
                        <td><?php echo $appointmentOrderNumber;?></td>
                        <td><?php echo $registrationDate; ?></td>
                        <td>
                            <a href="main.php?edit=<?php echo $appointmentOrderNumber;?>" class="edit">Edit</a>
                            <a href="main.php?delete=<?php echo $appointmentOrderNumber;?>" class="del">Delete</a>
                        </td>
                    </tr>

                    <?php
                }
            ?>
        </table>
</body>
</html>
