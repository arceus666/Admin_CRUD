<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">

    <title>Update Employee Profile</title>
</head>
<body>
<div class="container">
<h1>Update Employee Information</h1>
<form action="{{url('update-data/'.$employee->employee_id)}}" method="post">
    {{csrf_field()}}
    @method('PUT')
    <label for="emp_use_name">Username</label>
    <input type="text" name="emp_user_name" value="{{$employee->emp_user_name}}">
    <label for="emp_password">Password</label>
    <input type="text" name="emp_password" value="{{$employee->emp_password}}">
    <label for="dep_name">Department Name</label>
    <input type="text" name="dep_name" value="{{$employee->dep_name}}">
    <label for="emp_type_id">Employee ID Type</label>
    <input type="text" name="emp_type_id" value="{{$employee->emp_type_id}}">
    <label for="location_id">Location ID</label>
    <input type="text" name="location_id" value="{{$employee->location_id}}">
    <label for="location_name">Location Name</label>
    <input type="text" name="location_name" value="{{$employee->location_name}}">
    <label for="shift_id">Shift ID</label>
    <input type="text" name="shift_id" value="{{$employee->shift_id}}">
    <label for="shift_name">Shift Name</label>
    <input type="text" name="shift_name" value="{{$employee->shift_name}}">
    <label for="shift_time_in">Shift Time In</label>
    <input type="datetime-local" name="shift_time_in" value="{{$employee->shift_time_in}}">
    <label for="shift_time_out">Shift Time Out</label>
    <input type="datetime-local" name="shift_time_out" value="{{$employee->shift_time_out}}">
    <label for="emp_full_name">Employee Name</label>
    <input type="text" name="emp_full_name" value="{{$employee->emp_full_name}}">
    <label for="emp_gender">Gender</label>
    <input type="text" name="emp_gender" value="{{$employee->emp_gender}}">
    <label for="emp_dob">Date of Birth</label>
    <input type="text" name="emp_dob" value="{{$employee->emp_dob}}">
    <label for="emp_contact">Employee Contact</label>
    <input type="text" name="emp_contact" value="{{$employee->emp_contact}}">
    <label for="emp_email">Employee Email</label>
    <input type="text" name="emp_email" value="{{$employee->emp_email}}">
    <label for="emp_joining_data">Employee Joining Date</label>
    <input type="date" name="emp_joining_data" value="{{$employee->emp_joining_data}}">
    <button type="submit" class="btn btn-primary">Update</button>
    <button type="button" class="btn btn-secondary" onclick="cancelUpdate()">Cancel</button>
</form>
    <script>
        function cancelUpdate() {
            window.location.href = "{{url('/admin/admin-viewemployee')}}";
        }
    </script>

</div>
</body>
</html>
