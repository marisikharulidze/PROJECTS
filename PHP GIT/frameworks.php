<?php
    abstract class Main{
        public $name;
        public $error;
        function __construct(){
            echo $this->name = isset($_POST['name']) ? $_POST['name'] : null;
        }
        abstract public function fun();
        
    }
    class delete extends Main{
        public function fun(){
            if(empty($this->name)){
                echo $this->error = "errorrr";
            }
            if(empty($this->error)){
                echo "<br><br><br> no error";
            }
        }
    }



    $del = new delete();
    $del->fun();






?>
<body>
    <form method="POST">
        Name : <input type="text" name="name"> 
        <input type="submit">

    </form>
    
</body>
</html>