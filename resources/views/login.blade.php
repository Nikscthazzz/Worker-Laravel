<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Nikita Samantha</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="loginAsset/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAsset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAsset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAsset/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAsset/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="loginAsset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAsset/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAsset/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="loginAsset/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAsset/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginAsset/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
                            <form class="login100-form validate-form" method="POST" action="/login">
                    @csrf
                              <span class="login100-form-title p-b-70">
                                  Welcome Niki
                              </span>
                              <span class="login100-form-avatar">
                                  <img src="img/profile.png" alt="AVATAR">
                              </span>
          
                              <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
                                  <input class="input100" type="email" name="email">
                                  <span class="focus-input100" data-placeholder="Email"></span>
                              </div>
          
                              <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                                  <input class="input100" type="password" name="password">
                                  <span class="focus-input100" data-placeholder="Password"></span>
                              </div>
          
                              <div class="container-login100-form-btn" >
                                  <button class="login100-form-btn" style="background-color: #2D9DEF">
                                      Login
                                  </button>
                              </div>
                          </form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="loginAsset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="loginAsset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="loginAsset/vendor/bootstrap/js/popper.js"></script>
	<script src="loginAsset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="loginAsset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="loginAsset/vendor/daterangepicker/moment.min.js"></script>
	<script src="loginAsset/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="loginAsset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="loginAsset/js/main.js"></script>

</body>
</html>