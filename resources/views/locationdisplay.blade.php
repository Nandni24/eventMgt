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
            <th>Location Name</th>
            {{-- <th>Feedback</th> --}}
            
        </tr>
        @foreach($loc as $loca)
        <tr>
           
            <td>{{$loca->lid}}</td>
            <td>{{$loca->lname}}</td>
            {{-- <td>{{$feed->feedbacks}}</td> --}}
            
           
        </tr>
        @endforeach
    </table>
</body>
</html>