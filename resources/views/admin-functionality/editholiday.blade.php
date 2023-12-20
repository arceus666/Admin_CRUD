<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="/img/logo2.png" type="image/png">
    <script>// Get the modal
        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('myModal');

            var btn = document.getElementById('submitButton');

            btn.onclick = function() {
                modal.style.display = 'block';
            };

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            };

            // Function to close the modal
            function closeModal() {
                modal.style.display = 'none';
            }
        });
    </script>
    <title>Leave Status</title>
</head>
<body>

<div class="container">

    <h1>Update Holiday Information</h1>
    <form action="{{url('updateHoliday/'.$holiday->holiday_id)}}" method="post">
        {{csrf_field()}}
        @method('PUT')
        <label for="holiday_name">Holiday Name</label>
        <input type="text" name="holiday_name" value="{{$holiday->holiday_name}}">
        <label for="holiday_date">Holiday Date</label>
        <input type="date" name="holiday_date" value="{{$holiday->holiday_date}}">
        <label for="holiday_description">Holiday Description</label>
        <input type="text" name="holiday_description" value="{{$holiday->holiday_description}}">
        <button type="submit" class="btn btn-primary" id="submitButton">Update</button>
        <button onclick="window.location.href='admin/admin-holiday'">Cancel</button>
    </form>
</div>
<div class="modal" id="myModal">
    <div class="modal-content">
        <span  class="close " onclick="closeModal()">&times;</span>
        <p><i class="fa-solid fa-user-check"></i>   Edited successfully</p>
    </div>
</div>
</body>
</html>
