<head>
    {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
    <style>
        body{
            padding: 50px;
        }
        a{
            text-decoration: none;
            color: rgb(12, 12, 221);
        }
        .container{
            width: 400px;
            padding: 26px 30px;
            border: solid 0.5px transparent;
            background: rgba(180, 198, 255, 0.404);
            border-radius: 8px;
        }
        button{
            color:black; 
            border:solid 1px white;
            height:30px;
            width:70px;
            padding: 5px;
            background-color: rgba(142, 168, 255, 0.404);
            cursor: pointer;
        }
        button:hover {
            background: rgba(96, 160, 255, 0.212);
        }
        /* .formm{
            margin: 10px auto;
            padding: 20px;
            width: 420px;
            background-color:whitesmoke;
        }
        p{
            color:red;
            margin:10px auto;
        }
        span{
            color:green;
            margin:6px auto;
        }
        img{
            width:220px;
            height:200px;
            margin:10px;
        } */
        input{
            margin:10px auto;
        }
    </style>
</head>
<body>
    <?php
        // if(!is_dir("files")){
        //     mkdir("files");
        // }
        // if(isset($_POST['upload'])){
        //     @$file = $_FILES['file'];

        //     $sizeError = "";
        //     $error = "";
        //     if($file['size'] > 50*1024*1024){
        //         $sizeError = " *Chosen file is too big ";
        //     }
        //     if($file['error'] == 4){
        //         $error = " *You have not chosen a file you want to upload";
        //     }
        //     if(empty($sizeError) && empty($error)){
        //         move_uploaded_file($file['tmp_name'], "files/".$file['name']);
        //         $correct = "File uploaded succesfully";
        //     }
        // }

    ?>

    <center>  

        <div class="container">

            <form method="POST" enctype="multipart/form-data" action="{{ url('/posts') }}">
                @csrf
                
                mdebareoba : <input type="text" id="name" name="mdebareoba" >
                <br>
                <br>
                otaxis raodenoba : <input type="text" id="lname" name="otaxis_raodenoba">
                <br>
                <br>
                tarigi : <input type="date" id="name" name="tarigi" >
                <br>
                <br>
                fartobi : <input type="text" id="lname" name="fartobi">
                <br>
                <br>
                fasi : <input type="text" id="name" name="fasi" >
                <br>
                <br>
                <button>Insert</button>
            </form>

        </div>


        {{-- <form method="POST" class="formm" action="{{ url('/posts') }}">
            @csrf
            <input type="file" name="file"><br><br>
            <button name="upload">upload</button>
            <p><?=@$sizeError?></p>
            <p><?=@$error?></p>
            <span><?=@$correct?></span>
        </form>
    
        <div>
            <ol>
                <?php
                    // $folder = scandir("files");
                    // for($i=2; $i<count($folder); $i++){
                    //     echo "<li>
                    //             <img src='files/".$folder[$i]."'>click name to download : <a href='folder/".$folder[$i]."'download> ".$folder[$i]."</a>
                    //          </li>";
                    // }
                ?>
            </ol>
        </div> --}}

    </center>

   
</body>
</html>