<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">
    <title>Add Department Management</title>
</head>
<body>
<div class="container">
    <h1>Department Management</h1>
    <form action="{{url('insertDepartment')}}" method="post">
        @csrf
        <label for="holiday_name">Department Name</label>
        <input type="text" name="dep_name">
        <button type="submit">Add Department</button>
    </form>
</div>


</body>
</html>
