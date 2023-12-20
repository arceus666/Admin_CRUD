<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style5.css')}}">
    <link rel="icon" href="/img/logo2.png" type="image/png">
    <title>Employee Leave</title>
</head>
<body>
<div class="form">
    <form action="{{url('addLeave')}}" method="post">
        <h2>Add Leave</h2>
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
                <label for="leave_subject">Leave Subject</label>
                <input type="text" name="leave_subject">
            </div>
            <div class="input-box">
                <label for="leave_date">Leave Date</label>
                <input type="date" name="leave_date">
            </div>
            <div class="button-container">
                <button type="submit" class="btn" id="submit">Add Leave</button>
                <a href="/employee/employee-leave" class="btn" id="cancel">Cancel</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>
