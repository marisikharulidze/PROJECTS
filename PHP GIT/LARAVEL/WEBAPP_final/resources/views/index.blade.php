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
            width: 450px;
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
                <a href="{{url('/posts/create')}}" >Add Post</a>
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
{{-- 
                @if ($message = Session::get('success'))
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                <img src="images/{{ Session::get('image') }}">
                @endif
            
                @if (count($errors) > 0)
                        <strong>Whoops!</strong> There were some problems with your input.
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                @endif --}}
            
                <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <input type="file" name="image" class="form-control"> --}}
                    <button class="add" style="height: 30px">Add image</button>
                </form>

                <hr>
            @endforeach

        </div>
        
    </center>
</body>
</html>