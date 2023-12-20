

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
    <link rel="stylesheet" href="    https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.2.2/esm/ionicons.min.js">
    <style>
        #employeeModal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background: linear-gradient(135deg, #8199ef, #3a1b6a);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            border-radius: 8px;
        }

        #employeeModalClose {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            color: #fff;
            font-size: 20px;
        }

        #employeeModalBody {
            color: #fff;
            display: flex;
            flex-direction: row;
        }

        #employeeModalBody p {
            margin-bottom: 20px; /* Increased space between each piece of information */
            display: flex;
            flex-direction: column; /* Set flex direction to column */
            margin-right: 40px;

        }

        #employeeModalBody p::before {
            content: attr(data-label);
            font-weight: bold;
            margin-bottom: 5px; /* Add space between label and value */
            margin-right: 10px;
        }


        #employeeModalBody p:last-child {
            margin-bottom: 0; /* Remove margin for the last item */
        }

        .hidden-cell {
            display: none;
        }
    </style>
    <title>Admin Employee Management</title>
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


                <table class="table" id="employeeTable">
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
                            <td class="hidden-cell">{{$employee->emp_type_id}}</td>
                            <td class="hidden-cell">{{$employee->emp_address}}</td>
                            <td class="hidden-cell">{{$employee->emp_gender}}</td>
                            <td class="hidden-cell">{{$employee->dep_name}}</td>
                            <td class="hidden-cell">{{$employee->shift_name}}</td>
                            <td class="hidden-cell">{{$employee->shift_time_in}}</td>
                            <td class="hidden-cell">{{$employee->shift_time_out}}</td>
                            <td class="hidden-cell">{{$employee->location_name}}</td>
                            <td class="hidden-cell">{{$employee->emp_joining_data}}</td>


                            <td>
                                <a href="{{url('edit/'.$employee->employee_id)}}" class="btn btn-primary "><ion-icon name="create-outline">Edit</ion-icon><span class="title" >Edit</span> </a>
                                <a href="{{url('delete/'.$employee->employee_id)}}" class="btn btn-primary" > <ion-icon name="trash-outline">Delete</ion-icon><span class="title" >Delete</span></a>
                            </td>


                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div id="employeeModal" ><h2>Additional Information :</h2>
                <br>
                <div id="employeeModalClose">&times;</div>
                <div id="employeeModalBody"></div>
            </div>
            <br>
            <a href= "/admin/admin_addemployee" class="btn " style="color:#314f81"> <ion-icon name="person-add-outline"></ion-icon><span class="title">Add Employee</span></a>
        </div>
    </div>
</div>
<script type="module" src="{{asset("https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js")}}"></script>
<script nomodule src="{{asset("https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js")}}"> </script>
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
        function displayEmployeeModal(employeeInfo) {
            document.getElementById('employeeModalBody').innerHTML = employeeInfo;
            document.getElementById('employeeModal').style.display = 'block';
        }

        let tableRows = document.querySelectorAll('#employeeTable tbody tr');
        let employeeModal = document.getElementById('employeeModal');

        tableRows.forEach(function(row) {
            row.addEventListener('click', function() {
                let employeeInfo =
                    '<p data-label="Type:">' + this.cells[7].textContent + '</p>' +
                    '<p data-label="Address:">' + this.cells[8].textContent + '</p>' +
                    '<p data-label="Gender:">' + this.cells[9].textContent + '</p>' +
                    '<p data-label="Department:">' + this.cells[10].textContent + '</p>' +
                    '<p data-label="Shift:">' + this.cells[11].textContent + '</p>' +
                    '<p data-label=" In:">' + this.cells[12].textContent + '</p>' +
                    '<p data-label=" out:">' + this.cells[13].textContent + '</p>' +
                    '<p data-label="Location:">' + this.cells[14].textContent + '</p>' +
                    '<p data-label="Joined:">' + this.cells[15].textContent + '</p>';
                displayEmployeeModal(employeeInfo); });
        });

        employeeModal.addEventListener('click', function() {
            this.style.display = 'none';
        });

        document.getElementById('employeeModalBody').addEventListener('click', function(event) {
            event.stopPropagation();
        });
</script>



</body>
</html>
