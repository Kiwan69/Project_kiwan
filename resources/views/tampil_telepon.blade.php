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
        <th>Nomor Telepon</th>
        <th>Pengguna ID</th>
    </tr>
    @foreach ($telepons as $data)
    <tr>
        <td> {{$data->id}} </td>
        <td> {{$data->nomor_telepon}} </td>
        <td> {{$data->pengguna_id}} </td>
    </tr>
    @endforeach
    </table>
    
</body>
</html>