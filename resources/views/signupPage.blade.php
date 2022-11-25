<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <h1>This is sign up page</h1>
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
        <button type="submit" class="btn btn-primary">Sign In</button>
    </form>
</body>

</html>