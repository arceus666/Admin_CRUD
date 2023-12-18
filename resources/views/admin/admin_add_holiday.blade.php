<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">
    <title>Leave Management</title>
</head>
<body>
<div class="container">
    <h1>Holiday Management</h1>
    <form action="{{url('addHoliday')}}" method="post">
        @csrf
        <label for="holiday_name">Holiday Name</label>
        <input type="text" name="holiday_name">
        <label for="holiday_date">Holiday Date</label>
        <input type="date" name="holiday_date">
        <label for="leave_date">Holiday Description</label>
        <input type="text" name="holiday_description">
        <button type="submit">Add Holiday</button>
    </form>
</div>


</body>
</html>
