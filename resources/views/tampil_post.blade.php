<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="4">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
    </tr>
    @foreach ($posts as $data)
    <tr>
        <td> {{$data->id}} </td>
        <td> {{$data->title}} </td>
        <td> {{$data->content}} </td>
    </tr>
    @endforeach
    </table>
    
</body>
</html>