<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Nuevo Registro | Mesa de Entrada &amp; UI Framework</title>

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
        <link rel="shortcut icon" href="../../public/assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="../../public/assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../../public/assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
         <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="../../public/assets/js/plugins/datatables/dataTables.bootstrap4.min.css">
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="../../public/assets/css/codebase.min.css">

        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->

        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed sidebar-inverse">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Overlay Scroll Container -->
                <div id="side-overlay-scroll">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow">
                        <div class="content-header-section align-parent">
                            <!-- Close Side Overlay -->
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Side Overlay -->

                            <!-- User Info -->
                            <div class="content-header-item">
                                <a class="img-link mr-5" href="be_pages_generic_profile.html">
                                    <img class="img-avatar img-avatar32" src="../../public/assets/img/avatars/avatar15.jpg" alt="">
                                </a>
                                <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
                            </div>
                            <!-- END User Info -->
                        </div>
                    </div>
                    <!-- END Side Header -->


                </div>
                <!-- END Side Overlay Scroll Container -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->

            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="content-header content-header-fullrow px-15">
                            <!-- Mini Mode -->
                            <div class="content-header-section sidebar-mini-visible-b">
                                <!-- Logo -->
                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                                </span>
                                <!-- END Logo -->
                            </div>
                            <!-- END Mini Mode -->

                            <!-- Normal Mode -->
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <!-- Close Sidebar, Visible only on mobile screens -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <!-- END Close Sidebar -->

                                <!-- Logo -->
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="index.html">
                                        <!--<i class="si si-fire text-primary"></i>-->
                                        <span class="font-size-xl text-dual-primary-dark">Zensitec SRL</span>
                                    </a>
                                </div>
                                <!-- END Logo -->
                            </div>
                            <!-- END Normal Mode -->
                        </div>
                        <!-- END Side Header -->

                        <!-- Side User -->
                        <div class="content-side content-side-full content-side-user px-10 align-parent">
                            <!-- Visible only in mini mode -->
                            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                                <img class="img-avatar img-avatar32" src="../../public/assets/img/avatars/avatar15.jpg" alt="">
                            </div>
                            <!-- END Visible only in mini mode -->

                            <!-- Visible only in normal mode -->
                            <div class="sidebar-mini-hidden-b text-center">
                                <a class="img-link" href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="../../public/assets/img/avatars/avatar15.jpg" alt="">
                                </a>
                                <ul class="list-inline mt-10">
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html"><?php echo $_SESSION["usu_nom"] ." ". $_SESSION["usu_ape"]?></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                        <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                            <i class="si si-drop"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark" href="../Logout/logout.php">
                                            <i class="si si-logout"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Visible only in normal mode -->
                        </div>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <div class="content-side content-side-full">
                            <ul class="nav-main">
                                <li>
                                   <a href="../NuevoRegistro"><i class="si si-cup"></i><span class="sidebar-mini-hide">Nuevo Registro</span></a>
                                </li>
                                <li>
                                    <a href="../ConsultarStatus"><i class="si si-compass"></i><span class="sidebar-mini-hide">Consultar Estatus</span></a>
                                </li>

                            </ul>
                        </div>
                        <!-- END Side Navigation -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Color Themes (used just for demonstration) -->
                        <!-- Themes functionality initialized in Codebase() -> uiHandleTheme() -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-paint-brush"></i>
                            </button>
                            <div class="dropdown-menu min-width-150" aria-labelledby="page-header-themes-dropdown">
                                <h6 class="dropdown-header text-center">Color Themes</h6>
                                <div class="row no-gutters text-center mb-5">
                                    <div class="col-4 mb-5">
                                        <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-elegance" data-toggle="theme" data-theme="../../public/assets/css/themes/elegance.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-pulse" data-toggle="theme" data-theme="../../public/assets/css/themes/pulse.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-flat" data-toggle="theme" data-theme="../../public/assets/css/themes/flat.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-corporate" data-toggle="theme" data-theme="../../public/assets/css/themes/corporate.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-earth" data-toggle="theme" data-theme="../../public/assets/css/themes/earth.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_toggle">Sidebar Style</button>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="be_ui_color_themes.html">
                                    <i class="fa fa-paint-brush"></i> All Color Themes
                                </a>
                            </div>
                        </div>
                        <!-- END Color Themes -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <input type="hidden" id="useridx" class="form-control" value=<?php echo $_SESSION["usu_id"]?>><!-- ID del Usuario useridx-->
                       
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $_SESSION["usu_nom"] ." ". $_SESSION["usu_ape"]?><i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item" href="be_pages_generic_profile.html">
                                    <i class="si si-user mr-5"></i> Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../Logout/logout.php">
                                    <i class="si si-logout mr-5"></i> Cerrar Sesion
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->

            <main id="main-container">
                <div class="content">

                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Nuevo Registro | <small>Mesa de Entrada</small></h3>
                           
                        </div>
                        <div class="block-content block-content-full">
                            <div class="form-group row">
                                <label class="col-12" for="reg_asun">Asunto</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="reg_asun" name="reg_asun" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="reg_desc">Descripción</label>
                                <div class="col-12">
                                    <textarea class="form-control" id="reg_desc" name="reg_desc" rows="6" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="block-content block-content-sm block-content-full bg-body-light">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-alt-primary" id="btnadd">
                                            Adjuntar Documentos <i class="fa fa-share-alt mr-5"></i> 
                                        </button>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button type="button" class="btn btn-alt-primary" id="btnguardar">
                                            Guardar <i class="fa fa-save ml-5"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Data Table-->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Listado de Documentos | <small>Mesa de Entrada</small></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <table id="detalle_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center">Observación</th>
                                        <th>Archivo</th>
                                        <th class="text-center" style="width: 15%;">Accion</th>
                                    </tr>
                                </thead>
                                <tbody><!--Contenido-->
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
   
            <!-- END Main Container -->
             <?php require_once("modalarchivo.php");?>

            <!-- Footer -->
             <!-- Footer -->
             <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Codebase 1.3</a> &copy; <span class="js-year-copy">2017</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="../../public/assets/js/core/jquery.min.js"></script>
        <script src="../../public/assets/js/core/popper.min.js"></script>
        <script src="../../public/assets/js/core/bootstrap.min.js"></script>
        <script src="../../public/assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="../../public/assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="../../public/assets/js/core/jquery.appear.min.js"></script>
        <script src="../../public/assets/js/core/jquery.countTo.min.js"></script>
        <script src="../../public/assets/js/core/js.cookie.min.js"></script>
        <script src="../../public/assets/js/codebase.js"></script>
        <!-- Page JS Plugins -->
        <script src="../../public/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../public/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page JS Code -->
        <script src="../../public/assets/js/pages/be_tables_datatables.js"></script>
        <!--File Registrarse.js-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script type="text/javascript" src="nuevoregistro.js"></script>
    </body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>