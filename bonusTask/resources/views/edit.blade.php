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
<form action="">

    <label for="name">title</label>
    <input type="text" value="{{$post->title ?? ''}}" name="title" id="name">

    <label for="price">body</label>

    <label for="exampleFormControlTextarea1"></label>
    <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3">
                {{ $post->body ?? '' }}
            </textarea>
    <label for="group">author</label>
    <input type="text" value="{{$post->author ?? ''}}" name="author" id="group">





    <button type="submit">SUBMIT</button>
</form>

</body>
<style>
    body{
    background: #C6FFDD;  
    background: -webkit-linear-gradient(to right, #f7797d, #FBD786, #C6FFDD); 
    background: linear-gradient(to right, #f7797d, #FBD786, #C6FFDD); 
    };
</style>
</html>
