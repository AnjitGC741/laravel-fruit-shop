<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <h1>This is dashboard</h1>
    <form action="{{route('saveFruit')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Fruit Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter fruit name" name="fruitName">
            <span style="color: red;"> @error('fruitName'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Price</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter price" name="price">
            <span style="color: red;"> @error('price'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Date of Import</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter date of import" name="dateOfImport">
            <span style="color: red;"> @error('dateOfImport'){{$message}}@enderror</span>
        </div>
        <button type="submit" class="btn btn-success">Log In</button>
    </form>
    <table class="table">
        <tr>
            <th>SN</th>
            <th>Fruit Name</th>
            <th>Price</th>
            <th>Date of Import</th>
        </tr>
        {{$SN=1}}
        @foreach($list as $value)
        <tr>
            <td>{{$SN++}}</td>
            <td>{{$value->fruitName}}</td>
            <td>{{$value -> price}}</td>
            <td>{{$value -> dateOfImport}}</td>
            <td><a href="{{url('delete/'.$value->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            <td><a href="#"> <button class="btn btn-warning">update</button></a></td>

        </tr>
        @endforeach

    </table>
</body>
</html>