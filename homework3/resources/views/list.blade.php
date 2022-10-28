<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATa</title>
</head>
<body>
    <h1>Video Table</h1>
    <table border=9>
        <tr>
            <td>ID</td>
            <td>URL</td>
            <td>title</td>
            <td>channel</td>
            <td>description</td>
            <td>likes</td>
            <td>length</td>
        </tr>
        @foreach($videos as $video)
        <tr>
            <td>{{$video["id"]}}</td>
            <td>{{$video["url"]}}</td>
            <td>{{$video["title"]}}</td>
            <td>{{$video["channel"]}}</td>
            <td>{{$video["description"]}}</td>
            <td>{{$video["likes"]}}</td>
            <td>{{$video["length"]}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>