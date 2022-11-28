<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
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
            min-height: 500px;
            /* border: 1px solid black; */
            margin-top: 100px;
            border-radius: 10px;
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        }

        .imgBox img {
            width: 100%;
            height: 500px;
            transform: scaleX(-1);
        }
        button{
            background-color: #ff4681;
            border-style:none ;
            color: #fff;
            height: 40px;
            width: 30%;
            border-radius:10px!important;
        }
    </style>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="mainBox">
        <div class="imgBox">
            <img src="img/img1.png" alt="">
        </div>
        <div class="p-5">
            <h1 class="mb-2">Create Account</h1>
            <p>Its easy and fast</p>
            <form action="{{route('saveData')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Admin Id</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Admin Id" name="adminId1">
                    <span style="color: red;"> @error('adminId1'){{$message}}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter password" name="password">
                    <span style="color: red;"> @error('password'){{$message}}@enderror</span>
                </div>
                <button type="submit">Sign In</button>
            </form>
            <p class="mt-3">Already have account?<a href="{{url('/login')}}" class="ml-2">Log in</a></p>

        </div>

    </div>
</body>

</html>