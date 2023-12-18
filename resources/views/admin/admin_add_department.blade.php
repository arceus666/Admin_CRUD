<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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
        <br>
        <br>
        <hr>
        <button type="submit" id="submitButton">Add Employee Department</button>
    </form>
</div>
<div class="modal" id="myModal">
    <div class="modal-content">
        <span  class="close " onclick="closeModal()">&times;</span>
        <p><i class="fa-regular fa-building"></i>  New department has been  added successfully</p>
    </div>
</div>





</body>
<script>// Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById('submitButton');

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = 'block';
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    };

    // Function to close the modal
    function closeModal() {
        modal.style.display = 'none';
    }
</script>
</html>
