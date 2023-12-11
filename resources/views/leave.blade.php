<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}">
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}"></script>
    <title>Leave Employee Page</title>
</head>
<body>

    <div class="container">
        <form action="add" method="post">
            @csrf
            <label for="reason">Reason of Leave</label>
            <input type="text" name="leave_reason">
            <label for="leave_start">Start Date</label>
            <input type="date" name="leave_start">
            <label for="leave_end">End Date</label>
            <input type="date" name="leave_end">
            <input type="submit" value="Send">
        </form>
    </div>
    <table class="table table-stripe">
        <h1>Leave Management</h1>
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Reason for Leaving </th>
            <th scope="col">Leave Start</th>
            <th scope="col">Leave Ends</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach(\App\Models\Leave::all() as $prof)
            <tr>
                <td>{{$prof->leave_id}}</td>
                <td>{{$prof->leave_reason}}</td>
                <td>{{$prof->leave_start}}</td>
                <td>{{$prof->leave_end}}</td>
            </tr>
    @endforeach

</body>
</html>
