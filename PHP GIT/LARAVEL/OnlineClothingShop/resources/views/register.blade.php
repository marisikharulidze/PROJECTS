<style>
    body,
    html {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    .box {
        width: 345px;
        padding: 26px 30px;
        border: solid 0.5px transparent;
        /* background: rgba(180, 198, 255, 0.404); */
        position: absolute;
        top: 200px;
        left: 535px;
        border-radius: 8px;
        /* box-shadow: 0 0 .2rem #fff, 0 0 1rem rgba(255, 255, 255, 0.74), 0 0 1.5rem #5a8ef056, 0 0 0.5rem #7494fd70, 0 0 0.5rem #0934f367, inset 0 0 0.6rem #1365fe5e; */
    }
    .title {
        z-index: 1;
        font-size: 40px;
        font-weight: bold;
        text-shadow: 0 0 2px rgb(175, 175, 175), 0 0 2px rgb(175, 175, 175), 0 0 8px #fff, 0 0 2px #c21a1a;
        color: rgb(0, 0, 0);
        font-family: Arial, Helvetica, sans-serif;
        position: absolute;
        top: 9px;
        left: 68px;
    }
    button {
        border: solid rgba(0, 0, 0, 0.459) 2px;
        background-color: black;
        height: 42px;
        width: 400px;
        color: white;
        cursor: pointer;
    }
    .profile:hover {
        box-shadow: 0 0 .2rem #fff, 0 0 1rem #fff, 0 0 1.2rem #5a8ef0, 0 0 0.5rem #a4b2ff, 0 0 0.1rem #0919f367, inset 0 0 0.3rem #1365feb7;
        background: rgba(96, 160, 255, 0.212);
    }

    button:hover {
        background: rgb(70, 70, 70);
    }
    hr {
        border: rgb(235, 235, 235) 0.5px solid;
        width: 99.8%;
        position: absolute;
        top: 18%;
    }
    input {
        border: rgb(0, 0, 0) solid 1px;
        background-color: rgb(212, 212, 212);
        height: 28px;
        width: 400px;
        border: transparent;
        padding: 5px;
    }
    .inp {
        background-color: transparent;
    }
    a {
        text-decoration: transparent;
        color: black;
    }

    p {
        color: rgb(216, 1, 1);
        font-weight: bold;
        text-shadow: 0 0 1px rgba(255, 255, 255, 0.726), 0 0 1px rgba(247, 141, 141, 0.685), 0 0 80px #fff, 0 0 42px #a2b3ff, 0 0 10px #5272ff52, 0 0 40px #5271ff, 0 0 20px #5272ff57, 0 0 16px #5272ff56;
    }

    .profile {
        position: absolute;
        top: 12px;
        right: 20px;
        width: 150px;
    }
    table {
        text-align: center;
        height: 6%;
        width: 100%;
        background-color: rgba(94, 94, 94, 0.5);
        position: absolute;
        top: 0;
        border: transparent solid 1px;
        /* opacity: 40%; */
        color: rgb(0, 0, 0);
    }
    td {
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        border: solid 0px black;
        text-align: center;
        width: 1.5%;
        height: 55px;
        color: rgb(0, 0, 0);
        /* padding-right: 20px; */
    }
    td:hover {
        text-decoration: underline;
        background-color: rgba(175, 175, 175, 0.541);
    }
    .cont {
        max-width: 100%;
        margin: 0 auto;
        font-size: 24px;
        padding: 25px;
    }
    .parallax {
        background-image: url("pic/30.jpg");
        background-size: cover;
        background-attachment: fixed;
        height: 500px;
    }
    .none:hover {
        background-color: rgba(170, 170, 170, 0);
    }
    i {
        font-size: 20px;
    }
    .hrdark{
        border: rgb(0, 0, 0) 1.2px solid;
        width:11%;
        position: absolute;
        top: 18%;
        left:53.5%;
    }
    span{
        position: absolute;
        top: 55px;
        font-size: 12px;
        color: rgb(219, 14, 14); 
    }
</style>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<body>

    <?php
        @$name = $_GET["name"];
        @$lname = $_GET["lname"];
        @$mail = $_GET["mail"];
        @$pass = $_GET["pass"];
        @$confirmpass = $_GET["confirmpass"];                                                                                                   

        $nameError = "";
        $lnameError = "";
        $mailError = "";
        $passError = "";
        $confirmpassError = "";


        if(isset($_GET['create'])){
            if(empty($name)){
                $nameError = " *Name is required";
            }
            else{
                if(preg_match("#[0-9]+#", $name)){
                    $nameError = " *Name should not contain any numbers";
                }
                if(strlen($name)<=2 || strlen($name)>20){
                    $nameError = " *Name is too short or too long";
                }
            }

            if(empty($lname)){
                $lnameError = " *Last name is required";
            }
            else{
                if(preg_match("#[0-9]+#", $lname)){
                    $lnameError = " *Last name should not contain any numbers";
                }
                if(strlen($lname)<=2 || strlen($lname)>20){
                    $lnameError = " *Last name is too short or too long";
                }
            }

            if(empty($mail)){
                $mailError = " *Email is required";
            }
            else{
                if(!preg_match("#@#",$mail)){
                    $mailError = " *Email should contain @";
                }
                else if(!preg_match("#[.]#",$mail)){
                    $mailError = " *Enter valid Email";
                }
                else if(!preg_match("#com#",$mail) && !preg_match("#ge#",$mail) && !preg_match("#ru#",$mail) && !preg_match("#gmail#",$mail) && !preg_match("#yahoo#",$mail)){
                    $mailError = " *Enter valid Email";
                }
                else if($result = DB::select('select email from users')){
                    $arr = [];
                    foreach($result as $res){
                        foreach ($res as $r) {
                            $arr[] = $r;
                        }
                    }
                    if(in_array($mail,$arr) ){
                        $mailError = " *This Email is already used";
                    }
                    else{
                        $mailError="";
                    }
                }
            }

            if(empty($pass)){
                $passError = " *Password is required";
            }
            else{
                $final = 7;
                if(strlen($pass)<8){
                    $final -=1;
                }
                if(!preg_match("#[0-9]+#", $pass)){
                    $final -=1;
                }
                if (!preg_match("#[a-z]+#", $pass)) {
                    $final -=1;
                }
                if (!preg_match("#[A-Z]+#", $pass) ) {
                    $final -=2;
                }
                if (!preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $pass) ) {
                    $final -=2;
                }

                if($final){
                    if($final <= 3){
                        $passError = "Weak Password";
                    }
                    else {$passError = "";}
                }
            }

            if(empty($confirmpass)){
                $confirmpassError =" *Confirmation is required";
            }
            else{
                if($confirmpass != $pass){
                    $confirmpassError = " *Passwords do not match";
                }
            }

            if(empty($nameError) && empty($lnameError) && empty($mailError) && empty($passError) && empty($confirmpassError)){
                DB::insert('INSERT INTO users(first_name,last_name,email,password) values(?,?,?,?)',[$name,$lname,$mail,$pass]);
            }
        }

    ?>

    <form method="get" enctype="multipart/form-data">
        <header>
            <a href="{{ url('/') }}" ><div class="title">AXIS</div> </a>
            <table>
                <tr>
                    <td class="none" style="width:1%"><a href="{{ url('sign') }}"><i class="fas fa-bars"></i></a></td>
                    <td style="width:7.4%" class="none"></td>
                    <td class="none"><input type="text" placeholder="search"><i class="fas fa-search" style="position: absolute; left:64.4%;top:31%"></i></td>
                    <td style="width:1%" class="none"></td>
                    <td><a href="{{ url('signin') }}"><i class="fas fa-user"></i>  Sign in </a></td>
                    <td><a href="{{ url('sign') }}"><i class="fas fa-heart"></i>  Wishlist </a></td>
                    <td><a href="{{ url('sign') }}"><i class="fas fa-shopping-cart"></i>  Shopping cart</a></td>
                </tr>
            </table>
            <a style="position: absolute;top: 120px;left: 650px;" href="{{ url('signin') }}">Login</a>
            <hr class="hrdark">
            <a style="position: absolute;top: 120px;left: 835px;" href="{{ url('register') }}">Register</a>
            <hr>
        </header>
        
        <section>
            <div class="box">
                <input type="text" name="name" placeholder="First Name" class="inp" value="<?=$name?>">
                <hr style="top: 12%">
                <span style="top: 53px;"><?php echo $nameError?></span>
                <br>
                <input  type="text" name="lname"placeholder="Last Name" class="inp" value="<?=$lname?>">
                <hr style="top: 26%">
                <span style="top: 100px;"><?php echo $lnameError?></span>
                <br>
                <input type="text" name="mail" placeholder="Email" class="inp" value="<?=$mail?>">
                <hr style="top: 40%">
                <span style="top: 149px;"><?= $mailError ?></span>
                <br>
                <input type="text" name="pass" placeholder="Password" class="inp" value="<?=$pass?>">
                <hr style="top: 54%">
                <span style="top: 196px;"><?= $passError ?></span>
                <br>
                <input type="text" name="confirmpass" placeholder="Confirm Password" class="inp" value="<?=$confirmpass?>">
                <hr style="top: 67%">
                <span style="top: 240px;"><?= $confirmpassError ?></span>
                <br>
                <br>
                <button name="create" >Create account</button>
            </div>
        </section>
        
        <footer>

        </footer>
    </form>

</body>
</html>