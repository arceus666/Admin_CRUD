<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('cssfile/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js') }}">
    <link rel="icon" href="/img/logo2.png" type="image/png">
    <title>Employee Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #0C356A;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .admin-container {
            width: 100%;
            max-width: 420px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }

        .input-box {
            text-align: center;
        }

        header {
            font-size: 20px;
            margin-left:13%;
            margin-bottom: 20px;
        }

        .input-field {
            width: 400px;

            margin-bottom: 20px;
        }

        .input {
            width: calc(100% - 20px);
            padding: 20px;
            border: none;
            border-radius: 4px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            text-align: left;
        }

        .btn-primary {
            display: inline-block;
            width: calc(100% - 20px);
            padding: 10px 0;
            font-size: 16px;
            text-decoration: none;
            color: #ffffff;
            background: linear-gradient(to right, #4CB9E7, #3559E0);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #3559E0, #0F2167);
        }

    </style>
</head>
<body>

<div class="admin-container">
    <div class="input-box">
        <header>Login Account</header>
        <form action="{{url('showLoginForm')}}" method="post">
            <div class="input-field">
                <input type="text" name="emp_user_name" id="emp_user_name"  class="input" required>
                <label for="emp_user_name"><i class="fa-solid fa-user"></i>Employee Username:</label>
            </div>
            <div class="input-field">
                <input type="password" name="emp_password" id="emp_password" class="input" required>
                <label for="emp_password"><i class="fa-solid fa-lock"></i>Password</label>
            </div>
            <div class="input-field">
                <a href="/employee/employee-dashboard" class="btn btn-primary" id="signin">Sign in</a><br>
                <a href="/admin" class="btn btn-primary">Login as Admin</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
