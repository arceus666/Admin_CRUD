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
    <form action="{{url('addTimein')}}" method="post">
        @csrf
        <label for="emp_full_name">Employee Name</label>
        <select name="emp_full_name">
            @foreach(\App\Models\Employee::all()->pluck('emp_full_name')->unique() as $employee)
                <option name="emp_full_name" value="{{ $employee }}">{{ $employee }}</option>
            @endforeach
        </select>
        <label for="attendance_time_in">Time In</label>
        <input type="datetime-local" name="attendance_time_in">
        <label for="attendance_time_out">Time Out</label>
        <input type="datetime-local" name="attendance_time_out">
        <button type="submit">Submit Attendance</button>
    </form>
</div>


</body>
</html>
