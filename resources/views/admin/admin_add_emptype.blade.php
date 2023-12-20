<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Leave Management</title>
</head>
<body>
<div class="container">
    <h1><center>Employee Type Management</center></h1>
    <form action="{{url('addEmployeeType')}}" method="post">
        @csrf
        <label for="emp_type_id">Employee Type Name</label>
        <input type="text" name="emp_type_id">
        <button type="submit" class="btn" id="submitButton">Add Holiday</button>
        <a href="{{url('/admin/admin-employeetype')}}" class="btncancel">Cancel</a>

    </form>
</div>
<div class="modal" id="myModal">
    <div class="modal-content">
        <span  class="close " onclick="closeModal()">&times;</span>
        <p><i class="fa-solid fa-user-check"></i>  New Holiday  has been  added successfully</p>
    </div>
</div>

</body> <script>// Get the modal
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
</html>
