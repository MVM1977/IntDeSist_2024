<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Registrarse | Mesa de Entrada</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="../public/assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="../public/assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../public/assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="../public/assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        
        <div id="page-container" class="main-content-boxed">
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('../public/assets/img/photos/photo34@2x.jpg');">
                    <div class="row mx-0 bg-earth-op">
                        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                            <div class="p-30 invisible" data-toggle="appear">
                                <p class="font-size-h3 font-w600 text-white mb-5">
                                    ZENSITEC SRL.
                                </p>
                                <p class="font-size-h5 text-white">
                                    <i class="fa fa-angles-right"></i> www.zensitec.com.ar
                                </p>
                                <p class="font-italic text-white-op">
                                    Copyright &copy; <span class="js-year-copy">2017</span>
                                </p>
                            </div>
                        </div>
                        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white">
                            <div class="content content-full">
                                <!-- Header -->
                                <div class="px-30 py-10">
                                    <a class="link-effect font-w700" href="index.html">
                                        <i class="si si-fire"></i>
                                        <span class="font-size-xl text-primary-dark">code</span><span class="font-size-xl">base</span>
                                    </a>
                                    <h1 class="h3 font-w700 mt-30 mb-10">Crear Cuenta</h1>
                                    <h2 class="h5 font-w400 text-muted mb-0">Por favor ingreses los datos</h2>
                                </div>
                                <!-- END Header -->

                                <!-- Sign Up Form -->
                                <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.js) -->
                                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation //<div class="js-validation-signup px-30" action="be_pages_auth_all.html" method="post">-->
                                <div class="px-30">
                                    <form method="post" id="usuario_form">
                                        <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="form-material floating">
                                                        <input type="text" class="form-control" id="usu_nom" name="usu_nom" required>
                                                        <label for="usu_nom">Nombre</label>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="form-material floating">
                                                    <input type="text" class="form-control" id="usu_ape" name="usu_ape" required>
                                                    <label for="usu_ape">Apellido</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="form-material floating">
                                                    <input type="email" class="form-control" id="usu_correo" name="usu_correo" required>
                                                    <label for="usu_correo">Correo Electronico</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="form-material floating">
                                                    <input type="password" class="form-control" id="usu_pass1" name="usu_pass1" required>
                                                    <label for="usu_pass1">Contraseña</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="form-material floating">
                                                    <input type="password" class="form-control" id="usu_pass2" name="usu_pass2" required>
                                                    <label for="usu_pass2">Confirmar Contraseña</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="action" value="add" id="btnguardar" class="btn btn-sm btn-hero btn-alt-success">
                                                <i class="fa fa-plus mr-10"></i> Crear Cuenta
                                            </button>
                                            <div class="mt-30">
                                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="../view">
                                                    <i class="fa fa-user text-muted mr-5"></i> Acceso
                                                </a>
                                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="../RecuperarContrasena/">
                                                    <i class="fa fa-warning mr-5"></i> Olvide mi Contraseña
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Sign Up Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="../public/assets/js/core/jquery.min.js"></script>
        <script src="../public/assets/js/core/popper.min.js"></script>
        <script src="../public/assets/js/core/bootstrap.min.js"></script>
        <script src="../public/assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="../public/assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="../public/assets/js/core/jquery.appear.min.js"></script>
        <script src="../public/assets/js/core/jquery.countTo.min.js"></script>
        <script src="../public/assets/js/core/js.cookie.min.js"></script>
        <script src="../public/assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="../public/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="../public/assets/js/pages/op_auth_signup.js"></script>
        <!--File Registrarse.js-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script type="text/javascript" src="registrarse.js"></script>

    </body>
</html>