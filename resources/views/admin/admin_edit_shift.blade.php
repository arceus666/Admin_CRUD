<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">

    <title>Leave Status</title>
</head>
<body>

<div class="container">

    <h1>Update Shift Information</h1>
    <form action="{{url('updateShift/'.$shift->shift_id)}}" method="post">
        {{csrf_field()}}
        @method('PUT')
        <label for="shift_name">Shift Name</label>
        <input type="text" name="shift_name" value="{{$shift->shift_name}}">
        <label for="shift_time_in">Shift Time In</label>
        <input type="time" name="shift_time_in" value="{{$shift->shift_time_in}}">
        <label for="shift_time_out">Shift Time Out</label>
        <input type="time" name="shift_time_out" value="{{$shift->shift_time_out}}">
        <button type="submit" class="btn btn-primary">Update Location</button>
    </form>
</div>
</body>
</html>
