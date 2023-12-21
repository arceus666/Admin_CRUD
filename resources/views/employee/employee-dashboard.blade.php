<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('cssfile/style3.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
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

        <!--CODE FOR TIME/QUOTE/VERSE-->
        <style>
            .wrapper {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 50vh;
            }

            .display {
                border: 2px solid #3494e6;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                background-color: #fff;
                padding: 50px;
                margin-bottom: 50px;
            }

            .display:hover {
                color: #fff;
                border-color: transparent;
                transform: scale(1.05);
            }

            .display #time {
                line-height: 1;
                color: #3494e6;
                font-size: 48px;
                font-weight: bold;
                letter-spacing: 1px;
            }

            .cards-container {
                display: flex;
                gap: 20px; /* Adjust the gap between cards as needed */
                justify-content: center;
                align-items: center;
            }

            .card {
                width: 300px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                padding: 20px;
                text-align: center;
            }

            .card h2 {
                color: #3494e6;
                font-size: 18px;
                margin-bottom: 8px;
            }

            .card p {
                font-size: 16px;
                color: #555;
            }

            .card:hover{
                 color: #000000;
                 background: transparent;
             }
        </style>

        <div class="wrapper">
            <div class="display">
                <div id="time"></div>
            </div>

            <div class="cards-container">
                <div class="card">
                    <h2>Quote of the day:</h2>
                    <p>"When nothing goes right, go left"</p>
                </div>

                <div class="card">
                    <h2>Verse: Isiah 43:18</h2>
                    <p>"Do not dwell on the past"</p>
                </div>
            </div>
        </div>

        <!--CODE FOR CALENDAR-->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js"></script>

        <style>
            .containerrr {
                font-family: 'Roboto', sans-serif;
                display: flex;
                min-height: 100vh;
                background-color: #f6f9fc;
                margin: 10px auto;
                height: 100%;
                width: 89%;
                position: relative;
                box-shadow:
                    10px 10px 10px rgba(0, 0, 0, .1),
                    -10px -10px 10px rgba(255, 255, 255, 1),
                    inset 10px 10px 10px rgba(0, 0, 0, .1),
                    inset -10px -10px 10px rgba(255, 255, 255, 1);
            }

            #calendar {
                margin-top: 20px;
            }
        </style>

        <div class="containerrr">
            <div id="calendar"></div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                $('#calendar').fullCalendar({
                    defaultView: 'month',
                    events: [
                        {
                            title: 'Event 1',
                            start: '2023-01-01'
                        },
                        {
                            title: 'Event 2',
                            start: '2023-01-05'
                        }
                    ],
                    themeSystem: 'standard',
                });
            });
        </script>
        <!--CODE FOR CALENDAR ENDS HERE-->

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
