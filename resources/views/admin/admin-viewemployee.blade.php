

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('cssfile/style.css') }}" rel="stylesheet">


    <title>Employee</title>
</head>


<body>



<div class="container">
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="logo-wordpress"></ion-icon></span>
                    <span class="title">System Title</span>

                </a>
            </li>
            <li>
                <a href="/admin/admin-profile">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title">Admin</span>

                </a>
            </li>
            <li>
                <a href="/admin/admin-viewemployee">
                    <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
                    <span class="title">Employees</span>

                </a>
            </li>
            <li>
                <a href="/admin/admin-attendance">
                    <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                    <span class="title">Attendance</span>
                </a>
            </li>
            <li>
                <a href="/admin/admin-leaveapproval">
                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="title">Leave Management</span>
                </a>
            </li>
            <li>
                <a href="/login">
                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
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
            <h1>Employees Profile</h1>
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

                    .table tr:nth-child(even){background-color: #f2f2f2;}

                    .table tr:hover {background-color: #ddd;}

                    .table th {
                        padding-top: 12px;
                        padding-bottom: 12px;
                        text-align: left;
                        background-color: navy;
                        color: white;
                        text-align: center;
                    }
                </style>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Employee Username</th>
                        <th scope="col">Employee Password</th>
                        <th scope="col">Employee Name</th>
                        <th scope="col">Employee Birth</th>
                        <th scope="col">Employee Contact</th>
                        <th scope="col">Employee Email</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(\App\Models\Employee::all() as $employee)
                        <tr>
                        <td>{{$employee->employee_id}}</td>
                            <td>{{$employee->emp_user_name}}</td>
                            <td>{{$employee->emp_password}}</td>
                            <td>{{$employee->emp_full_name}}</td>
                            <td>{{$employee->emp_dob}}</td>
                            <td>{{$employee->emp_contact}}</td>
                            <td>{{$employee->emp_email}}</td>

                            <td>
                                <a href="{{url('edit/'.$employee->employee_id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{url('delete/'.$employee->employee_id)}}" class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <a href="/admin/admin_addemployee" class="btn">Add Employee</a>
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
