

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="icon" href="book.mp4">

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
        <h1>SignUp</h1>
        <form id="myform" method="post" action="functions/add_customer.php" enctype="multipart/form-data">
            
            <div class="txt-field">
                <input type="text" name="name" required  id="name">
                <label>name</label>
            </div>
            
            <div class="txt-field"> 
                                    <input type="text" required name="email" id="mail" >
                                    <label>Email</label>
                                </div>

            <div class="txt-field">
                <input type="text" name="phone" required id="phone">
                <label>phone</label>
            </div>

        

            <div class="txt-field">
                <input type="password" required id="pas" name="pass">
                <label>Password</label>
            </div>

            <div class="txt-field">
                <input type="password" required id="cofirm">
                <label>confirm password</label>
            </div>

            <div class="txt-field">
                <input type="file" name="img" required id="img" placeholder="img">
              
            </div>

           
            <button type="submit" name="submit" class="subtn">submit</button>
            <!-- <div class="signup-link">
                already got an account? <a href="login.php">login</a>
            </div> -->

            <div id="signed"></div>
        </form>
    </div>

 <!-- jQuery JS -->
 <script src="js/assets/vendor/jquery-1.12.4.min.js"></script>

<!-- Bootstrap -->
<script src="js/assets/popper.min.js"></script>
<script src="js/assets/bootstrap.min.js"></script>

<!-- Owl Slider -->
<script src="js/assets/owl.carousel.min.js"></script>

<!-- Wow Animation -->
<script src="js/assets/wow.min.js"></script>

<!-- Price Filter -->
<script src="js/assets/price-filter.js"></script>

<!-- Mean Menu -->
<script src="js/assets/jquery.meanmenu.min.js"></script>

<!-- Custom JS -->
<script src="js/plugins.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery-3.6.0"></script>

   
   
</body>
</html>