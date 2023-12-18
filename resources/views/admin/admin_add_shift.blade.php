<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">
    <title>Add Location</title>
</head>
<body>
<div class="container">

    <form action="{{url('addShift')}}" method="post">
        @csrf
        <label for="shift_name">Shift Name</label>
        <input type="text" name="shift_name">
        <label for="shift_time_in">Shift Time In</label>
        <input type="time" name="shift_time_in">
        <label for="shift_time_out">Shift Time Out</label>
        <input type="time" name="shift_time_out">
        <button type="submit">Add Shift</button>
    </form>
</div>

</body>
</html>
