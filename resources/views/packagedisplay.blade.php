<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border=1>

        <tr>
            <th>ID</th>
            <th>Package Name</th>
            <th>Package Price</th>
            <th>Package Description</th>
            <th>Action</th>
            {{-- <th>Feedback</th> --}}
            
        </tr>
        @foreach($pac as $pack)
        <tr>
           
            <td>{{$pack->id}}</td>
            <td>{{$pack->p_name}}</td>
            <td>{{$pack->p_price}}</td>
            <td>{{$pack->p_description}}</td>
            <td><a href='/editpackage/{{$pack->id}}'>EDIT</a>
                <a href='/deletepackage/{{$pack->id}}'>DELETE</a></td>
            {{-- <td>{{$feed->feedbacks}}</td> --}}
            
           
        </tr>
        @endforeach
    </table>
</body>
</html>