<?php 
session_start();
if (!$_SESSION['admin']) {
    header('Location: login.php');
}
require_once "db.php";
require_once "adf.php";

$id = $_GET['id'];
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Caffee | Edit menu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.png">

        <!-- App css -->

        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- icons -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body class="loading" data-layout-color="light"  data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>
<?php
    if ($_SESSION['msg']) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
?>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                   
    
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="../index.html" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="../assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="../assets/images/logo-light.png" alt="" height="16">
                            </span>
                        </a>
                        <a href="../index.html" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="../assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="../assets/images/logo-dark.png" alt="" height="16">
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                        <li>
                            <button class="button-menu-mobile disable-btn waves-effect">
                                <i class="fe-menu"></i>
                            </button>
                        </li>
    
                        <li>
                            <h4 class="page-title-main">Добро пожаловать!</h4>
                        </li>
            
                    </ul>

                    <div class="clearfix"></div> 
               
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                     <!-- User box -->
                    <div class="user-box text-center">

                        <img src="../assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
                            <div class="dropdown">
                                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"  aria-expanded="false"><?php echo get_data_db($connect, "admin", "name", "id", 1); ?></a>
                            </div>

                        <p class="text-muted left-user-info"><?php echo get_data_db($connect, "admin", "lname", "id", 1); ?></p>

                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">
                        

                            <li class="menu-title mt-2" style="color: gold; font-size: 1em;">Навигация</li>

                         

                            <li>
                                <a href="../table-menu.php" style="border: solid 3px gold;">
                                    <span> Таблица меню </span>
                                </a>
                            </li>

                            <li>
                                <a href="../index.php">
                                    <span> Таблица категории </span>
                                </a>
                            </li>

                             <li>
                                <a href="../add-cat.php">
                                    <span> Добавить категорию </span>
                                </a>
                            </li>

                             <li>
                                <a href="../add-menu.php">
                                    <span> Добавить в меню </span>
                                </a>
                            </li>

                            <li>
                                <a href="#sidebarAuth" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    <span> Клиенты </span>
                                </a>
                                <div class="collapse" id="sidebarAuth" style="">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="../followers.php">Подписчики</a>
                                        </li>
                                        <li>
                                            <a href="../res.php">Брон мест</a>
                                        </li>
                                        <li>
                                            <a href="../msg.php">Сообщение</a>
                                        </li>
                                
                                    </ul>
                                </div>
                            </li>

                             <li>
                                <a href="../settings.php">
                                    <span> Настройки </span>
                                </a>
                            </li>

                            <li>
                                <a href="out.php" style="background-color: gold;">
                                    <span> Выйти </span>
                                </a>
                            </li>

                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
            
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                                 <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Редактировать меню</h4>
                                        <p class="sub-header">
                                            После редактирования информация на сайте автоматически обновляется!
                                        </p>
                                        <div class="row">

                                            
                                            <div class="col-lg-6">
                                                <h4 class="header-title mb-3">Заполните формы</h4>
                                                <form method="post" action="sys.php">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Говяжий донер..." name="form1" value="<?php echo get_data_db($connect, "list", "name", "id", $id); ?>">
                                                    <label for="floatingInput">Название</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="floatingInput" placeholder="500тг.." name="form2" value="<?php echo get_data_db($connect, "list", "price", "id", $id); ?>">
                                                    <label for="floatingInput">Цена</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <textarea class="form-control" placeholder="Жаренное мясо, базилик, томат..." id="floatingTextarea2"
                                                        style="height: 100px" name="form3"><?php echo get_data_db($connect, "list", "ing", "id", $id); ?></textarea>
                                                    <label for="floatingTextarea2">Описание</label>
                                                </div>
                                           
                                                <input type="text" name="mod" hidden readonly value="edit_menu">
                                                <input type="text" name="id" hidden readonly value="<?php echo $id ?>">
                                                <button class="btn btn-warning waves-effect waves-light">Сохранить</button>
                                                </form>

                                            </div>
<!-- 
                                            <div class="col-lg-6">
                                                <h4 class="header-title mt-lg-0 my-3">Selects</h4>

                                                <div class="form-floating mb-3">
                                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                    <label for="floatingSelect">Works with selects</label>
                                                </div>
                                                
                                                <div class="row g-2">
                                                    <div class="col-md">
                                                        <div class="form-floating">
                                                            <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com"
                                                                value="mdo@example.com">
                                                            <label for="floatingInputGrid">Email address</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-floating">
                                                            <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                                                                <option selected>Open this select menu</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <label for="floatingSelectGrid">Works with selects</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div><!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; CoffeeM designed by <a href="">J.CODE.S</a> 
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor -->
        <script src="../assets/libs/jquery/jquery.min.js"></script>
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/libs/node-waves/waves.min.js"></script>
        <script src="../assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="../assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="../assets/libs/feather-icons/feather.min.js"></script>

        <!-- Table Editable plugin-->
        <script src="../assets/libs/jquery-tabledit/jquery.tabledit.min.js"></script>

        <!-- Table editable init-->
        <script src="../assets/js/pages/tabledit.init.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.min.js"></script>
        
    </body>
</html>