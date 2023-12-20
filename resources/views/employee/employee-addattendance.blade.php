<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style5.css')}}">
    <link rel="icon" href="/img/logo2.png" type="image/png">
    <title>Employee Attendance</title>
</head>
<body>
<div class="form">
    <form action="{{url('addTimein')}}" method="post">
        <h2>Attendance</h2>
        @csrf
        <div class="content">
            <div class="input-box">
                <label for="emp_full_name">Employee Name</label>
                <select name="emp_full_name">
                    @foreach(\App\Models\Employee::all()->pluck('emp_full_name')->unique() as $employee)
                        <option name="emp_full_name" value="{{ $employee }}">{{ $employee }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-box">
                <label for="attendance_time_in">Time In</label>
                <input type="datetime-local" name="attendance_time_in">
            </div>
            <div class="input-box">
                <label for="attendance_time_out">Time Out</label>
                <input type="datetime-local" name="attendance_time_out">
            </div>
            <div class="button-container">
                <button type="submit" class="btn">Add Attendance</button>
                <a href="/employee/employee-attendance" class="btn" id="cancel">Cancel</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>
