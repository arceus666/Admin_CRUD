<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="/img/logo2.png" type="image/png">
    <script>// Get the modal
        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('myModal');

            var btn = document.getElementById('submitButton');

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
        });
    </script>
    <title>Leave Status</title>
</head>
<body>

<div class="container">

    <h1>Update Departments Information</h1>
    <form action="{{url('updateDepartment/'.$dep->dep_emp_id)}}" method="post">
            {{csrf_field()}}
            @method('PUT')
        <label for="emp_full_name">Employee Name</label>
        <input type="text" name="emp_full_name" value="{{$dep->emp_full_name}}">
        <label for="emp_type_id">Employee Type ID</label>
            <select name="emp_type_id">
                @foreach(\App\Models\EmployeeType::pluck('emp_type_id') as $emp_type)
                <option value="{{$emp_type}}">{{$emp_type}}</option>
                @endforeach
            </select>
        <label for="dep_name">Department Name</label>
        <select name="dep_name">
            @foreach(\App\Models\Department::pluck('dep_name') as $dep)
            <option value="{{$dep}}">{{$dep}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary" id="submitButton">Update</button>
        <button onclick="window.location.href='admin/admin-department'">Cancel</button>
    </form>
</div>
<div class="modal" id="myModal">
    <div class="modal-content">
        <span  class="close " onclick="closeModal()">&times;</span>
        <p><i class="fa-solid fa-user-check"></i>   Edited successfully</p>
    </div>
</div>
</body>
</html>
