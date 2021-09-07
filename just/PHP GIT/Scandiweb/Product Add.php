<?php
    abstract class Product{
        public $connect;

        public $sku;
        public $name;
        public $price;
        public $type;
         public $size;
         public $weight;
         public $height;
         public $width;
         public $length;

        public $skuError;
        public $nameError;
        public $priceError;
        public $typeError;
         public $sizeError;
         public $weightError;
         public $heightError;
         public $widthError;
         public $lengthError;

        abstract public function func();
        function __construct(){
            $this->sku = isset($_POST['sku']) ? $_POST['sku'] : null;
            $this->name = isset($_POST['name']) ? $_POST['name'] : null;
            $this->price = isset($_POST['price']) ? $_POST['price'] : null;
            $this->type = isset($_POST['type']) ? $_POST['type'] : null;
            $this->size = isset($_POST['size']) ? $_POST['size'] : null;
            $this->weight = isset($_POST['weight']) ? $_POST['weight'] : null;
            $this->height = isset($_POST['sheight']) ? $_POST['sheight'] : null;
            $this->width = isset($_POST['width']) ? $_POST['width'] : null;
            $this->length = isset($_POST['length']) ? $_POST['length'] : null;

            $this->connect = mysqli_connect('localhost','root', '', 'web application');
            if(!$this->connect) die('ERROR'.mysqli_connect_error());
        }
    }
    
    class SaveButtonValidations extends Product{
        public function func(){
            if(isset($_POST['save'])){
                if(empty($this->sku)) $this->skuError = "*Please, provide SKU.";
                else{
                    if(!preg_match('#[0-9]+#', $this->sku) && (!preg_match('#[a-z]+#',$this->sku) || !preg_match('#[A-Z]+#', $this->sku))){
                        $this->skuError = "*Please, provide the data of indicated type.";
                    }
                }
                $this->nameError = $this->name ? null : "*Please, provide Name.";
                $this->priceError = $this->price ? null : "*Please, provide Price.";
                $this->typeError = $this->type ? null : "*Please, provide Type.";

                if($this->type == "dvd"){
                    $this->sizeError = $this->size ? null : "*Please, provide size.";
                }
                else if($this->type == "book"){
                    $this->weightError = $this->weight ? null : "*Please, provide weight.";
                }
                else if($this->type == "furniture"){
                    $this->heightError = $this->height ? null : "*Please, provide height.";
                    $this->widthError = $this->width ? null : "*Please, provide width.";
                    $this->lengthError = $this->length ? null : "*Please, provide length.";
                }
                if(empty($this->skuError) && empty($this->nameError) && empty($this->priceError) && empty($this->typeError) && empty($this->sizeError) && empty($this->weightError)
                                                                            && (empty($this->heightError) || empty($this->widthError) || empty($this->lengthError))){
                    $query = "INSERT INTO product(SKU,Name,Price,Type,Size,Weight,Height,Width,Length) VALUES('$this->sku','$this->name','$this->price','$this->type',
                            '$this->size','$this->weight','$this->height','$this->width','$this->length')";
                    $connectQuery = mysqli_query($this->connect,$query);
                    if(!$connectQuery) die('ERROR');
                    header("location:Product List.php");
                }
            }
        }
    }
    class CancelButton extends Product{
        public function func(){
            if(isset($_POST['cancel'])){
                header("location:Product List.php");
            }
        }
        
    }
  
    $save = new SaveButtonValidations();
    $save -> func();
    
    $cancel = new CancelButton();
    $cancel -> func();

?>
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<head>
    <style>
        div{
            position: absolute;
            left: 30px;
        }
        #divHeight, #height{
            top:224px;
        }
        #divWidth, #width{
            top:262px;
        }
        #divLength, #length{
            top:298px;
        }
        span{
            color:red;
            left:340px;
            position: absolute;
        }
    </style>
</head>
<body>
    <form method="POST" id="product_form">

        <header>
            <h1>Product Add</h1>    
            <button name="save" class="save">SAVE</button>
            <button name="cancel" class="cancel">CANCEL</button>
            <div class="line"></div>
        </header>

        <section id="section">
            <br>
            SKU : <input type="text" id="sku" name="sku" value="<?php echo $save->sku;?>">
            <span><?php echo $save->skuError;?></span>
            <br>
            <br>
            Name : <input type="text" id="name" name="name" value="<?php echo $save->name;?>">
            <span><?php echo $save->nameError;?></span>
            <br>
            <br>
            Price($) : <input type="number" id="price" name="price" value="<?php echo $save->price;?>">
            <span><?php echo $save->priceError;?></span>
            <br>
            <br>
            Type Switcher : <select id="productType" name="type" onChange='reload(this.value)'>
                                <option value="" selected disabled>--Type Switcher--</option>
                                <option value="dvd"  id="dvd" name="dvd">DVD</option>
                                <option value="book" id="book" name="book">Book</option>
                                <option value="furniture" id="furniture" name="furniture">Furniture</option>
                            </select>
            <span><?php echo $save->typeError;?></span>
            <span id="sizeError" style="top:224px;"></span>
            <span id="weightError" style="top:224px;"></span>
            <span id="heightError" style="top:224px;"></span>
            <span id="widthError" style="top:262px;"></span>
            <span id="lengthError" style="top:298px;"></span>
            <br>
            <br>

            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>                
            <script>
                function reload(type){
                    if(type == "dvd"){
                        var divSize = document.createElement('div');
                        divSize.innerHTML = "Size(MB) : ";
                        divSize.id = 'divSize';
                        document.getElementById("section").appendChild(divSize);

                        var inputSize = document.createElement("input");
                        inputSize.setAttribute("type","number");
                        inputSize.setAttribute("id","size");
                        inputSize.setAttribute("name","size");                        
                        document.getElementById("section").appendChild(inputSize);
                        // inputSize.onkeyup = function(){window.val = inputSize.value; console.log(window.val);};

                        if (document.contains(document.getElementById("divWeight"))) {
                            document.getElementById("divWeight").remove();
                            document.getElementById("weight").remove();
                        }
                        if (document.contains(document.getElementById("divHeight"))) {
                            document.getElementById("divHeight").remove();
                                document.getElementById("height").remove();
                                document.getElementById("divWidth").remove();
                                document.getElementById("width").remove();
                                document.getElementById("divLength").remove();
                                document.getElementById("length").remove();
                        }
                    }
                    if(type == "book"){
                        var divWeight = document.createElement('div');
                        divWeight.innerHTML = "Weight(KG) : ";
                        divWeight.id = 'divWeight';
                        document.getElementById("section").appendChild(divWeight);

                        var inputWeight = document.createElement("input");
                        inputWeight.setAttribute("type","number");
                        inputWeight.setAttribute("id","weight");
                        inputWeight.setAttribute("name","weight");
                        document.getElementById("section").appendChild(inputWeight);
                        
                        if (document.contains(document.getElementById("divSize"))) {
                            document.getElementById("divSize").remove();
                            document.getElementById("size").remove();
                        }
                        if (document.contains(document.getElementById("divHeight"))) {
                            document.getElementById("divHeight").remove();
                                document.getElementById("height").remove();
                                document.getElementById("divWidth").remove();
                                document.getElementById("width").remove();
                                document.getElementById("divLength").remove();
                                document.getElementById("length").remove();
                        }
                    }
                    if(type == "furniture"){
                        var divHeight = document.createElement('div');
                        divHeight.innerHTML = "Height(CM) : ";
                        divHeight.id = 'divHeight';
                        document.getElementById("section").appendChild(divHeight);

                        var inputHeight = document.createElement("input");
                        inputHeight.setAttribute("type","number");
                        inputHeight.setAttribute("id","height");
                        inputHeight.setAttribute("name","height");
                        document.getElementById("section").appendChild(inputHeight);


                        var divWidth = document.createElement('div');
                        divWidth.innerHTML = "Width(CM) : ";
                        divWidth.id = 'divWidth';
                        document.getElementById("section").appendChild(divWidth);

                        var inputWidth = document.createElement("input");
                        inputWidth.setAttribute("type","number");
                        inputWidth.setAttribute("id","width");
                        inputWidth.setAttribute("name","width");
                        document.getElementById("section").appendChild(inputWidth);


                        var divLength = document.createElement('div');
                        divLength.innerHTML = "Length(CM) : ";
                        divLength.id = 'divLength';
                        document.getElementById("section").appendChild(divLength);

                        var inputLength = document.createElement("input");
                        inputLength.setAttribute("type","number");
                        inputLength.setAttribute("id","length");
                        inputLength.setAttribute("name","length");
                        document.getElementById("section").appendChild(inputLength);

                        if (document.contains(document.getElementById("divSize"))) {
                            document.getElementById("divSize").remove();
                            document.getElementById("size").remove();
                        }
                        if(document.contains(document.getElementById("divWeight"))){
                            document.getElementById("divWeight").remove();
                            document.getElementById("weight").remove(); 
                        }
                    }

                    if(document.contains(document.getElementById("dvd"))){
                        if(document.contains(document.getElementById("size"))){
                            document.getElementById("sizeError").innerHTML = "*Please, provide size for DVD.";
                        }else document.getElementById("sizeError").innerHTML = "";
                    }
                    if(document.contains(document.getElementById("book"))){
                        if(document.contains(document.getElementById("weight"))){
                            document.getElementById("weightError").innerHTML = "*Please, provide weight for book.";
                        }else document.getElementById("weightError").innerHTML = "";
                    }
                    if(document.contains(document.getElementById("furniture"))){
                        if(document.contains(document.getElementById("height"))){
                            document.getElementById("heightError").innerHTML = "*Please, provide height for furniture.";
                        }else document.getElementById("heightError").innerHTML = "";

                        if(document.contains(document.getElementById("width"))){
                            document.getElementById("widthError").innerHTML = "*Please, provide width for furniture.";
                        }else document.getElementById("widthError").innerHTML = "";

                        if(document.contains(document.getElementById("length"))){
                            document.getElementById("lengthError").innerHTML = "*Please, provide length for furniture.";
                        }else document.getElementById("lengthError").innerHTML = "";
                    }
                    // if(document.contains(inputSize)){

                    // console.log(inputSize.value);
                    // }
                }

            </script>  

        </section>

        <footer>
            <div class="line" style="top:680px"></div>
        </footer>

    </form> 
    
</body>
</html>