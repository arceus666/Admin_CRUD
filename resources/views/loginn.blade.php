<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('cssfile/style1.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}">
    <title>Login</title>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="input-box">
                <header>Login Account</header>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="input-field">
                        <input type="email" name="username" id="email" class="input" required>
                        <label for="email"><i class="fa-solid fa-user"></i>Username</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" id="password" class="input" required>
                        <label for="password"><i class="fa-solid fa-lock"></i>Password</label>
                    </div>
                    <div class="input-field">
                        <a href="/employee/employee-dashboard" class="btn" id="signin">Sign In as Employee</a>
                        <p>or</p>
                        <a href="/admin" class="btn" id="signin">Sign In as Admin</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

