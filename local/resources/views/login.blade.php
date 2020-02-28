<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="./images/logo.jpg" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendors/loginpage/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendors/loginpage/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendors/loginpage/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendors/loginpage/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendors/loginpage/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendors/loginpage/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendors/loginpage/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendors/loginpage/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendors/loginpage/css/util.css">
    <link rel="stylesheet" type="text/css" href="./vendors/loginpage/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <div style="text-align:center;"><img src="./images/logo.jpg" alt="" width="250px" height="250px"
                        text-align="center" srcset="">
                </div>
                <?php if(session('success')){ ?>
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                <?php } else if(session('fail')) {?>
                <div class="alert alert-danger">
                    {{ session('fail') }}
                </div>
                <?php } ?>

                <form method="POST" class="login100-form validate-form flex-sb flex-w">
                    {{ csrf_field() }}
                    <span class="login100-form-title p-b-32">
                        Account Login
                    </span>

                    <span class="txt1 p-b-11">
                        Username
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate="Username is required">
                        <input class="input100" type="text" name="username">
                        <span class="focus-input100"></span>
                    </div>

                    <span class="txt1 p-b-11">
                        Password
                    </span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
                        <input class="input100" type="password" name="pass">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-48">
                        <div>
                            <a href="createaccount" class="txt3">
                                Create Account
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" style="width: 100%">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="./vendors/loginpage/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="./vendors/loginpage/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="./vendors/loginpage/vendor/bootstrap/js/popper.js"></script>
    <script src="./vendors/loginpage/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="./vendors/loginpage/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="./vendors/loginpage/vendor/daterangepicker/moment.min.js"></script>
    <script src="./vendors/loginpage/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="./vendors/loginpage/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="./vendors/loginpage/js/main.js"></script>

</body>

</html>
