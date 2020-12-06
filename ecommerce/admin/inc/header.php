<?php 
// Confirm Session To Enter Other Pages
include 'session.php';
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/multikart/back-end/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 14:10:42 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="./images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="./images/dashboard/favicon.png" type="image/x-icon">
    <title>Multikart - Premium Admin Template</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../css/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../css/flag-icon.css">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../css/icofont.css">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="../css/prism.css">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="../css/chartist.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>

<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row">
            <div class="main-header-left d-lg-none">
                <div class="logo-wrapper"><a href="index-2.php"><img class="blur-up lazyloaded" src="./images/dashboard/multikart-logo.png" alt=""></a></div>
            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search.."><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                            </div>
                        </form>
                    </li>
                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize-2"></i></a></li>
                    <li class="onhover-dropdown"><a class="txt-dark" href="#">
                        <h6>EN</h6></a>
                        <ul class="language-dropdown onhover-show-div p-20">
                            <li><a href="#" data-lng="en"><i class="flag-icon flag-icon-is"></i> English</a></li>
                            <li><a href="#" data-lng="es"><i class="flag-icon flag-icon-um"></i> Spanish</a></li>
                            <li><a href="#" data-lng="pt"><i class="flag-icon flag-icon-uy"></i> Portuguese</a></li>
                            <li><a href="#" data-lng="fr"><i class="flag-icon flag-icon-nz"></i> French</a></li>
                        </ul>
                    </li>
                    <li class="onhover-dropdown"><i data-feather="bell"></i><span class="badge badge-pill badge-primary pull-right notification-badge">3</span><span class="dot"></span>
                        <ul class="notification-dropdown onhover-show-div p-0">
                            <li>Notification <span class="badge badge-pill badge-primary pull-right">3</span></li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0"><span><i class="shopping-color" data-feather="shopping-bag"></i></span>Your order ready for Ship..!</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0 txt-success"><span><i class="download-color font-success" data-feather="download"></i></span>Download Complete</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0 txt-danger"><span><i class="alert-color font-danger" data-feather="alert-circle"></i></span>250 MB trash files</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="txt-dark"><a href="#">All</a> notification</li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="right_side_toggle" data-feather="message-square"></i><span class="dot"></span></a></li>
                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="./images/dashboard/man.png" alt="header-user">
                            <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <li><a href="#"><i data-feather="user"></i>Edit Profile</a></li>
                            <li><a href="#"><i data-feather="mail"></i>Inbox</a></li>
                            <li><a href="#"><i data-feather="lock"></i>Lock Screen</a></li>
                            <li><a href="#"><i data-feather="settings"></i>Settings</a></li>
                            <li><a href="inc/logout.php"><i data-feather="log-out"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="index.php"><img class="blur-up lazyloaded" src="./images/dashboard/multikart-logo.png" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="./images/dashboard/man.png" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">JOHN</h6>
                    <p>general manager.</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="index.php"><i data-feather="home"></i><span>Dashboard</span></a></li>

                    <li><a class="sidebar-header" href="#"><i data-feather="user-plus"></i><span>Admins</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="../admin/admin_list.php">Admins List</a></li>
                            <li><a href="../admin/create_admin.php">Create Admin</a></li>
                        </ul>
                    </li>

                    <li><a class="sidebar-header" href="#"><i data-feather="user-plus"></i><span>Users</span></a>

                        <ul class="sidebar-submenu">
                            <li><a href="user-list.php">User List</a></li>
                            <li><a href="create-user.php">Create User</a></li>
                        </ul>
                    </li>

                    <li><a class="sidebar-header" href="contact_us.php"><i data-feather="archive"></i><span>Messages</span></a>
                    </li>
                       
                    <li><a class="sidebar-header" href="#"><i data-feather="tag"></i><span>Category</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="manage_category.php">Category List</a></li>
                            <li><a href="category.php">Create Category</a></li>
                        </ul>
                    </li>

                    
                    <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Product</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="admin_prudact_list.php">Product List</a></li>
                            <li><a href="admin_create_product.php">Create Product</a></li>
                        </ul>
                    </li>

                    <li><a class="sidebar-header" href="#"><i data-feather="clipboard"></i><span>Orders</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="order.php">Orders List</a></li>
                          <!--  <li><a href="page-create.php">Create Orders</a></li> -->
                        </ul>
                    </li>

                   
                    

                   

                   




                    <!-- <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="#">
                                    <span>Physical</span> 
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="category.php">Category</a></li>
                                    <li><a href="category-sub.php">Sub Category</a></li>
                                    <li><a href="product-list.php">Product List</a></li>
                                    <li><a href="product-detail.php">Product Detail</a></li>
                                    <li><a href="add-product.php">Add Product</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Digital</span> 
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="category-digital.php">Category</a></li>
                                    <li><a href="category-digitalsub.php">Sub Category</a></li>
                                    <li><a href="product-listdigital.php">Product List</a></li>
                                    <li><a href="add-digital-product.php">Add Product</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li><a class="sidebar-header" href="#"><i data-feather="dollar-sign"></i><span>Sales</span></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="order.php">Orders</a></li>
                            <li><a href="transactions.php">Transactions</a></li>
                        </ul>
                    </li> -->
                    <!-- <li><a class="sidebar-header" href="#"><i data-feather="tag"></i><span>Coupons</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="coupon-list.php">List Coupons</a></li>
                            <li><a href="coupon-create.php">Create Coupons </a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="clipboard"></i><span>Pages</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="pages-list.php">List Page</a></li>
                            <li><a href="page-create.php">Create Page</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="media.php"><i data-feather="camera"></i><span>Media</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="align-left"></i><span>Menus</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="menu-list.php">Menu Lists</a></li>
                            <li><a href="create-menu.php"></i>Create Menu</a></li>
                        </ul>
                    </li>

                    
                   

                    <li><a class="sidebar-header" href="#"><i data-feather="users"></i><span>Vendors</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="list-vendor.php">Vendor List</a></li>
                            <li><a href="create-vendors.php">Create Vendor</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="chrome"></i><span>Localization</span></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="translations.php">Translations</a></li>
                            <li><a href="currency-rates.php">Currency Rates</a></li>
                            <li><a href="taxes.php">Taxes</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="reports.php"><i data-feather="bar-chart"></i><span>Reports</span></a></li>
                    <li><a class="sidebar-header" href="contact_us.php"><i data-feather="bar-chart"></i><span>Masseges</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="settings" ></i><span>Settings</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="profile.php">Profile</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="invoice.php"><i data-feather="archive"></i><span>Invoice</span></a>
                    </li> -->
                    <li><a class="sidebar-header" href="login.php"><i data-feather="log-in"></i><span>Login</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <!-- Right sidebar Start-->
        <div class="right-sidebar" id="right_side_bar">
            <div>
                <div class="container p-0">
                    <div class="modal-header p-l-20 p-r-20">
                        <div class="col-sm-8 p-0">
                            <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
                        </div>
                        <div class="col-sm-4 text-right p-0"><i class="mr-2" data-feather="settings"></i></div>
                    </div>
                </div>
                <div class="friend-list-search mt-0">
                    <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
                </div>
                <div class="p-l-30 p-r-30">
                    <div class="chat-box">
                        <div class="people-list friend-list">
                            <ul class="list">
                                <li class="clearfix"><img class="rounded-circle user-image" src="./images/dashboard/user.png" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Vincent Porter</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="./images/dashboard/user1.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Ain Chavez</div>
                                        <div class="status"> 28 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="./images/dashboard/user2.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Kori Thomas</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="./images/dashboard/user3.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Erica Hughes</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="./images/dashboard/man.png" alt="">
                                    <div class="status-circle offline"></div>
                                    <div class="about">
                                        <div class="name">Ginger Johnston</div>
                                        <div class="status"> 2 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="./images/dashboard/user5.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Prasanth Anand</div>
                                        <div class="status"> 2 hour ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="./images/dashboard/designer.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Hileri Jecno</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right sidebar Ends-->