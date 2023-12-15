<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('cssfile/style3.css')}}">
    <title>Employee Attendance</title>
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
                <a href="/employee/employee-profile">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title">Employee Profile</span>

                </a>
            </li>
            <li>
                <a href="/employee/employee-attendance">
                    <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
                    <span class="title">Attendance</span>

                </a>
            </li>
            <li>
                <a href="/employee/employee-leave">
                    <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                    <span class="title">Leave</span>
                </a>
            </li>
            <li>
                <a href="/employee/employee-messages">
                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="title">Messages</span>
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
                    background-color: dodgerblue;
                    color: white;
                    text-align: center;
                }
            </style>
            <table class="table">
                <h1><center>Leave</center></h1>
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Empployee Name</th>
                    <th scope="col">Leave Subject</th>
                    <th scope="col">Leave Data</th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Models\Employee::all() as $employee)
                    <tr>
                        <td>{{$employee->employee_id}}</td>
                        <td>{{$employee->emp_full_name}}</td>
                        <td></td>
                        <td></td>
                        <td>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="/employee/employee_addleave">Add Leave</a>
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
