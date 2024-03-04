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
        @foreach($ser as $seri)
        <tr>
           
            <td>{{$seri->id}}</td>
            <td>{{$seri->vender->vcname}}</td>
            <td>{{$seri->sname}}</td>
            <td>{{$seri->sdescription}}</td>
            <td>{{$seri->sprice}}</td>
            <td><a href="/editservice/{{$seri->id}}">Edit</a>
                <a href='/deleteservice/{{$seri->id}}'>Delete</a></td>
            
           
        </tr>
        @endforeach
    </table>
</body>
</html>