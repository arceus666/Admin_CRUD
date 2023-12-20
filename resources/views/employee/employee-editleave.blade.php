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
    @foreach(\App\Models\Leave::all() as $leave)
        @foreach(\App\Models\Employee::all() as $employee)
    <form action="{{url('editLeaveLetter/'.$leave->leave_id)}}" method="post">
                {{csrf_field()}}
                @method('PUT')
                <label for="emp_full_name">Employee Name</label>
                <input type="text" name="emp_full_name" value="{{$employee->emp_full_name}}">
                <label for="leave_subject">Leave Subject</label>
                <input type="text" name="leave_subject" value="{{$leave->leave_subject}}">
                <label for="leave_date">Leave Date</label>
                <input type="date" name="leave_date" value="{{$leave->leave_date}}">
                <button type="submit">Submit</button>
                <button onclick="window.location.href='employee/employee-leave'">Cancel</button>

    </form>
        @endforeach
    @endforeach
</div>


</body>
</html>
