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
            <th>Vendor Name</th>
            <th>Service Name</th>
            <th>Service Description</th>
            <th>Service Price</th>
            
        </tr>
        @foreach($displaydata as $ser)
        <tr>
           
            <td>{{$ser->id}}</td>
            <td>{{$ser->vender->vcname}}</td>
            <td>{{$ser->sname}}</td>
            <td>{{$ser->sdescription}}</td>
            <td>{{$ser->sprice}}</td>
            <td><a href="/editservice/{{$ser->id}}">Edit</a>
                <a href='/deleteservice/{{$ser->id}}'>Delete</a></td>
            
           
        </tr>
        @endforeach
    </table>
</body>
</html>