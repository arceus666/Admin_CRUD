<!--<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
</head>
<body>
    <form action="<?php  //echo $_SERVER['PHP_SELF'] ?>" METHOD="post">
        <label for="admin">Admin Username</label>
        <input type="text" name="admin-username">
        <label for="admin-password">Password</label>
        <input type="password" name="-admin-password">
            <button>
                <a href="/admin/admin-dashboard">Login</a>
            </button>
    </form>
</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" contents="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('cssfile/style4.css')}}">
</head>
<body>
    <div class="container">
        <div class="signin">
            <!--for employee login-->
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="sign-in-form-employee">
                <h2 class="title">Sign in as Employee</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div>
                <a href="/employee/employee-dashboard" class="btn" id="signin">Sign in</a>
            </form>

            <!--for admin login-->
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" METHOD="post" class="sign-in-form-admin">
                <h2 class="title admin-title">Sign in as Admin</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div>
                <a href="/admin/admin-dashboard" class="btn" id="signin">Sign in</a>
            </form>
        </div>

        <!--Side Small Info LEFT-->
        <!--<div class="panel left-panel">
                <div class="content">
                    <h3>Are you an existing Employee?</h3>
                    <p>Click here to Log in your Employee Account</p>
                    <button class="btn" id="signin_Emp">For Employee</button>
                </div>
                <img src="/img/undraw_working_remotely_re_6b3a.svg" alt="" class="image">
            </div>-->

            <!--Side Small Info RIGHT-->
            <!--<div class="panel right-panel">
                <div class="content">
                    <h3>Are you an Admin?</h3>
                    <p>Click here to Log in Admin Account</p>
                    <button class="btn" id="signin_Adm">For Admin</button>
                </div>
                <img src="/img/undraw_counting_stars_re_smvv.svg" alt="" class="image">-->
            </div>
        </div>
    </div>
</body>
</html>
