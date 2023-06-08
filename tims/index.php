<html class="chrome"><head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>DOLE | TUPAD Information Management System (TIMS)</title>
    <!-- Favicon-->
    <link rel="icon" href="./assets/images/dole_logo.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="./assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="./assets/plugins/node-waves/waves.css" rel="stylesheet">

    <!-- Animation Css -->
    <link href="./assets/plugins/animate-css/animate.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body class="login-page ls-closed">
    <div class="login-box">
        <div class="logo">
            <div class="text-center mb-4">
                <img style="margin-bottom: 12px;" src="./assets/images/dole_logo.png" alt="" height="120">
                <div>
                    <small>Republic of the Philippines
                        <br>
                        <strong>DEPARTMENT OF LABOR AND EMPLOYMENT</strong>
                    </small></div>
            </div>
            <br>
            <a href="javascript:void(0);" style="font-size: 30px;"><b>TUPAD Information Management System (TIMS)</b></a>
            <small>An application developed to track and monitor the TUPAD Project implementation nationwide.</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="./" method="POST">

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>x
                        </span>
                        <div class="form-line focused">
                            <input type="text" class="form-control" name="username" placeholder="Username" value="talavelasco" autofocus"="">
                        </div>
                                            </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <label class="error" for="password">Incorrect password credentials.</label>                    </div>
                    <div class="row">
                        <!-- <div class="col-xs-8 p-t-5">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div> -->
                        <div class="col-xs-12">
                            <button class="btn btn-block bg-indigo waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                </form>

                <p class="align-center">--- access to ---</p>
                <br>

                <div class="row">
                    <div class="col-xs-6">
                        <a href="https://tupadv1.dole.gov.ph/tupad_bayanihan/" class="btn btn-block bg-deep-orange waves-effect">OLD TUPAD BAYANIHAN</a>
                    </div>
                    <div class="col-xs-6">
                        <a href="https://tupad.dole.gov.ph/tupad_funds" class="btn btn-block bg-deep-orange waves-effect">FUNDS MANAGEMENT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="./assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="./assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="./assets/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="./assets/js/admin.js"></script>


</body></html>
