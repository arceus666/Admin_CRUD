
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('cssfile/style4.css')}}">
</head>
<body>
<div class="container">
    <div class="signin">
        <form action="{{url('loginEmployee')}}" method="post" class="sign-in-form-employee">
            <h2 class="title">Sign in as Employee</h2>
            @csrf
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="emp_user_name" placeholder="Username" required>
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="emp_password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn" id="signin">Sign in</button>
        </form>
        <form action="{{url('loginAdmin')}}" method="post" class="sign-in-form-admin">
            <h2 class="title admin-title">Sign in as Admin</h2>
            @csrf
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="admin_username" placeholder="Username" required>
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="admin_password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn" id="signin">Sign in</button>
        </form>
    </div>
</div>
</body>
</html>

<!--commit and push purposes-->
