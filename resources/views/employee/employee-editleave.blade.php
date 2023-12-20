<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">
    <link rel="icon" href="/img/logo2.png" type="image/png">
    <title>Edit Leave</title>
</head>
<body>
<div class="container">
    <h1>Edit Leave Letter</h1>
    <form action="{{url('updateLeave/'.$leave->leave_id)}}" method="post">
        {{csrf_field()}}
        @method('PUT')
        <label for="emp_full_name">Employee Name</label>
        <input type="text" readonly value="{{$employee->emp_full_name}}">
        <label for="shift_name">Leave Subject</label>
        <input type="text" name="leave_subject" value="{{$leave->leave_subject}}">
        <label for="shift_time_in">Leave Date</label>
        <input type="date" name="leave_date" value="{{$leave->leave_date}}">
        <button type="submit" class="btn btn-primary" id="submitButton">Update Leave</button>
        <button onclick="window.location.href='employee/employee-leave'">Cancel</button>
    </form>

</div>
</body>
</html>
