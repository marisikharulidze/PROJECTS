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
        .del{
            background-color: red;
        }
        .del:hover{
            background-color: rgb(253, 101, 101);
        }
        input{
            margin:10px auto;
        }
    </style>
</head>
<body>
    
    <center>  
            
            <form method="POST" action="{{ url('/posts' . '/' . $post->id) }}" accept-charset="UTF-8" >
                @method('DELETE')
                @csrf

                mdebareoba : <input type="text" id="name" name="mdebareoba" value="{{$post->mdebareoba}}" >
                <br>
                <br>
                otaxis raodenoba : <input type="text" id="lname" name="otaxis_raodenoba"value="{{$post->otaxis_raodenoba}}">
                <br>
                <br>
                tarigi : <input type="date" id="name" name="tarigi" value="{{$post->tarigi}}">
                <br>
                <br>
                fartobi : <input type="text" id="lname" name="fartobi"value="{{$post->fartobi}}">
                <br>
                <br>
                fasi : <input type="text" id="name" name="fasi" value="{{$post->fasi}}">
                <br>
                <br>
                <button class="del">Delete</button>
            </form>
        </div>

    </center>
   
</body>
</html>