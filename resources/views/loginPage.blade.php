<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .mainBox {
            display: grid;
            grid-template-columns: 1fr 1fr;
            width: 50%;
            margin: 0 auto;
            min-height: 400px;
            /* border: 1px solid black; */
            margin-top: 150px;
            border-radius: 10px;
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        }

        .imgBox img {
            width: 110%;
            height: 350px;
            margin: 60px 0 0 1px;
        }
    </style>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="mainBox">
        <div class="imgBox">
            <img src="img/img3.png" alt="">
        </div>
        <div class="p-5">

            @if(Session::has('fail'))
            <div class="alert text-center alert-danger" role="alert">
                {{Session::get('fail')}}
            </div>
            @endif
            <h1 class="mb-4">Login</h1>
            <form action="{{route('loginAdmin')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Admin Id</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Admin Id" name="adminId">
                    <span style="color: red;"> @error('adminId'){{$message}}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter password" name="password">
                    <span style="color: red;"> @error('password'){{$message}}@enderror</span>
                </div>
                <button type="submit" class="btn btn-success">Log In</button>
            </form>
            <p class="mt-3">No account! <a href="{{url('/signup')}}">Create one</a></p>

        </div>

    </div>
</body>

</html>