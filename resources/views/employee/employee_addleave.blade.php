<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style5.css')}}">
    <title>Leave Management</title>
</head>
<body>
<div class="container">
    <form action="{{url('addLeave')}}" method="post">
        @csrf
        <label for="emp_full_name">Employee Name</label>
        <select name="emp_full_name">
            @foreach(\App\Models\Employee::all()->pluck('emp_full_name')->unique() as $employee)
                <option name="emp_full_name" value="{{ $employee }}">{{ $employee }}</option>
            @endforeach
        </select>
        <label for="leave_subject">Leave Subject</label>
        <input type="text" name="leave_subject">
        <label for="leave_date">Leave Date</label>
        <input type="date" name="leave_date">
        <a href="/employee/employee-dashboard" class="btn" id="submit">Submit Attendance</a>
        <a href="/employee/employee-leave" class="btn" id="cancel">Cancel</a>
    </form>
</div>
</body>
</html>
