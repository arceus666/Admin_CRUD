<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script>// Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById('submitButton');

        // When the user clicks the button, open the modal
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
    </script>
    <title>Add Location</title>
</head>
<body>
<div class="container">
    <h3><center>Add Location</center></h3>
    <form action="{{url('addLocation')}}" method="post">
        @csrf
        <label for="location_name">Location Name</label>
        <input type="text" name="location_name">
        <button type="submit" id="submitButton" class="btn">Add Location</button>
    </form>
</div>
<div class="modal" id="myModal">
    <div class="modal-content">
        <span  class="close " onclick="closeModal()">&times;</span>
        <p><i class="fa-solid fa-map-location"></i> New location has been  added successfully</p>
    </div>
</div>

</body>
</html>
