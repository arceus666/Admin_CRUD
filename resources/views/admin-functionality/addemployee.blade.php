
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/employee.css')}}">
    <link rel="icon" href="/img/logo2.png" type="image/png">
</head>
<body>
<div class="container">
    <h3><center>Add Employee</center></h3>
    <form action="{{url('added')}}" method="post">
        @csrf
        <label for="emp_user_name">Username</label>
        <input type="text" name="emp_user_name" required>
        <label for="emp_password">Password</label>
        <input type="password" name="emp_password" required>
        <label for="emp_full_name">Employee Fullname</label>
        <input type="text" name="emp_full_name" required>
        <label for="emp_dob">Date of Birth</label>
        <input type="date" name="emp_dob" required>
        <label for="emp_contact">Contact</label>
        <input type="text" name="emp_contact" required>
        <label for="emp_email">Email</label>
        <input type="text" name="emp_email" required>
        <div class="dropdowns">
            <div class="form-group">
                <label for="dep_name">Department Name</label>
                <select name="dep_name"  class="dropdown" required>
                    @foreach(\App\Models\Department::pluck('dep_name') as $department)
                        <option value="{{$department}}">{{$department}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="emp_type_id">Employee Type</label>
                <select name="emp_type_id" class="dropdown" required>
                    @foreach(\App\Models\EmployeeType::pluck('emp_type_id') as $emptype)
                        <option value="{{$emptype}}">{{$emptype}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="location_name">Location Name</label>
                <select name="location_name" class="dropdown" required>
                    @foreach(\App\Models\Location::pluck('location_name') as $location)
                        <option value="{{$location}}">{{$location}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="shift_name">Shift Name</label>
                <select name="shift_name" class="dropdown" required>
                    @foreach(\App\Models\Shift::pluck('shift_name') as $shift)
                        <option value="{{$shift}}">{{$shift}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="shift_time_in">Shift Time in</label>
                <select name="shift_time_in" class="dropdown" required>
                    @foreach(\App\Models\Shift::pluck('shift_time_in') as $shift)
                        <option value="{{$shift}}">{{$shift}}AM</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="shift_time_out">Shift Time Out</label>
                <select name="shift_time_out" class="dropdown" required>
                    @foreach(\App\Models\Shift::pluck('shift_time_out') as $shift)
                        <option value="{{$shift}}">{{$shift}}PM</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="emp_gender">Gender</label>
                <select name="emp_gender" class="dropdown" required>
                    @foreach(\App\Models\Gender::pluck('emp_gender') as $gender)
                        <option value="{{$gender}}">{{$gender}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <label for="emp_address">Employee Address</label>
        <input type="text" name="emp_address" required><br>
        <label for="emp_joining_data">Joining Date</label>
        <input type="date" name="emp_joining_data" required>

        <button type="submit">Add Employee</button>
        <a href="{{url('admin/admin-viewemployee')}}">Cancel</a>
    </form>
</div>
</body>
</html>
