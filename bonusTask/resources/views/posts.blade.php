<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="{{route("edit")}}">addnew</a>
<h1> Posts</h1>
@foreach($posts as $post)
    <h2>პოსტის სათაური: {{$post->title}}</h2>
    <h2>პოსტი: {{$post->body}}</h2>
    <h2>ავტორი: {{$post->author}}</h2>
    <a href="{{route('edit', ['post'=>$post->id])}}">EDIT</a>
    <a href="{{route('delete', ['post'=>$post->id])}}">DELETE</a>

@endforeach
</body>
<style>
    body{
    background: #009FFF;  
    background: -webkit-linear-gradient(to right, #ec2F4B, #009FFF); 
    background: linear-gradient(to right, #ec2F4B, #009FFF);
    };
</style>
</html>
