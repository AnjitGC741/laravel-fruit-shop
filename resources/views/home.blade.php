<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .mainBox {
            width: 40%;
            margin: 0 auto;
            margin-top: 100px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;

        }

        .searchBox {
            width: 100%;
            margin-bottom: 20px;
            text-align: right;
            padding: 10px;
            display: flex;

        }

        .tableBox {
            padding: 10px;
        }
        .forImg{
            
            position: relative;
            height: 100px;
        }
        .forImg img{
            position: absolute;
            top: -20px;
            height: 200px;
            width: 110%;
        }
    </style>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="mainBox">
        <div class="w-100 bg-success pt-2" style="height: 60px;text-align: center;">
            <h1 class="text-white">Fruit List</h1>
        </div>
        <div class="searchBox">
        <button class="btn btn-primary" style="display: inline-block;"><a href="{{url('/login')}}" style="color: white;text-decoration:none">Log in</a></button>
            <form action="{{route('searchFruit')}}" method="post">
                @csrf
                <input type="text" class="form-control" name="searchFruitName" placeholder="Search for fruits" style="width: 50%; display:inline-block;">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
          
        </div>
        <div class="tableBox">
            @if($list -> isNotEmpty())
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
            @else
            <div style="text-align: center;">
                <h1>No Fruit Available</h1>
            </div>
            @endif
        </div>
        <div class="forImg">
            <img src="img/img2.png" alt="">
        </div>
    </div>


</body>

</html>