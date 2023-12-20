<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('cssfile/style.css')}}">
    <script src="{{asset('https://cdn.jsdelivr.net/npm/chart.js')}}"></script>
    <title>Admin Dashboard</title>
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
                <a href="/admin/admin-employeetype">
                    <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
                    <span class="title">EmployeeTypeManagement</span>
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
            <h1><center>Admin Dashboard</center></h1>
        </div>
        <style>
            .stats-container {
                display: flex;
                justify-content: space-around;
                flex-wrap: wrap;
                margin-top: 20px;
            }

            .card {
                width: 200px;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 15px;
                margin: 10px;
                text-align: center;
            }

            .card h2 {
                font-size: 18px;
                margin-bottom: 8px;
                color: #333;
            }

            .card p {
                font-size: 20px;
                font-weight: bold;
                color: #555;
            }
        </style>
        <div class="container">
            <table>
            </table>
            <div class="stats-container">
                <div class="card">
                    <h2>Total of Attendance</h2>
                    <p>{{$data}}</p>
                </div>
                <div class="card">
                    <h2>Total of Employees</h2>
                    <p>{{$totalEmployees}}</p>
                </div>
                <div class="card">
                    <h2>Total of Departments</h2>
                    <p>{{$totalDepartments}}</p>
                </div>
                <div class="card">
                    <h2>Total of Holidays</h2>
                    <p>{{$holiday}}</p>
                </div>
            </div>
            <canvas id="barGraph" width="300" height="80"></canvas>
        </div>
        <script>
            const labels = ['Attendance', 'Employees', 'Departments', 'Holidays'];
            const dataValues = [{{$data}}, {{$totalEmployees}}, {{$totalDepartments}}, {{$holiday}}];
            const ctx = document.getElementById('barGraph').getContext('2d');

            const barGraph = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Total',
                        data: dataValues,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </div>
</div>
<script type="module" src="{{asset('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js')}}"></script>
<script nomodule src="{{asset('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js')}}"></script>
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
