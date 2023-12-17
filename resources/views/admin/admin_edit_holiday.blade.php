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

    <h1>Update Department Information</h1>
    <form action="{{url('updateHoliday/'.$holiday->holiday_id)}}" method="post">
        {{csrf_field()}}
        @method('PUT')
        <label for="holiday_name">Holiday Name</label>
        <input type="text" name="holiday_name" value="{{$holiday->holiday_name}}">
        <label for="holiday_date">Holiday Date</label>
        <input type="date" name="holiday_date" value="{{$holiday->holiday_date}}">
        <label for="holiday_description">Holiday Description</label>
        <input type="text" name="holiday_description" value="{{$holiday->holiday_description}}">
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
