<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('cssfile/style.css')}}">
    <link href="{{ asset('cssfile/table.css') }}" rel="stylesheet">
    <link rel="icon" href="/img/logo2.png" type="image/png">
    <title>Admin Department Management</title>
</head>
<body>
<div class="container">
    <div class="navigation">
        <ul>
            <div class="logo">
                <li>
                    <a href="#">
                        <span class="icon"><img src="/img/logo3.png"></span>
                        <span class="title"><b>WorkSync</b></span>
                    </a>
                </li>
            </div>
            <li>
                <a href="/admin/admin-dashboard">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title">Admin Dashboard</span>

                </a>
            </li>
            <li>
                <a href="/admin/admin-viewemployee">
                    <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
                    <span class="title">Employees Management</span>

                </a>
            </li>
            <li>
                <a href="/admin/admin-attendance">
                    <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                    <span class="title">Attendance Management</span>
                </a>
            </li>
            <li>
                <a href="/admin/admin-leaveapproval">
                    <span class="icon"><ion-icon name="send-outline"></ion-icon></span>
                    <span class="title">Leave Management</span>
                </a>
            </li>
            <li><li>
                <a href="/admin/admin-department">
                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="title">Department Management</span>
                </a>
            </li>
            <li>
                <a href="/admin/admin-holiday">
                    <span class="icon"><ion-icon name="calendar-number-outline"></ion-icon></span>
                    <span class="title">Holiday Management</span>
                </a>
            </li>
            <li>
                <a href="/admin/admin-location">
                    <span class="icon"><ion-icon name="location-outline"></ion-icon></span>
                    <span class="title">Location Management</span>
                </a>
            </li>
            <li>
                <a href="/admin/admin-shift">
                    <span class="icon"><ion-icon name="time-outline"></ion-icon></span>
                    <span class="title">Shift Management</span>
                </a>
            </li>
            <li>
                <a href="/login">
                    <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="main">
        <div class="top-bar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
        </div>
        <div>
            <style>
                .table {
                    font-family: Arial, Helvetica, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                .table td, #customers th {
                    border: 1px solid #ddd;
                    padding: 8px;
                    text-align: center;
                }

                .table tr:nth-child(even) {
                    background-color: #f2f2f2;
                }

                .table tr:hover {
                    background-color: #ddd;
                }

                .table th {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: navy;
                    color: white;
                    text-align: center;
                }
                td{
                    font-weight: bold;
                }
            </style>
            <table class="table">
                <h1>
                    <center>Department Management</center>
                </h1>
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Employee Type</th>
                    <th scope="col">Department</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $element)
                    <tr>
                        @foreach($element->attributesToArray() as $department_employee)
                            <td>{{$department_employee}}</td>
                        @endforeach
                        <td>
                            <a href="{{url('editDepartment/'.$element->dep_emp_id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('deleteDepartment/'.$element->dep_emp_id)}}" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br><br><br>
            <table class="table">
                <h1><center>Available Departments</center></h1>
                <thead>
                <tr>
                    <th scope="col">Department Name</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach(\App\Models\Department::all() as $department)
                        <tr>
                            <td>{{$department->dep_name}}</td>
                            <td>
                                <a href="{{url('editDepartmentName/'.$department->dep_id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{url('deleteDepartmentName/'.$department->dep_id)}}" class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <a href="{{url('admin/admin_insert_department')}}" class="btn btn-primary">Add Department</a>
            <a href="{{url('admin/admin_add_department')}}" class="btn btn-primary">Add Employee Department</a>
        </div>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>

    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');

    toggle.onclick =  function (){
        navigation.classList.toggle('active');
        main.classList.toggle('active');
    }

    let list = document.querySelectorAll('.navigation li');
    function activeLink(){
        list.forEach((item)=>
            item.classList.remove('hovered'));
        this.classList.add('hovered')
    }
    list.forEach((item)=> item.addEventListener('mouseover', activeLink)
    );
</script>



</body>
</html>
