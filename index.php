<?php
    session_start();
    if (isset($_SESSION['login']))
        header('Location:main.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor\bootstrap-3.3.0\dist\css\bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="loginCss.css" rel="stylesheet">

</head>
<body class="main">

<div class="login-screen"></div>
<div class="login-center">
    <div class="container min-height" style="margin-top: 20px;">
        <div class="row">
            <div class="col-xs-4 col-md-offset-8">
                <div class="login" id="card">
                    <div class="front signin_form">
                        <p>Login Your Account</p>
                        <form class="login-form" method="post" action="traitementIndex.php">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="login" placeholder="Type your login">
                                    <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" name="pwd" class="form-control" placeholder="Type your password">
                                    <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-lock"></i>
                                      </span>
                                </div>
                            </div>
                            <!--<div class="checkbox">
                                <label><input type="checkbox">Remember me next time.</label>
                            </div>-->

                            <div class="form-group sign-btn">
                                <input type="submit" class="btn" value="Log in">
                                <p>
                                    <?php
                                        if (isset($_GET['err']))
                                            echo 'Login/Mot de passe erroné';


                                    ?>
                                </p>
                                <p><a href="#" class="forgot">Can't access your account?</a></p>
                                <!--<p><strong>New to TimeInfo?</strong><br><a href="#" id="flip-btn" class="signup signup_link">Sign up for a new account</a></p> -->
                            </div>
                        </form>
                    </div>
                    <!--<div class="back signup_form" style="opacity: 0;">
                        <p>Sign Up for Your New Account</p>
                        <form class="login-form">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Username">
                                    <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn"><button type="button" class="btn btn-cyan"><span class="fa fa-refresh"></span></button></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                    <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-lock"></i>
                                      </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                    <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-envelope"></i>
                                      </span>
                                </div>
                            </div>

                            <div class="form-group sign-btn">
                                <input type="submit" class="btn" value="Sign up">
                                <br><br>
                                <p>You have already Account So <a href="#" id="unflip-btn" class="signup">Log in</a></p>
                            </div>
                        </form>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
