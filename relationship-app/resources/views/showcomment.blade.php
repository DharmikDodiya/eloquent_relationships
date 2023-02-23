<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="3">
        <tr>
            <td>Comment id</td>
            <td>comment</td>
            <td>post_id</td>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->comment}}</td>
            <td>{{$item->post_id}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>