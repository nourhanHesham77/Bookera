<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loGin</title>
    <link rel="icon" href="img/book1.jpg">
</head>
<style>
    body{
        justify-items: center;
        justify-content: center;
    }
 video{
        position: fixed;
  right: 0%;
  bottom: 0%;
  top: 0%;
  min-width: 100%;
  min-height: 100%;

    }

    .login{
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        /* margin: auto; */
        width: 400px;
        background-color: white;
        border-radius: 10px;
        z-index: 10000;
        padding-bottom:  18px;
    }

    .login h1{
        text-align: center;
        padding: 0 0 20px 0;
        border-bottom: 1px solid silver;
    }

    .login form{
        padding: 0 40px;
        box-sizing: border-box;
    }

    .login .txt-field{
        position: relative;
        margin: 30px 0;
border-bottom: 2px solid #666;

    }

    .txt-field input{
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        border: none;
        background: none;
        outline: none;
    }

    .txt-field label{
     position: absolute;
     top: 50%;
     left: 5px;
     color: #adadad;
     transform: translateY(-50%);
     font-size: 16px;
     pointer-events: none;
     transition: .5s;
    }

    .txt-field span::before{

        position: absolute;
        top: 40px;
        left: 0;
        width: 100%;
        height: 2px;
        background: #2691d9;
    }

    .txt-field input:focus ~ label,
    .txt-field input:valid ~ label{
        top: -5px;
        color: #2691d9;
    }

    .pass{
        margin: -5px 0 20px 5px;
        color: #2691d9;
        cursor: pointer;
    }

    .pass:hover{
        text-decoration: underline;
    }

    .subtn{
        width: 100%;
        height: 50px;
        border-radius: 25px;
        color: white;
        background-color: #2691d9;
        border: 1px solid;
        font-weight: bold;
        cursor: pointer;
        font-size: 16px;
    }

    .subtn:hover{
        border-color: #2691d9;
        transition: .5s;
    }

    .signup-link{
        text-align: center;
        margin: 30px 0;

    }

    .signup-link a{
        color: #2691d9;
        text-decoration: none;
    }

    .signup-link a:hover{
        text-decoration: underline;
    }

    
</style>
<body>
<div class="back">
    <video autoplay muted loop id="myVideo">
        <source src="book4.mp4" type="video/mp4">
      </video>
    </div>

    <div class="login">
        <h1>login</h1>
        <form action="functions/login_check.php" method="post">
            <div class="txt-field">
               
                <input type="text" required name="email">
                <label>E-mail</label>
            </div>
            <div class="txt-field">
              
                <input type="password" required name="password">
                <label>Password</label>
            </div>

            <div class="pass">Forgot Password?</div>
            <input type="submit" value="LogIn" name="submit" class="subtn">
            <div class="signup-link">
                Not a member? <a href="register.php">SignUp</a>
            </div>
        </form>
    </div>
</body>
</html>