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
            <th>Customer ID</th>
            <th>Feedback</th>
            
        </tr>
        @foreach($feedback as $feed)
        <tr>
           
            <td>{{$feed->fid}}</td>
            <td>{{$feed->cid}}</td>
            <td>{{$feed->feedbacks}}</td>
            
           
        </tr>
        @endforeach
    </table>
</body>
</html>