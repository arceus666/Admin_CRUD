<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('cssfile/style3.css')}}">

    <title>Employee Dashboard</title>
</head>
<body>
<div class="container">
    <div class="navigation">
        <ul>
            <div class="logo">
                <li>
                    <a href="#">
                        <span class="icon"><img src="/img/logo3.png"></span>
                        <span class="title">WorkSync</span>
                    </a>
                </li>
            </div>
            <li>
                <a href="/employee/employee-dashboard">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title">Employee Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/employee/employee-attendance">
                    <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
                    <span class="title">Employee Attendance</span>
                </a>
            </li>
            <li>
                <a href="/employee/employee-leave">
                    <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                    <span class="title"> Employee Leave</span>
                </a>
            </li>
            <li>
                <a href="/employee/employee-messages">
                    <span class="icon"><ion-icon name="mail-unread-outline"></ion-icon></span>
                    <span class="title">Employee Messages</span>
                </a>
            </li>
            <li>
                <a href="/employee/employee-department">
                    <span class="icon"><ion-icon name="business-outline"></ion-icon></span>
                    <span class="title">Employee Department</span>
                </a>
            </li>
            <li>
                <a href="/employee/employee-holiday">
                    <span class="icon"><ion-icon name="calendar-outline"></ion-icon></span>
                    <span class="title">Employee Holiday</span>
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
        <h1><center>Employee Dashboard</center></h1>
        <div class="wrapper">
            <style>
                .wrapper {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    height: 50vh;
                }

                .wrapper .display #time {
                    line-height: 85px;
                    color: blue;
                    font-size: 55px;
                    font-weight: 550;
                    letter-spacing: 1px;
                }
            </style>
            <div class="display">
                <div id="time"></div>
            </div>
            <span></span>
            <span></span>
        </div>
        <script>
            setInterval(() => {
                const time = document.querySelector("#time");
                let date = new Date();
                let hours = date.getHours();
                let minutes = date.getMinutes();
                let seconds = date.getSeconds();
                let day_night = "AM";
                if (hours > 12) {
                    day_night = "PM";
                    hours = hours - 12;
                }
                if (hours < 10) {
                    hours = "0" + hours;
                }
                if (minutes < 10) {
                    minutes = "0" + minutes;
                }
                if (seconds < 10) {
                    seconds = "0" + seconds;
                }
                time.textContent = hours + ":" + minutes + ":" + seconds + " " + day_night;
            });

            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');

            toggle.onclick = function () {
                navigation.classList.toggle('active');
                main.classList.toggle('active');
            }

            let list = document.querySelectorAll('.navigation li');

            function activeLink() {
                list.forEach((item) =>
                    item.classList.remove('hovered'));
                this.classList.add('hovered')
            }

            list.forEach((item) => item.addEventListener('mouseover', activeLink));
        </script>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
