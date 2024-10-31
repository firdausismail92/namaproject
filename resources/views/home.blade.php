<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>

<div class="container mt-5">
<form action="{{route('user.register')}}" method="post" class="d-flex flex-column gap-2 card p-4">
    @csrf
    <label>Create User</label>
    <input type="text" class="form-control" name="user_name">
    
    @error('user_name')
        <span class="text-danger">{{$message}}</span>
    @enderror
    
    <input type="email" class="form-control" name="user_email">
    
    @error('user_email')
        <span class="text-danger">{{$message}}</span>
    @enderror
    
    <input type="password" name="user_password" class="form-control">
    
    @error('password')
        <span class="text-danger">{{$message}}</span>
    @enderror
    
    <button class="btn btn-primary">Submit</button>
</form>


<div>

    @if($users->count() > 0)
        
    @foreach($users as $user)
        <div>Name: {{$user->name}}</div>
        <div>Email: {{$user->email}}</div>
    @endforeach
    @endif

</div>

</body>
</html>