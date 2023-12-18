<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">
    <title>Add Location</title>
</head>
<body>
<div class="container">
    <form action="{{url('addLocation')}}" method="post">
        @csrf
        <label for="location_name">Location Name</label>
        <input type="text" name="location_name">
        <button type="submit">Add Location</button>
    </form>
</div>

</body>
</html>
