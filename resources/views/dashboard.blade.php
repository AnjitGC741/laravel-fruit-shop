<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 785px;
            background-color: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(3px);
            z-index: 0;
        }
        .hidden{
            display: none;
        }

        .formAddBox {
            display: none;
            width: 30%;
            border: 1px solid black;
            padding: 10px 20px;
            position: fixed;
            background-color: white;
            margin: 5% 30%;
            z-index: 1;
        }
        .formEditBox{
            display: none;
            width: 30%;
            border: 1px solid black;
            padding: 10px 20px;
            position: fixed;
            background-color: white;
            margin: 5% 30%;
            z-index: 1;
        }

        .formEditBox {
            display: none;
        }

        .closeBtn {
            border-style: none;
            background: none;
        }
    </style>
    @vite(['resources/js/app.js'])
</head>

<body>
    <span style="color: red;"> @error('searchFruitName'){{$message}}@enderror</span>

    <h1>This is dashboard</h1>
    <div class="formAddBox" id="formAddBox">
        <div style="text-align: right;">
            <button id="closeBtn" class="closeBtn" onclick="closeAddBox();"><i class="fa fa-close" style="font-size:24px"></i></button>
        </div>
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
            <button type="submit" class="btn btn-success mb-4" style="width: 100%;">Add</button>
        </form>
    </div>
    @foreach($list as $value)
    <div class="formEditBox" id="formEditBox_{{$value->id}}">
        <div style="text-align: right;">
            <button id="formEditBox_{{$value->id}}" class="closeBtn" onclick="hideEditBox(this.id)"><i class="fa fa-close" style="font-size:24px"></i></button>
        </div>
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
            <button type="submit" class="btn btn-warning mb-4" style="width: 100%;">Add</button>
        </form>

    </div>
    @endforeach
        
    <button class="btn btn-primary" style=""><a href="{{url('/')}}" style="color: white;text-decoration:none">Log out</a></button>

    <h1>Total iteam is {{count($list)}}</h1>
    <div class="tableBox">
        @if($list -> isNotEmpty())
        <table class="table">
            <tr>
                <th>SN</th>
                <th>Fruit Name</th>
                <th>Price</th>
                <th>Date of Import</th>
                <th colspan="2">Action</th>
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
            @else
            <div style="text-align: center;">
                <h1>No Fruit Available</h1>
            </div>
            @endif
    <button class="btn btn-success" onclick="openAddBox();">Add Fruit</button>
    <div class="overlay hidden"></div>
    <script src="js/script.js"></script>
</body>

</html>