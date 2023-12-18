

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('cssfile/style.css') }}" rel="stylesheet">
    <link href="{{ asset('cssfile/table.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.2.2/esm/ionicons.min.js">

    <title>Admin Employee Management</title>
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
            <li>
            <li><li>
                <a href="/admin/admin-department">
                    <span class="icon"><ion-icon name="business-outline"></ion-icon></span>
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
            <h1><center>Employees Profile</center></h1>
            <div>


                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"><i class="fas fa-id-card"></i>  ID </th>
                        <th scope="col"><i class="fas fa-user"></i>  Employee Username </th>
                        <th scope="col"><i class="fas fa-key"></i>  Employee Password </th>
                        <th scope="col"><i class="fas fa-user"></i>  Employee Name </th>
                        <th scope="col"><i class="fas fa-birthday-cake"></i>  Employee Birth </th>
                        <th scope="col"><i class="fas fa-phone"></i>  Employee Contact </th>
                        <th scope="col"><i class="fas fa-envelope"></i>  Employee Email </th>
                        <th scope="col"><i class="fas fa-cogs"></i>  Action</th>
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
                                <a href="{{url('edit/'.$employee->employee_id)}}" class="btn btn-primary "><ion-icon name="create-outline">Edit</ion-icon><span class="title" >Edit</span> </a>
                                <a href="{{url('delete/'.$employee->employee_id)}}" class="btn btn-primary" > <ion-icon name="trash-outline">Delete</ion-icon><span class="title" >Delete</span></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <a href="/admin/admin_addemployee" class="btn " style="color:#314f81" ><ion-icon name="person-add-outline"></ion-icon><span class="title">Add Employee</span></a>
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
