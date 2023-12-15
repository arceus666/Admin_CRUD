
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">

</head>
<body>
<div class="container">
    <form action="{{url('added')}}" method="post">
        @csrf
        <label for="emp_user_name">Username</label>
        <input type="text" name="emp_user_name"><br>
        <label for="emp_password">Password</label>
        <input type="password" name="emp_password"><br>
        <label for="emp_full_name">Employee Fullname</label>
        <input type="text" name="emp_full_name"><br>
        <label for="emp_dob">Date of Birth</label>
        <input type="date" name="emp_dob"><br>
        <label for="emp_contact">Contact</label>
        <input type="text" name="emp_contact"><br>
        <label for="emp_email">Email</label>
        <input type="text" name="emp_email"><br>
        <label for="dep_name">Department Name</label>
        <input type="text" name="dep_name"><br>
        <label for="emp_type_id">ID Type</label>
        <input type="text" name="emp_type_id"><br>
        <label for="location_id">Location</label>
        <input type="text" name="location_id"><br>
        <label for="location_name">Location Name</label>
        <input type="text" name="location_name"><br>
        <label for="shift_id">Shift Id</label>
        <input type="text" name="shift_id"><br>
        <label for="shift_name">Shift Name</label>
        <input type="text" name="shift_name"><br>
        <label for="shift_time_in">Shift Time In</label>
        <input type="datetime-local" name="shift_time_in"><br>
        <label for="shift_time_out">Shift Time Out</label>
        <input type="datetime-local" name="shift_time_out"><br>
        <label for="emp_address">Employee Address</label>
        <input type="text" name="emp_address"><br>
        <label for="emp_joining_data">Joining Date</label>
        <input type="date" name="emp_joining_data">
        <label for="emp_gender">Gender</label>
        <input type="text" name="emp_gender">

        <button type="submit">Add Employee</button>
    </form>
</div>
</body>
</html>
