<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Registration</title>
    <link href="style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">

    <style>
         *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #ffff;
        }
        
        .wrapper{
            position: relative;
            width: 750px;
            height: 450px;
            background: transparent;
            border: 2px solid #dc8b4d;
            box-shadow: 0 0 25px #dc8b4d;
            overflow: hidden;
        }
        
        .wrapper .form-box{
            position: absolute;
            top: 0;
            width: 50%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .wrapper .form-box.login{
            left: 0;
            padding: 0 40px 0 30px;
        }
        
        .wrapper .form-box.login .animation{
            transform: translateX(0);
            opacity: 1;
            filter: blur(0);
            transition: .7s ease;
        }
        
        .wrapper.active .form-box.login .animation{
            transform: translateX(-120%);
            opacity: 0;
            filter: blur(10px);
            transition-delay: calc(.1s * var(--i));
        }
        
        .wrapper .form-box.register{
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateX(9%) translateY(-50%);
            width: 50%; 
            padding: 0 50px;
            flex-direction: column;
            justify-content: center;
        }
        
        .wrapper .form-box.register .animation{
            transform: translateX(120%);
            opacity: 0;
            filter: blur(10px);
            transition: .7s ease;
        }
        
        .wrapper.active .form-box.register .animation{
            transform: translateX(0);
            opacity: 1;
            filter: blur(0);
            transition-delay: calc(.1s * var(--i));
        }
        
        
        .form-box h1{
            font-size: 25px;
            color: #dc8b4d;
            text-align: center;
        }
        
        .form-box .input-box{
            position: relative;
            width: 100%;
            height: 27px;
            margin: 20px 0;
        }
        
        .input-box input{
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border-bottom: 2px solid #fff;
            padding-right: 23px;
            font-size: 16px;
            color: rgb(0, 0, 0);
            font-weight: 50;
            transition: .5s;
        }
        
        .input-box input:focus,
        .input-box input:valid{
            border-bottom-color: #dc8b4d ;
        }
        
        .input-box label{
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            font-size: 16px;
            color: #dc8b4d;
            pointer-events: none;
            transition: .5s;
        }
        
        .input-box input:focus~label,
        .input-box input:valid~label{
            top: -5px;
            color: #dc8b4d;
        }
        
        .input-box i{
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            font-size: 18px;
            color: #dc8b4d;
            transition: .5s;
        }
        
        .input-box input:focus~i,
        .input-box input:valid~i{
            color: #dc8b4d;
        }
        
        .btn{
            position: relative;
            width: 100%;
            height: 45px;
            background: transparent;
            border: 2px solid #dc8b4d;
            outline: none;
            border-radius: 40px;
            cursor: pointer;
            font-size: 16px;
            color: #fff;
            font-weight: 600;
            z-index: 1;
            overflow: hidden;
        }
        
        .btn::before{
            content: '';
            position: absolute;
            top: -100%;
            left: 0;
            width: 100%;
            height: 300%;
            background: linear-gradient(#FDF0D1, #dc8b4d, #FDF0D1,#dc8b4d);
            z-index: -1;
            transition: .5s;
        }
        
        .btn:hover::before{
            top: 0;
        }
        
        .form-box .logreg-link{
            font-size: 14.5px;
            color: #dc8b4d;
            text-align: center;
            margin: 20px 0 10px;
        }
        
        .logreg-link p a{
            color: #dc8b4d;
            text-decoration: none;
            font-weight: 600;
        }
        
        .logreg-link p a:hover{
            text-decoration: underline;
        }
        
        .wrapper .info-text{
            position: absolute;
            top: 0;
            width: 50%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .wrapper .info-text.login{
            right: 0;
            text-align: right;
            padding: 0 40px 60px 150px;
        }
        
        .wrapper .info-text.login .animation{
            transform: translateX(0);
            opacity: 1;
            filter: blur(0);
            transition: .7s ease;
        }
        
        .wrapper.active .info-text.login .animation{
            transform: translateX(120%);
            opacity: 0;
            filter: blur(10px);
            transition-delay: calc(.1s * var(--i));
        }
        
        
        .wrapper .info-text.register{
            left: 0;
            text-align: left;
            padding: 0 150px 60px 40px;
            pointer-events: none;
        }
        
        .wrapper .info-text.register .animation{
            transform: translateX(-120%);
            opacity: 0;
            filter: blur(10px);
            transition: .7s ease;
        }
        
        .wrapper.active .info-text.register .animation{
            transform: translateX(0);
            opacity: 1;
            filter: blur(0);
            transition-delay: calc(.1s * var(--i));
        }
        
        
        .info-text h1{
            font-size: 23px;
            color: #fff;
            line-height: 1.3;
            text-decoration: uppercase;
        }
        
        .info-text p{
            font-size: 16px;
            color: #fff;
        }
        
        .wrapper .bg-animate{
            position: absolute;
            top: -4px;
            right: 0;
            width: 850px;
            height: 600px;
            background: linear-gradient(45deg, #FDF0D1, #dc8b4d);
            border-bottom: 3px solid #dc8b4d;
            transform: rotate(10deg) skewY(40deg);
            transform-origin: bottom right;
            transition: 1.5s ease;
        }
        
        .wrapper.active .bg-animate{
            transform: rotate(0) skewY(0);
            transition-delay: .5s;
        }
        
        .wrapper .bg-animate2{
            position: absolute;
            top: 100%;
            left: 250px;
            width: 850px;
            height: 700px;
            background: #FDF0D1;
            border-top: 3px solid #dc8b4d;
            transform: rotate(0) skewY(0);
            transform-origin: bottom left;
            transition: 1.5s ease;
        }
        
        .wrapper.active .bg-animate2{
            transform: rotate(-11deg) skewY(-41deg);
            transition-delay: 1.2s;
        }

    </style>
</head>
<body>
    <div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>

        <div class="form-box login">
            <h1 class="animation" style="--i:0;">Login</h1>

            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                  <?=$_GET['error']?>
                </div>
                <?php } ?>
                
            <form action="request/process_login.php" method="POST">
                <div class="input-box animation" style="--i:1;">
                    <input type="text" name="uname" required>
                    <label>Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:2;">
                    <input type="password" name="pass" required>
                    <label>Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn animation" style="--i:3;">Login</button>
                <div class="logreg-link animation" style="--i:4;">
                    <p>Don't have an account? <a href="register.html" class="register-link">Sign Up</a></p>
                </div>

            </form>
        </div>
        <div class="info-text login">
            <h1 class="animation" style="--i:0;">Welcome to Ckaaf Shop!</h1>  
            <p class="animation" style="--i:1;">Your premier destination for chic and stylish fashion finds, conveniently available at your fingertips.</p>
        </div>
    </div>
</body>
</html>
