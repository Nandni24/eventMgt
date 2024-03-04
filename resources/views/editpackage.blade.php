<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('updatepackage',$pac->id)}}">
       
        @csrf
        
        <input type="text" name="p_name"  placeholder="package name" value="{{$pac->p_name}}"><br>

        <input type="number" name="p_price"  placeholder="package price" value="{{$pac->p_price}}"><br>

        <input type="textarea" name="p_description"  placeholder="package description" value="{{$pac->p_description}}"><br>

        <button type="submit">Submit</button>    
    </form>
</body>
</html>