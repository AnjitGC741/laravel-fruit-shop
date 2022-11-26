<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Fruits</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <h1>Edit Fruit Data</h1>
    <form action="{{route('editFruit')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$value->id}}">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Fruit Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter fruit name" name="fruitName" value="{{$value->fruitName}}">
            <span style="color: red;"> @error('fruitName'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Price</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter price" name="price" value="{{$value->price}}">
            <span style="color: red;"> @error('price'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Date of Import</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter date of import" name="dateOfImport" value="{{$value->dateOfImport}}">
            <span style="color: red;"> @error('dateOfImport'){{$message}}@enderror</span>
        </div>
        <button type="submit" class="btn btn-warning">Change</button>
    </form>
  
    
</body>
</html>