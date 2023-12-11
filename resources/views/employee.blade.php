<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}">
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}"></script>
    <title>Employee Page</title>
</head>
<body>

<div class="container">
    <form action="insert" method="post">
        @csrf
        <label for="fname">First Name</label>
        <input type="text" name="employee_fname">
        <label for="employee_lname">Last Name</label>
        <input type="text" name="employee_lname">
        <label for="employee_timein">Time in</label>
        <input type="time" name="employee_timein">
        <label for="employee_datein">Date</label>
        <input type="date" name="employee_datein">
        <button class="btn btn-success">
           Time In
        </button>
    </form>
</div>
<table class="table table-stripe">
    <h1>Time In</h1>
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Empployee Firstname</th>
        <th scope="col">Employee Lastname</th>
        <th scope="col">Employee Time in</th>
        <th scope="col">Employee Date in</th>
    </tr>
    </thead>
    <tbody>
    @foreach(\App\Models\Employee::all() as $prof)
        <tr>
            <td>{{$prof->employee_id}}</td>
            <td>{{$prof->employee_fname}}</td>
            <td>{{$prof->employee_lname}}</td>
            <td>{{$prof->employee_timein}}</td>
            <td>{{$prof->employee_datein}}</td>
            <td>
                <a href="{{url('delete/'.$prof->employee_id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
@endforeach

</body>
</html>
