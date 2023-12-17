
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
        <select name="dep_name">
            @foreach(\App\Models\Department::pluck('dep_name') as $department)
            <option value="{{$department}}">{{$department}}</option>
            @endforeach
        </select>
        <label for="emp_type_id">Employee Type</label>
        <select name="emp_type_id">
            @foreach(\App\Models\EmployeeType::pluck('emp_type_id') as $emptype)
            <option value="{{$emptype}}">{{$emptype}}</option>
            @endforeach
        </select>
        <label for="location_name">Location Name</label>
        <select name="location_name">
            @foreach(\App\Models\Location::pluck('location_name') as $location)
            <option value="{{$location}}">{{$location}}</option>
            @endforeach
        </select>
            <label for="shift_name">Shift Name</label>
        <select name="shift_name">
            @foreach(\App\Models\Shift::pluck('shift_name') as $shift)
            <option value="{{$shift}}">{{$shift}}</option>
            @endforeach
        </select>
        <label for="shift_time_in">Shift Time in</label>
        <select name="shift_time_in">
            @foreach(\App\Models\Shift::pluck('shift_time_in') as $shift)
            <option value="{{$shift}}">{{$shift}}AM</option>
            @endforeach
        </select>
        <label for="shift_time_out">Shift Time Out</label>
        <select name="shift_time_out">
            @foreach(\App\Models\Shift::pluck('shift_time_out') as $shift)
            <option value="{{$shift}}">{{$shift}}PM</option>
            @endforeach
        </select>

        <label for="emp_address">Employee Address</label>
        <input type="text" name="emp_address"><br>
        <label for="emp_joining_data">Joining Date</label>
        <input type="date" name="emp_joining_data">
        <label for="emp_gender">Gender</label>
        <select name="emp_gender">
            @foreach(\App\Models\Gender::pluck('emp_gender') as $gender)
            <option value="{{$gender}}">{{$gender}}</option>
            @endforeach
        </select>
        <button type="submit">Add Employee</button>
    </form>
</div>
</body>
</html>
