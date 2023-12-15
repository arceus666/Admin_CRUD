<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leave Management</title>
</head>
<body>
    <div class="container">
        <form action="{{url('addleave')}}" method="post">
            @csrf
            <label for="leave_subject">Leave Subject</label>
            <input type="text" name="leave_subject">
            <label for="leave_date">Leave Date</label>
            <input type="date" name="leave_date">
            <button type="submit">Submit</button>

        </form>
    </div>


</body>
</html>
