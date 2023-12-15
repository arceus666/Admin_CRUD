<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">

    <title>Leave Management</title>
</head>
<body>
    <div class="container">
        <h1>Leave Management</h1>
        @foreach(\App\Models\Leave::all() as $leave)
        <form action="{{url('addleave/'.$leave->leave_id)}}" method="post">
            @endforeach
            @csrf
            <label for="leave_subject">Leave Subject</label>
            <input type="text" name="leave_subject">
            <label for="leave_date">Leave Date</label>
            <input type="date" name="leave_date">
            <button type="submit">Submit</button>

        </form>
    </div>


</body>
</html>
