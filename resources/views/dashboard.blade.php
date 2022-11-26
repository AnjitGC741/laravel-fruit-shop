<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .formAddBox{
            display: none;
        }
        .formEditBox{
            display: none;
        }
       
    </style>
    @vite(['resources/js/app.js'])
</head>
<body>
   
    <h1>This is dashboard</h1>
   <div class="formAddBox" id="formAddBox">
    <button id="closeBtn" class="btn btn-danger" onclick="closeAddBox();">Close</button>
   <form action="{{route('saveFruit1')}}" method="post">
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
        <button type="submit" class="btn btn-success">Add</button>
    </form>
   </div>
   @foreach($list as $value)
   <div class="formEditBox" id="formEditBox_{{$value->id}}">
   <button id="formEditBox_{{$value->id}}" class="btn btn-danger" onclick="hideEditBox(this.id)">Close</button>
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

   </div>
   @endforeach


    <h1>Total iteam is {{count($list)}}</h1>
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
            <td><a href="{{url('delete/'.$value->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            
            <td><button id="{{$value->id}}" onclick="openEditBox(this.id)" class="btn btn-warning">update</button></td>

        </tr>
        @endforeach

    </table>
    <button class="btn btn-success" onclick="openAddBox();">Add Fruit</button>
    <script src="js/script.js"></script>
</body>
</html>