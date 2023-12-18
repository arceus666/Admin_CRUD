
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" contents="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('cssfile/style4.css')}}">
</head>
<style>
    .wrapper{
        margin-top: 10rem;
       margin-left: 32rem;
    }
    .wrapper .display #time{
        line-height: 85px;
        color: blue ;
        font-size: 55px;
        font-weight: 550;
        letter-spacing: 1px;
    }
</style>
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
    <div class="wrapper">
        <div class="display">
            <div id="time">12:00:00 PM</div>
        </div>
        <span></span>
        <span></span>
    </div>
    <script>
        setInterval(()=>{
            const time = document.querySelector("#time");
            let date = new Date();
            let hours = date.getHours();
            let minutes = date.getMinutes();
            let seconds = date.getSeconds();
            let day_night = "AM";
            if (hours > 12){
                day_night = "PM";
                hours = hours - 12;
            }
            if (hours <10){
                hours = "0"+hours;
            }
            if (minutes <10){
                minutes = "0"+ minutes;
            }
            if (seconds <10) {
                seconds = "0" + seconds;
            }
            time.textContent = hours +":"+minutes+":"+seconds+" "+day_night;
        })
    </script>

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
</body>
</html>
