<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">

    <title>Admin Department Management</title>
</head>
<body>
<div class="container">
    <h3><center>Add Department</center></h3>
    <form action="{{url('add')}}" method="post">
        <label for="emp_full_name">Employee Fullname</label>
        @csrf
        <select name="emp_full_name">
            @foreach(\App\Models\Employee::pluck('emp_full_name') as $employee)
                <option value="{{$employee}}">{{$employee}}</option>
            @endforeach
        </select>
        <label for="emp_type_id">Employee Type ID</label>
        <select name="emp_type_id">
            @foreach(\App\Models\EmployeeType::pluck('emp_type_id') as $emp_type)
            <option value="{{$emp_type}}">{{$emp_type}}</option>
            @endforeach
        </select>
        <label for="emp_type_id">Department Name</label>
        <select name="dep_name">
            @foreach(\App\Models\Department::pluck('dep_name') as $department)
            <option value="{{$department}}">{{$department}}</option>
            @endforeach
        </select>
        <button type="submit">Add Employee Department</button>
    </form>
</div>





</body>
</html>
