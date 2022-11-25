<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <h1>This is login Page</h1>
    @if(Session::has('fail'))
            <div class="alert text-center alert-danger" role="alert">
            {{Session::get('fail')}}
            </div>
            @endif
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
</body>

</html>