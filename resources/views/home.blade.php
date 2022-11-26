<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<table class="table">
        <tr>
            <th>SN</th>
            <th>Fruit Name</th>
            <th>Price</th>
            <th>Date of Import</th>
        </tr>
        @foreach($list as $value)
        <tr>
            <td>{{$SN++}}</td>
            <td>{{$value->fruitName}}</td>
            <td>{{$value -> price}}</td>
            <td>{{$value -> dateOfImport}}</td>
         

        </tr>
        @endforeach

    </table>
</body>
</html>