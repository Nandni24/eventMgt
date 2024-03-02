<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('storecustomer')}}">
        @csrf
        
        <input type="text" name="cname"  placeholder="name"><br>

        <input type="text" name="cpass"  placeholder="password"><br>

        <input type="text" name="cemail"  placeholder="email"><br>

        <button type="submit">Submit</button>    
    </form>
</body>
</html>