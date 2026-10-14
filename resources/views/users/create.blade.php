<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    users page link : <a href="{{ route('users.index') }}">click here</a>
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        Name : <input type="text" name="name"><br>
        Email : <input type="email" name="email"><br>
        Age : <input type="number" name="age"><br>
        <button type="submit">create</button>
    </form>
</body>

</html>
