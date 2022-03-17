@extends('layout')
@section('content')
<head>
    {{-- <link rel="stylesheet" type="text/css" href="{{'css/main.css'}}"> --}}
    <style>
        body{
            padding: 50px;
        }
        a{
            text-decoration: none;
            color: rgb(12, 12, 221);
        }
        .container{
            width: 950px;
            padding: 26px 30px;
            border: solid 0.5px transparent;
            background: rgba(180, 198, 255, 0.404);
            border-radius: 8px;
        }
        .add{
            color:black; 
            border:solid 1px white;
            height:20px;
            width:80px;
            padding: 5px;
            background-color: rgba(142, 168, 255, 0.404);
        }
        .add:hover{
            background-color: rgba(175, 193, 253, 0.404);
        }
    </style>
</head>
<body>
    <center>
        <div class="container">

            <form form method="POST" action="{{ url('/posts')}}" accept-charset="UTF-8">
                <input type="text" name="search">
                <button type="submit">Search</button>
            </form>

        </div>
        
    </center>
</body>
</html>