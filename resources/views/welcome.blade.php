<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WorkSync</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        section{
            position: relative;
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            background: url('/img/pc4.jpg') no-repeat;
            background-size: cover;
            background-position: center;
        }

        header{
            position: relative;
            top: 0;
            width: 100%;
            padding: 30px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            background-image: url("/img/logo2.png");
            background-size: contain;
            background-repeat: no-repeat;
            width: 100px;
            height: 50px;
            display: block;
        }

        header .navigation a{
            color: #000;
            text-decoration: none;
            font-weight: 500;
            letter-spacing: 1px;
            padding: 2px 15px;
            border-radius: 20px;
            transition: 0.3s;
            transition-property: background;
        }

        header .navigation a:not(:last-child){
            margin-right: 30px;
        }

        header .navigation a:hover{
            color: #fff;
            background: #0E2954;
        }

        .content{
            max-width: 650px;
            margin: 60px 100px;
        }

        .content .info h2{
            color: #0F2167;
            font-size: 40px;
            font-weight: 800;
            line-height: 45px;
            margin-bottom: 25px;
        }

        .content .info h2 span{
            color: #fff;
            font-size: 35px;
            font-weight: 700;
        }

        .content .info p{
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 40px;
        }

        .content .login-btn {
            color: #000;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 2px;
            padding: 10px 20px;
            border-radius: 5px;
            border: 2px solid #000;
            transition: color 0.3s, background 0.3s, border-color 0.3s;
        }

        .content .login-btn:hover {
            color: #fff;
            background: #0E2954;
            border-color: transparent;
        }

        label{
            display: none;
        }
    </style>
</head>
<body>
        <section>
            <header>
            <a href="#" class="logo" alt="Logo"></a>
                <div class="navigation">
                    <a href="#">Home</a>
                    <a href="#">More</a>
                </div>
            </header>
            <div class="content">
                <div class="info">
                    <h2>Welcome to our WorkSync<br><span>Attendance & Information of Employment Management System</span></h2>
                    <p>Expertly crafted to streamline your organization's attendance processes. With features seamlessly to track employees' shifts, employee types, leaves, department, location, and holidays. Our system empowers your workforce for enhanced productivity.</p>

                    <a href="/signin" class="login-btn">Sign In</a>
                </div>
            </div> 
        </section>
</body>
</html>
