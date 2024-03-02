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
            <th>Location ID</th>
            <th>Package ID</th>
            <th>Event name</th>
            <th>Event date</th>
            <th>Event time</th>
            <th>People count</th>
            <th>Status</th>
            <th>Action</th>
            
            
        </tr>
        @foreach($booking as $book)
        <tr>
           
            <td>{{$book->bid}}</td>
            <td>{{$book->cid}}</td>
            <td>{{$book->lid}}</td>
            <td>{{$book->pid}}</td>
            <td>{{$book->event_name}}</td>
            <td>{{$book->event_date}}</td>
            <td>{{$book->event_time}}</td>
            <td>{{$book->people_count}}</td>
            {{-- <td><a href="{{url('acceted',$book->bid)}}">Accept</a> --}}
            <td><a href="/acceptedevent/{{$book->bid}}">Accept</a>
            <a href='/rejectdevent/{{$book->bid}}'>Reject</a></td>
            <td>{{$book->status}}</td>

            
           
        </tr>
        @endforeach
    </table>
</body>
</html>