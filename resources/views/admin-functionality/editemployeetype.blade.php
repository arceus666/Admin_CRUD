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
    <title>Update Employee Type</title>
</head>
<body>

<div class="container">

    <h1>Update Employee Type Information</h1>
    <form action="{{url('updateEmpType/'.$emp->employee_type_id)}}" method="post">
        {{csrf_field()}}
        @method('PUT')
        <label for="emp_type_id">Employee Type Name</label>
        <input type="text" name="emp_type_id" value="{{$emp->emp_type_id}}">
        <button type="submit" class="btn btn-primary" id="submitButton">Update Employee Type</button>
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
