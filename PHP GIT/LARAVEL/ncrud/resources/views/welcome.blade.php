<!DOCTYPE html>
<html lang="en">
<head>
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
        a{
            color:black; 
            border:solid 1px white;
            height:20px;
            width:80px;
            padding: 5px;
            background-color: rgba(142, 168, 255, 0.404);
            margin-left:50px;
        }
        a:hover{
            background-color: rgba(175, 193, 253, 0.404);
        }
    </style>
</head>
<body>
    <center>
        <a href="{{url('/index')}}">Display</a>
        <a href="{{url('/posts/create')}}">Insert</a>
        <a href="{{url('/editt')}}">Edit</a>
        <a href="{{url('/delette')}}">Delete</a>
        <a href="{{url('/search')}}">Search</a>
    </center>
   
</body>
</html>