
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('cssfile/style1.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}">
    <title>Login</title>
</head>
<body>
<div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                <img src="https://scontent-mnl1-1.xx.fbcdn.net/v/t1.15752-9/370101350_804370104391609_5882808744190012774_n.png?_nc_cat=101&ccb=1-7&_nc_sid=8cd0a2&_nc_eui2=AeF7hiBwPd31u0fZkUnaQyWvf9tRzJGQ7SJ_21HMkZDtIkDfK1BXlu3Rfd-lik_kYIOGYsbrxqRzvPfHP9nH58mU&_nc_ohc=_XpB0K9mc1oAX84HNFz&_nc_ht=scontent-mnl1-1.xx&oh=03_AdSQcj4aEZ3Ge3qHvSOj0hw7mVKc2fZHfAh9qUGFZKFgqA&oe=65895B4F" alt="">
            </div>
            <div class="col-md-6 right">
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
                            <a href="/employee/employee-dashboard" class="btn btn-primary" id="signin" name="signin">Sign in</a>
                        </div>
                        <div class="signin">
                            <span>Don't have an account?<a href="/register">Click here!</a></span>
                        </div>
                        <div>

                        <button>
                            <a href="/admin">Login Admin</a>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

