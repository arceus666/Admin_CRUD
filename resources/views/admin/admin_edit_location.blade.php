<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">

    <title>Leave Status</title>
</head>
<body>

<div class="container">

    <h1>Update Location Information</h1>
    <form action="{{url('updateLocation/'.$location->location_id)}}" method="post">
        {{csrf_field()}}
        @method('PUT')
        <label for="location_name">Location Name</label>
        <input type="text" name="location_name" value="{{$location->location_name}}">
        <button type="submit" class="btn btn-primary">Update Location</button>
    </form>
</div>
</body>
</html>
