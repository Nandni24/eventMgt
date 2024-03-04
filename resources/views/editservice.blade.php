<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('updateservice',$ser->id)}}">
        @csrf
        
        {{-- <select name="vid" id="vid">
            @foreach($ven as $vend)
            
                <option value="{{ $vend->vid }}"> {{ $vend->vcname }}</option>
            @endforeach
        </select> --}}
        
        <input type="text" name="sname"  placeholder="service name" value="{{$ser->sname}}"><br>

        <input type="text" name="sdescription"  placeholder="service description" value="{{$ser->sdescription}}"><br>

        <input type="text" name="sprice"  placeholder="service price" value="{{$ser->sprice}}"><br>

        <button type="submit">Submit</button>    
    </form>
</body>
</html>