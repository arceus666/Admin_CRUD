<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
</head>
<body>
<form action="<?php  echo $_SERVER['PHP_SELF'] ?>" METHOD="post">
<label for="admin">Admin Username</label>
<input type="text" name="admin-username">
<label for="admin-password">Password</label>
<input type="password" name="-admin-password">
<button>
    <a href="/admin/admin-dashboard">Login</a>
</button>
</form>
</body>
</html>
