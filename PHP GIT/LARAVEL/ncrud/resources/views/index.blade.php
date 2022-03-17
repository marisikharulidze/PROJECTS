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
            
            <br>
            <div class="add">
                <a href="{{url('/posts/create')}}" >Add House</a>
            </div>
            <br>
            <br>
            <br>
            <label>ბინის მდებარეობა|</label>
            <label>ოთახების რაოდენობა|</label>
            <label>განცხადების დამატების თარიღი|</label>
            <label>ბინის ფართობი|</label>
            <label>ფასი</label>
            <br>
            <br>
            <hr>
            @foreach ($posts as $post)
                <a href="{{ url('/posts' . '/' . $post->id) . '/' . 'edit'}}" >{{$post->mdebareoba}}</a>
                <label> | </label>

                <a href="{{ url('/posts' . '/' . $post->id) . '/' . 'edit'}}" >{{$post->otaxis_raodenoba}}</a>
                <label> | </label>

                <a href="{{ url('/posts' . '/' . $post->id) . '/' . 'edit'}}" >{{$post->tarigi}}</a>
                <label> | </label>

                <a href="{{ url('/posts' . '/' . $post->id) . '/' . 'edit'}}" >{{$post->fartobi}}</a>
                <label> | </label>
                
                <a href="{{ url('/posts' . '/' . $post->id) . '/' . 'edit'}}" >{{$post->fasi}}</a>

                <a href="{{ url('upload-image')}}" class="add"style="height: 30px" >Add image</a>


                <hr>
            @endforeach

        </div>
        
    </center>
</body>
</html>