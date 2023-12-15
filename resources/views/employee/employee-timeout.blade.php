<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">

    <title>Employee Attendance Time Out</title>

</head>
<body>
    <div class="container">
        <h1>Attendance Time Out</h1>
        <form action="{{url('update-out/'.$attendance->attendance_id)}}" method="post">
            @foreach(\App\Models\Employee::all() as $employee)
            @foreach(\App\Models\Attendance::all() as $attendance)
                    {{csrf_field()}}
                    @method('PUT')
                    <label for="employee_full_name">Employee Name</label>
                    <input type="text" name="employee_full_name" readonly value="{{$employee->emp_full_name}}"><br>
            <label for="attendance_time_in">Time in</label>
            <input type="datetime-local" name="attendance_time_in" readonly value="{{$attendance->attendance_time_in}}">
                    <br>
                    <label for="attendance_time_out">Time Out</label>
                    <input type="datetime-local" name="attendance_time_out">
                    <button type="submit">Time Out</button>
            @endforeach
                @endforeach
        </form>
    </div>
</body>
</html>
