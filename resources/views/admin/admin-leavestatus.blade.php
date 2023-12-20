<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/table.css')}}">
    <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.2.2/esm/ionicons.min.js">
    <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.2.2/esm/ionicons.min.js">
    <link rel="icon" href="/img/logo2.png" type="image/png">
    <title>Leave Status</title>
</head>
<body>

<div class="container">

    <h1>Update Leave Information</h1>
    <form action="{{url('update-status/'.$leave->leave_id)}}" method="post">
            {{csrf_field()}}
            @method('PUT')
    <label for="leave_subject">Leave Subject</label>
    <input type="text" name="leave_subject" value="{{$leave->leave_subject}}">
        <label for="leave_date">Leave Date</label>
        <input type="date" name="leave_date" value="{{$leave->leave_date}}">
        <label for="leave_status">Leave Status</label>
        <input type="text" name="leave_status" value="{{$leave->leave_status}}">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{url('/admin/admin-leaveapproval')}}" class="btncancel">Cancel</a>
    </form>
</div>
</body>
</html>
