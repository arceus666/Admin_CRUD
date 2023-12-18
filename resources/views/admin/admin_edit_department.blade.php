<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">

    <title>Department Management</title>
</head>
<body>

<div class="container">

    <h1>Update Department Information</h1>
    <form action="{{url('updateDepartmentName/'.$dep->dep_id)}}" method="post">
        {{csrf_field()}}
        @method('PUT')
        <label for="dep_name">Department Name</label>
        <input type="text" name="dep_name" value="{{$dep->dep_name}}">
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
