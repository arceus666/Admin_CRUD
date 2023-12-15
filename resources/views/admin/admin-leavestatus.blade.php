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

    <h1>Update Leave Information</h1>
    <form action="{{url('update-status/'.$leave->leave_id)}}" method="post">
    @foreach(\App\Models\Employee::all() as $employee)
            {{csrf_field()}}
            @method('PUT')
    <label for="emp_full_name">Employee Name</label>
    <input type="text" name="emp_full_name" value="{{$employee->emp_full_name}}">
    <label for="leave_subject">Leave Subject</label>
    <input type="text" name="leave_subject" value="{{$leave->leave_subject}}">
        <label for="leave_date">Leave Date</label>
        <input type="date" name="leave_date" value="{{$leave->leave_date}}">
        <label for="leave_status">Leave Status</label>
        <input type="text" name="leave_status" value="{{$leave->leave_status}}">
        <button type="submit" class="btn btn-primary">Update</button>
    @endforeach
    </form>
</div>
</body>
</html>
