<!DOCTYPE html>
<html>

<head>
    <!-- Meta-Information -->
    <title>Fuzen Admin Panel</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="css/icons.min.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="css/color-schemes/color.css" type="text/css" title="color3">
    <link rel="alternate stylesheet" href="css/color-schemes/color1.css" title="color1">
    <link rel="alternate stylesheet" href="css/color-schemes/color2.css" title="color2">
    <link rel="alternate stylesheet" href="css/color-schemes/color4.css" title="color4">
    <link rel="alternate stylesheet" href="css/color-schemes/color5.css" title="color5">
</head>

<body class="expand-data panel-data">
    <div class="topbar">
        <div class="logo">
            <h1>
                <a href="#" title="">
                    <img src="images/logo1.png" alt="" />
                </a>
            </h1>
        </div>
        <div class="topbar-data">
            <div class="usr-act">
              @foreach(Session::get('datos') as $data)
                <i>Hola, <label id="con_regus">{{$data['NombreCompleto']}}</label></i>
                @endforeach
                <span>
                    <img src="images/resource/topbar-usr1.jpg" alt="" />
                    <i class="sts away"></i>
                </span>
                <div class="usr-inf">
                    <div class="usr-thmb brd-rd50">
                        <img class="brd-rd50" src="images/resource/usr.jpg" alt="" />
                        <i class="sts away"></i>
                        <a class="green-bg brd-rd5" href="#" title="">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </div>
                    <h5>
                        <a href="#" title="">John Smith</a>
                    </h5>
                    <span>Co Worker</span>
                    <i>076 9477 4896</i>
                    <div class="act-pst-lk-stm">
                        <a class="brd-rd5 green-bg-hover" href="#" title="">
                            <i class="ion-heart"></i> Love</a>
                        <a class="brd-rd5 blue-bg-hover" href="#" title="">
                            <i class="ion-forward"></i> Reply</a>
                    </div>
                    <div class="usr-ft">
                        <a class="btn-danger" href="#" title="">
                            <i class="fa fa-sign-out"></i> Logout</a>
                    </div>
                </div>
            </div>
            <form class="topbar-search">
                <button type="submit">
                    <i class="ion-ios-search-strong"></i>
                </button>
                <input type="text" placeholder="Type and Hit Enter" />
            </form>
            <ul class="tobar-links">
                <li>
                    <a href="#" title="">
                        <i class="ion-ios-bell"></i>
                        <span class="blue-bg">02</span>
                    </a>
                    <div class="nti-drp-wrp">
                        <h5 class="blue-bg">
                            <span>You Have</span> 7 Notifications</h5>
                        <div class="nti-lst">
                            <div class="nti-usr">
                                <span class="brd-rd50 rd-bg">
                                    <i class="fa fa-cog"></i>
                                </span>
                                <div class="nti-usr-inr">
                                    <h5>
                                        <a href="#" title="">Sadi Orlaf</a>
                                    </h5>
                                    <span class="pst-tm">Just Now</span>
                                    <i>Privacy settings changed</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <span class="brd-rd50 drkblu-bg">
                                    <i class="ion-ios-personadd"></i>
                                </span>
                                <div class="nti-usr-inr">
                                    <h5>
                                        <a href="#" title="">Katti Smith</a>
                                    </h5>
                                    <span class="pst-tm">Just Now</span>
                                    <i>Mike has added you as friend</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <span class="brd-rd50 orng-bg">
                                    <i class="ion-thumbsup"></i>
                                </span>
                                <div class="nti-usr-inr">
                                    <h5>
                                        <a href="#" title="">Willimes Domson</a>
                                    </h5>
                                    <span class="pst-tm">Just Now</span>
                                    <i>like your timeline photo</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <span class="brd-rd50 grn-bg">
                                    <i class="ion-information-circled"></i>
                                </span>
                                <div class="nti-usr-inr">
                                    <h5>
                                        <a href="#" title="">Holli Doe</a>
                                    </h5>
                                    <span class="pst-tm">Just Now</span>
                                    <i>Curabitur id eros limes suscipit blandit.</i>
                                </div>
                            </div>
                        </div>
                        <div class="nt-ftr">
                            <a href="#" title="">View All</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" title="">
                        <i class="ion-android-drafts"></i>
                        <span class="green-bg">10</span>
                    </a>
                    <div class="nti-drp-wrp">
                        <h5 class="green-bg">
                            <span>You Have</span> 7 New Messages</h5>
                        <div class="nti-lst">
                            <div class="nti-usr">
                                <img class="brd-rd50" src="images/resource/acti-thmb2.jpg" alt="" />
                                <div class="nti-usr-inr">
                                    <h5>
                                        <a href="#" title="">Sadi Orlaf</a>
                                    </h5>
                                    <span class="pst-tm">Just Now</span>
                                    <i>Privacy settings changed</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <img class="brd-rd50" src="images/resource/acti-thmb1.jpg" alt="" />
                                <div class="nti-usr-inr">
                                    <h5>
                                        <a href="#" title="">Katti Smith</a>
                                    </h5>
                                    <span class="pst-tm">Just Now</span>
                                    <i>Mike has added you as friend</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <img class="brd-rd50" src="images/resource/acti-thmb3.jpg" alt="" />
                                <div class="nti-usr-inr">
                                    <h5>
                                        <a href="#" title="">Willimes Domson</a>
                                    </h5>
                                    <span class="pst-tm">Just Now</span>
                                    <i>like your timeline photo</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <img class="brd-rd50" src="images/resource/acti-thmb4.jpg" alt="" />
                                <div class="nti-usr-inr">
                                    <h5>
                                        <a href="#" title="">Holli Doe</a>
                                    </h5>
                                    <span class="pst-tm">Just Now</span>
                                    <i>Curabitur id eros limes suscipit blandit.</i>
                                </div>
                            </div>
                        </div>
                        <div class="nt-ftr">
                            <a href="#" title="">View All</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" title="">
                        <i class="ion-android-settings"></i>
                    </a>
                    <div class="set-lst">
                        <div class="set-bd">
                            <h4>General Settings</h4>
                            <ul class="sett-lst">
                                <li>
                                    <span class="chck-bx">
                                        <input id="set1" type="checkbox">
                                        <label for="set1">Report Panel Usage</label>
                                    </span>
                                    <i>General Settings information</i>
                                </li>
                                <li>
                                    <span class="chck-bx">
                                        <input id="set2" type="checkbox">
                                        <label for="set2">Mail Redirect</label>
                                    </span>
                                    <i>General Settings information</i>
                                </li>
                                <li>
                                    <span class="chck-bx">
                                        <input id="set3" type="checkbox">
                                        <label for="set3">Expose Author Name</label>
                                    </span>
                                    <i>General Settings information</i>
                                </li>
                            </ul>
                            <h4>Chat Settings</h4>
                            <ul>
                                <li>
                                    <span class="chck-bx">
                                        <input id="set4" type="checkbox">
                                        <label for="set4">Show Me As Online</label>
                                    </span>
                                </li>
                                <li>
                                    <span class="chck-bx">
                                        <input id="set5" type="checkbox">
                                        <label for="set5">Turn Off Notifications</label>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="set-ft">
                            <a class="btn-danger" href="#" title="">
                                <i class="fa fa-trash"></i> Delete Chat History</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" title="">
                        <i class="ion-android-contacts"></i>
                    </a>
                    <div class="cnt-lst">
                        <ul>
                            <li>
                                <div class="usr">
                                    <img class="brd-rd50" src="images/resource/acti-thmb1.jpg" alt="" />
                                    <div class="usr-innr">
                                        <h5>
                                            <a href="#" title="">Smith Doe</a>
                                        </h5>
                                        <span>Co Worker</span>
                                        <a class="green-bg brd-rd5" href="#" title="">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="usr">
                                    <img class="brd-rd50" src="images/resource/acti-thmb2.jpg" alt="" />
                                    <div class="usr-innr">
                                        <h5>
                                            <a href="#" title="">Katti Smith</a>
                                        </h5>
                                        <span>Graphic Designer</span>
                                        <a class="green-bg brd-rd5" href="#" title="">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="usr">
                                    <img class="brd-rd50" src="images/resource/acti-thmb3.jpg" alt="" />
                                    <div class="usr-innr">
                                        <h5>
                                            <a href="#" title="">Willimes Domson</a>
                                        </h5>
                                        <span>Family Adviser</span>
                                        <a class="green-bg brd-rd5" href="#" title="">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="usr">
                                    <img class="brd-rd50" src="images/resource/acti-thmb4.jpg" alt="" />
                                    <div class="usr-innr">
                                        <h5>
                                            <a href="#" title="">Holli Doe</a>
                                        </h5>
                                        <span>Company CEO</span>
                                        <a class="green-bg brd-rd5" href="#" title="">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="topbar-bottom-colors">
            <i style="background-color: #2c3e50;"></i>
            <i style="background-color: #9857b2;"></i>
            <i style="background-color: #2c81ba;"></i>
            <i style="background-color: #5dc12e;"></i>
            <i style="background-color: #feb506;"></i>
            <i style="background-color: #e17c21;"></i>
            <i style="background-color: #bc382a;"></i>
        </div>
    </div>
    <!-- Topbar -->

    <header class="side-header expand-header">
        <div class="nav-head">Main Navigation
            <span class="menu-trigger">
                <i class="ion-android-menu"></i>
            </span>
        </div>
        <nav class="custom-scrollbar">
            <ul class="drp-sec">
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-home"></i>
                        <span>Viajes</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="/Admin-RC/public//GoTourU" title="">Publicación</a>
                        </li>
                        <li>
                            <a href="dashboard2.html" title="">Aprobación</a>
                        </li>
                        <li>
                            <a href="dashboard3.html" title="">Mantenimientos</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="drp-sec">
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-briefcase"></i>
                        <span>Administración</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="pricing-plan.html" title="">Reservaciones</a>
                        </li>
                        <li>
                            <a href="grids.html" title="">Contrataciones</a>
                        </li>

                    </ul>
                </li>
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-fireball"></i>
                        <span>Tienda</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="font-awesome-icons.html" title="">Publicar</a>
                        </li>
                        <li>
                            <a href="themify-icons.html" title="">Mantenimientos</a>
                        </li>
                    </ul>
                </li>
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-images"></i>
                        <span>Estádistica</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="gallery1.html" title="">Viajes por Calificación</a>
                        </li>
                        <li>
                            <a href="gallery2.html" title="">Viajes más Visitados</a>
                        </li>
                        <li>
                            <a href="gallery3.html" title="">Más Visitados X Temporada</a>
                        </li>
                    </ul>
                </li>
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-android-settings"></i>
                        <span>Form Stuff</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="form-layouts.html" title="">Form Layouts</a>
                        </li>
                        <li>
                            <a href="form-wizard.html" title="">Form Wizard</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="tables.html" title="">
                        <i class="ion-crop"></i> Tables</a>
                </li>
                <li>
                    <a href="charts.html" title="">
                        <i class="ion-podium"></i> Charts</a>
                </li>
            </ul>
            <h4>Pages</h4>
            <ul class="drp-sec">
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-android-clipboard"></i>
                        <span>General</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="404.html" title="">404</a>
                        </li>
                        <li>
                            <a href="505.html" title="">505</a>
                        </li>
                        <li>
                            <a href="contact.html" title="">Contact Us</a>
                        </li>
                        <li>
                            <a href="coming-soon.html" title="">Coming Soon</a>
                        </li>
                        <li>
                            <a href="under-maintenance.html" title="">User Maintenance</a>
                        </li>
                        <li>
                            <a href="login.html" title="">Login</a>
                        </li>
                        <li>
                            <a href="register.html" title="">Register</a>
                        </li>
                        <li>
                            <a href="search-result.html" title="">Search Result</a>
                        </li>
                        <li>
                            <a href="faq.html" title="">Faq's</a>
                        </li>
                        <li>
                            <a href="services.html" title="">Services</a>
                        </li>
                        <li>
                            <a href="invoice.html" title="">Invoice Page</a>
                        </li>
                        <li>
                            <a href="typography.html" title="">Typography</a>
                        </li>
                        <li>
                            <a href="live-chat.html" title="">Live Chat</a>
                        </li>
                        <li>
                            <a href="timeline.html" title="">Timeline</a>
                        </li>
                        <li>
                            <a href="cropbox.html" title="">Cropbox</a>
                        </li>
                        <li>
                            <a href="calculator.html" title="">Calculator</a>
                        </li>
                    </ul>
                </li>
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-android-contact"></i>
                        <span>User</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="profile.html" title="">Profile Page</a>
                        </li>
                        <li>
                            <a href="profile-edit.html" title="">Profile Edit</a>
                        </li>
                    </ul>
                </li>
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-bag"></i>
                        <span>eCommerce</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="products.html" title="">Products</a>
                        </li>
                        <li>
                            <a href="product-details.html" title="">Product Details</a>
                        </li>
                        <li>
                            <a href="checkout.html" title="">Checkout</a>
                        </li>
                        <li>
                            <a href="order-received.html" title="">Order Received</a>
                        </li>
                    </ul>
                </li>
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-android-map"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="google-map.html" title="">Google Map</a>
                        </li>
                        <li>
                            <a href="vector-map.html" title="">Vector map</a>
                        </li>
                    </ul>
                </li>
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-email"></i>
                        <span>Email's</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="email-composer.html" title="">Email Compose</a>
                        </li>
                        <li>
                            <a href="inbox.html" title="">Inbox</a>
                        </li>
                        <li>
                            <a href="email.html" title="">Email</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!-- Side Header -->

    <div class="option-panel">
        <span class="panel-btn">
            <i class="fa ion-android-settings fa-spin"></i>
        </span>
        <div class="color-panel">
            <h4>Text Color</h4>
            <span class="color1" onclick="setActiveStyleSheet('color1'); return false;">
                <i></i>
            </span>
            <span class="color2" onclick="setActiveStyleSheet('color2'); return false;">
                <i></i>
            </span>
            <span class="color3" onclick="setActiveStyleSheet('color'); return false;">
                <i></i>
            </span>
            <span class="color4" onclick="setActiveStyleSheet('color4'); return false;">
                <i></i>
            </span>
            <span class="color5" onclick="setActiveStyleSheet('color5'); return false;">
                <i></i>
            </span>
        </div>
    </div>
    <!-- Options Panel -->
    <div class="pg-tp">
        <i class="ion-cube"></i>
        <div class="pr-tp-inr">
            <h4>Welcome to
                <strong>FUZEN</strong>
                <span></span> Panel</h4>
            <span>Admin Template for medium and large web applications with ery clean and aesthetic style.</span>
        </div>
    </div>
    <!-- Page Top -->

    <div class="panel-content">
        <div class="filter-items">
            <div class="row grid-wrap mrg20">
                <div class="col-md-4 grid-item col-sm-6 col-lg-3">
                    <div class="stat-box widget bg-clr1">
                        <div class="wdgt-opt">
                            <span class="wdgt-opt-btn">
                                <i class="ion-android-more-vertical"></i>
                            </span>
                            <div class="wdgt-opt-lst brd-rd5">
                                <a class="delt-wdgt" href="#" title="">Delete</a>
                                <a class="expnd-wdgt" href="#" title="">Expand</a>
                                <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                            </div>
                        </div>
                        <div class="wdgt-ldr">
                            <div class="ball-scale-multiple">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <i class="ion-arrow-graph-up-right"></i>
                        <div class="stat-box-innr">
                            <span>$
                                <i class="counter">1,206,90</i>
                            </span>
                            <h5>All Income</h5>
                        </div>
                        <span>
                            <i class="ion-ios-stopwatch"></i> Updated: 05:14pm</span>
                    </div>
                </div>
                <div class="col-md-4 grid-item col-sm-6 col-lg-3">
                    <div class="stat-box widget bg-clr2">
                        <div class="wdgt-opt">
                            <span class="wdgt-opt-btn">
                                <i class="ion-android-more-vertical"></i>
                            </span>
                            <div class="wdgt-opt-lst brd-rd5">
                                <a class="delt-wdgt" href="#" title="">Delete</a>
                                <a class="expnd-wdgt" href="#" title="">Expand</a>
                                <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                            </div>
                        </div>
                        <div class="wdgt-ldr">
                            <div class="ball-scale-multiple">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <i class="ion-android-desktop"></i>
                        <div class="stat-box-innr">
                            <span>
                                <i class="counter">975</i>k+</span>
                            <h5>Page Visits</h5>
                        </div>
                        <span>
                            <i class="ion-ios-stopwatch"></i> Updated: 05:14pm</span>
                    </div>
                </div>
                <div class="col-md-4 grid-item col-sm-6 col-lg-3">
                    <div class="stat-box widget bg-clr3">
                        <div class="wdgt-opt">
                            <span class="wdgt-opt-btn">
                                <i class="ion-android-more-vertical"></i>
                            </span>
                            <div class="wdgt-opt-lst brd-rd5">
                                <a class="delt-wdgt" href="#" title="">Delete</a>
                                <a class="expnd-wdgt" href="#" title="">Expand</a>
                                <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                            </div>
                        </div>
                        <div class="wdgt-ldr">
                            <div class="ball-scale-multiple">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <i class="ion-cube"></i>
                        <div class="stat-box-innr">
                            <span>
                                <i class="counter">690</i>
                            </span>
                            <h5>New Orders</h5>
                        </div>
                        <span>
                            <i class="ion-ios-stopwatch"></i> Updated: 05:14pm</span>
                    </div>
                </div>
                <div class="col-md-4 grid-item col-sm-6 col-lg-3">
                    <div class="stat-box widget bg-clr4">
                        <div class="wdgt-opt">
                            <span class="wdgt-opt-btn">
                                <i class="ion-android-more-vertical"></i>
                            </span>
                            <div class="wdgt-opt-lst brd-rd5">
                                <a class="delt-wdgt" href="#" title="">Delete</a>
                                <a class="expnd-wdgt" href="#" title="">Expand</a>
                                <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                            </div>
                        </div>
                        <div class="wdgt-ldr">
                            <div class="ball-scale-multiple">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <i class="ion-android-upload"></i>
                        <div class="stat-box-innr">
                            <span>$
                                <i class="counter">2,206</i>
                            </span>
                            <h5>Today Income</h5>
                        </div>
                        <span>
                            <i class="ion-ios-stopwatch"></i> Updated: 05:14pm</span>
                    </div>
                </div>
                <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                    <div class="traffic-src widget">
                        <div class="wdgt-opt">
                            <span class="wdgt-opt-btn">
                                <i class="ion-android-more-vertical"></i>
                            </span>
                            <div class="wdgt-opt-lst brd-rd5">
                                <a class="delt-wdgt" href="#" title="">Delete</a>
                                <a class="expnd-wdgt" href="#" title="">Expand</a>
                                <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                            </div>
                        </div>
                        <div class="wdgt-ldr">
                            <div class="ball-scale-multiple">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-lg-5">
                                <div class="trfc-cnt">
                                    <h4 class="widget-title">Traffic Source</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Ipsum
                                        is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="rat-itms">
                                    <div class="rat-itm">
                                        <div class="rat-itm-inf">
                                            <span>
                                                <i class="counter">170,20</i>
                                            </span>
                                            <i>Today</i>
                                        </div>
                                        <i class="ion-connection-bars blue-clr"></i>
                                    </div>
                                    <div class="rat-itm">
                                        <div class="rat-itm-inf">
                                            <span>
                                                <i class="counter">19.91</i>%</span>
                                            <i>Last Month</i>
                                        </div>
                                        <i class="ion-arrow-graph-down-right green-clr"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-lg-7">
                                <div class="traffic-chart-wrp">
                                    <div id="chrt1" style="height: 195px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-item col-sm-12 col-lg-6">
                    <div class="widget sales-summ pad50-40">
                        <div class="wdgt-opt">
                            <span class="wdgt-opt-btn">
                                <i class="ion-android-more-vertical"></i>
                            </span>
                            <div class="wdgt-opt-lst brd-rd5">
                                <a class="delt-wdgt" href="#" title="">Delete</a>
                                <a class="expnd-wdgt" href="#" title="">Expand</a>
                                <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                            </div>
                        </div>
                        <div class="wdgt-ldr">
                            <div class="ball-scale-multiple">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <h4 class="widget-title">Sales Summery</h4>
                        <div class="sales-charts">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#today">Today</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#week">Week</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#month">Month</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="today">
                                    <div id="chrt2" style="height: 270px;"></div>
                                </div>
                                <div class="tab-pane fade" id="week">
                                    <div id="chrt3" style="height: 270px;"></div>
                                </div>
                                <div class="tab-pane fade" id="month">
                                    <div id="chrt4" style="height: 270px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sales-stat">
                            <div class="sales-stat-itm">
                                <span style="color: #13aaf9;">
                                    <i class="counter">760</i>
                                </span>
                                <i>Total Sales</i>
                            </div>
                            <div class="sales-stat-itm">
                                <span style="color: #968cec;">$
                                    <i class="counter">4,219</i>
                                </span>
                                <i>Revenus</i>
                            </div>
                            <div class="sales-stat-itm">
                                <span style="color: #968cec;">$
                                    <i class="counter">1,247</i>
                                </span>
                                <i>Expenses</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-item col-sm-12 col-lg-6">
                    <div class="widget recently-activ-proj pad50-40">
                        <div class="wdgt-opt">
                            <span class="wdgt-opt-btn">
                                <i class="ion-android-more-vertical"></i>
                            </span>
                            <div class="wdgt-opt-lst brd-rd5">
                                <a class="delt-wdgt" href="#" title="">Delete</a>
                                <a class="expnd-wdgt" href="#" title="">Expand</a>
                                <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                            </div>
                        </div>
                        <div class="wdgt-ldr">
                            <div class="ball-scale-multiple">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <h4 class="widget-title">Recently Active Projects
                            <a class="add-proj brd-rd5" href="#" data-toggle="tooltip" title="Add Project">+</a>
                        </h4>
                        <div class="table-wrap">
                            <table class="table style1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Projects</th>
                                        <th>Completion</th>
                                        <th>Trend</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="blue-bg indx">01</span>
                                        </td>
                                        <td>
                                            <div class="prj-tl">
                                                <h4>Angular2 Migration</h4>
                                                <span>
                                                    <i class="ion-ios-stopwatch"></i> Created: 10 July</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="prcnt">80%</span>
                                        </td>
                                        <td>
                                            <i class="green-clr ion-arrow-graph-up-right"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="blue-bg indx">02</span>
                                        </td>
                                        <td>
                                            <div class="prj-tl">
                                                <h4>Totem app refactor</h4>
                                                <span>
                                                    <i class="ion-ios-stopwatch"></i> Created: 22 June</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="prcnt">29%</span>
                                        </td>
                                        <td>
                                            <i class="blue-clr ion-arrow-graph-down-right"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="blue-bg indx">03</span>
                                        </td>
                                        <td>
                                            <div class="prj-tl">
                                                <h4>ReactJS implement</h4>
                                                <span>
                                                    <i class="ion-ios-stopwatch"></i> Created: 15 June</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="prcnt">59%</span>
                                        </td>
                                        <td>
                                            <i class="green-clr ion-arrow-graph-up-right"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="blue-bg indx">04</span>
                                        </td>
                                        <td>
                                            <div class="prj-tl">
                                                <h4>Release Totem v2.3</h4>
                                                <span>
                                                    <i class="ion-ios-stopwatch"></i> Created: 09 June</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="prcnt">65%</span>
                                        </td>
                                        <td>
                                            <i class="green-clr ion-arrow-graph-up-right"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                    <div class="widget proj-order pad50-40">
                        <div class="wdgt-opt">
                            <span class="wdgt-opt-btn">
                                <i class="ion-android-more-vertical"></i>
                            </span>
                            <div class="wdgt-opt-lst brd-rd5">
                                <a class="delt-wdgt" href="#" title="">Delete</a>
                                <a class="expnd-wdgt" href="#" title="">Expand</a>
                                <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                            </div>
                        </div>
                        <div class="wdgt-ldr">
                            <div class="ball-scale-multiple">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <h4 class="widget-title">Projects Orders</h4>
                        <a class="add-proj brd-rd5" href="#" data-toggle="tooltip" title="Add Project">+</a>
                        <div class="slct-bx">
                            <i class="ion-android-funnel"> Sort By:</i>
                            <span>
                                <select>
                                    <option>Date</option>
                                    <option>Name</option>
                                    <option>Category</option>
                                    <option>Duration</option>
                                </select>
                            </span>
                        </div>
                        <div class="table-wrap">
                            <table class="table table-bordered style2">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Phone No</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="blue-bg indx">01</span>
                                        </td>
                                        <td>
                                            <span class="date">10 June 2017</span>
                                        </td>
                                        <td>
                                            <h4 class="name">Michael Baker</h4>
                                        </td>
                                        <td>
                                            <span class="ph#">076 9477 4896</span>
                                        </td>
                                        <td>
                                            <span class="addr">Some St. 77, LA</span>
                                        </td>
                                        <td>
                                            <div class="table-btns">
                                                <a href="#" title="" class="green-bg-hover">Accept</a>
                                                <a href="#" title="" class="blue-bg-hover">Reject</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="blue-bg indx">02</span>
                                        </td>
                                        <td>
                                            <span class="date">15 June 2017</span>
                                        </td>
                                        <td>
                                            <h4 class="name">Larisa Maskalyova</h4>
                                        </td>
                                        <td>
                                            <span class="ph#">0500 034548</span>
                                        </td>
                                        <td>
                                            <span class="addr">Another St. 456</span>
                                        </td>
                                        <td>
                                            <div class="table-btns">
                                                <a href="#" title="" class="green-bg-hover">Accept</a>
                                                <a href="#" title="" class="blue-bg-hover">Reject</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="blue-bg indx">03</span>
                                        </td>
                                        <td>
                                            <span class="date">19 June 2017</span>
                                        </td>
                                        <td>
                                            <h4 class="name">Natasha Kim</h4>
                                        </td>
                                        <td>
                                            <span class="ph#">(01315) 27698</span>
                                        </td>
                                        <td>
                                            <span class="addr">294-318 Duis Ave</span>
                                        </td>
                                        <td>
                                            <div class="table-btns">
                                                <a href="#" title="" class="green-bg-hover">Accept</a>
                                                <a href="#" title="" class="blue-bg-hover">Reject</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-item col-sm-12 col-lg-6">
                    <div class="widget chat-wdgt pad50-40">
                        <div class="wdgt-opt">
                            <span class="wdgt-opt-btn">
                                <i class="ion-android-more-vertical"></i>
                            </span>
                            <div class="wdgt-opt-lst brd-rd5">
                                <a class="delt-wdgt" href="#" title="">Delete</a>
                                <a class="expnd-wdgt" href="#" title="">Expand</a>
                                <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                            </div>
                        </div>
                        <div class="wdgt-ldr">
                            <div class="ball-scale-multiple">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <h4 class="widget-title blue-bg">Live Chat</h4>
                        <div class="caht-wrp">
                            <div class="chat-lst">
                                <div class="chat-msg yur-msg">
                                    <img class="brd-rd50" src="images/resource/acti-thmb1.jpg" alt="" />
                                    <div class="msg-inf2">
                                        <h5>John Doe</h5>
                                        <span class="msg-tm">
                                            <i class="ion-clock"></i> Today 2:10 pm</span>
                                        <p>Aenean massa. Cum sociis natoque penatibus et mag nis dis parturient montes, nascetur
                                            ridiculus mus. Do nec quam felis, ultricies nec.</p>
                                        <div class="snd-fl">
                                            <div class="fl-itm brd-rd5">
                                                <img class="brd-rd5" src="images/resource/fl-img1.png" alt="" />
                                                <span>report-2013-web-development</span>
                                            </div>
                                        </div>
                                        <div class="act-pst-lk-stm">
                                            <a href="#" title="" class="brd-rd5 green-bg-hover">Save</a>
                                            <a href="#" title="" class="brd-rd5 blue-bg-hover">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-msg frnd-msg">
                                    <img class="brd-rd50" src="images/resource/acti-thmb2.jpg" alt="" />
                                    <div class="msg-inf2">
                                        <h5>Kim Smith</h5>
                                        <span class="msg-tm">
                                            <i class="ion-clock"></i> Today 2:10 pm</span>
                                        <p>Aenean massa. Cum sociis natoque penatibus et mag nis dis parturient montes, nascetur
                                            ridiculus mus. Do nec quam felis, ultricies nec.</p>
                                    </div>
                                </div>
                            </div>
                            <form class="chat-frm">
                                <textarea class="brd-rd5" placeholder="Message"></textarea>
                                <button class="brd-rd5 blue-bg">Send Message</button>
                                <ul class="snd-opts">
                                    <li>
                                        <label class="fileContainer">
                                            <i class="ion-paperclip"></i>
                                            <input type="file" />
                                        </label>
                                    </li>
                                    <li>
                                        <label class="fileContainer">
                                            <i class="ion-android-camera"></i>
                                            <input type="file" />
                                        </label>
                                    </li>
                                    <li>
                                        <div class="snd-emjs brd-rd5">
                                            <a href="#" title="">
                                                <i class="ion-happy"></i>
                                            </a>
                                            <div class="emj-lst brd-rd5">
                                                <a href="#" title="">
                                                    <i class="ion-happy"></i>
                                                </a>
                                                <a href="#" title="">
                                                    <i class="ion-android-sad"></i>
                                                </a>
                                                <a href="#" title="">
                                                    <i class="ion-heart-broken"></i>
                                                </a>
                                                <a href="#" title="">
                                                    <i class="ion-icecream"></i>
                                                </a>
                                                <a href="#" title="">
                                                    <i class="ion-ios-americanfootball"></i>
                                                </a>
                                                <a href="#" title="">
                                                    <i class="ion-ios-baseball"></i>
                                                </a>
                                                <a href="#" title="">
                                                    <i class="ion-ios-bell"></i>
                                                </a>
                                                <a href="#" title="">
                                                    <i class="ion-ios-body"></i>
                                                </a>
                                                <a href="#" title="">
                                                    <i class="ion-ios-flame"></i>
                                                </a>
                                                <a href="#" title="">
                                                    <i class="ion-ios-flower"></i>
                                                </a>
                                                <a href="#" title="">
                                                    <i class="ion-ios-football"></i>
                                                </a>
                                                <a href="#" title="">
                                                    <i class="ion-ios-glasses"></i>
                                                </a>
                                                <a href="#" title="">
                                                    <i class="ion-ios-heart"></i>
                                                </a>
                                                <a href="#" title="">
                                                    <i class="ion-ios-lightbulb"></i>
                                                </a>
                                                <a href="#" title="">
                                                    <i class="ion-ios-location"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-item col-sm-12 col-lg-6">
                    <div class="widget pad50-40">
                        <div class="wdgt-opt">
                            <span class="wdgt-opt-btn">
                                <i class="ion-android-more-vertical"></i>
                            </span>
                            <div class="wdgt-opt-lst brd-rd5">
                                <a class="delt-wdgt" href="#" title="">Delete</a>
                                <a class="expnd-wdgt" href="#" title="">Expand</a>
                                <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                            </div>
                        </div>
                        <div class="wdgt-ldr">
                            <div class="ball-scale-multiple">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <h4 class="widget-title">Activity
                            <span class="green-bg badge">05 Messages</span>
                        </h4>
                        <div class="slct-bx">
                            <i>Added:</i>
                            <span>
                                <select>
                                    <option>Any Date</option>
                                    <option>15-9-2017</option>
                                    <option>12-8-2017</option>
                                    <option>08-7-2017</option>
                                    <option>10-6-2017</option>
                                </select>
                            </span>
                        </div>
                        <div class="act-pst-lst">
                            <div class="act-pst">
                                <img class="brd-rd50" src="images/resource/acti-thmb1.jpg" alt="" />
                                <div class="act-pst-inf">
                                    <div class="act-pst-inr">
                                        <h5>
                                            <a href="#" title="">Sadi Orlaf</a>
                                        </h5> posted in
                                        <a href="#" title="">Material</a>
                                    </div>
                                    <span class="spnd-tm">5 Min Ago</span>
                                    <div class="act-pst-dta">
                                        <p>That's awesome!</p>
                                    </div>
                                    <span class="pst-tm">
                                        <a href="#" title="">
                                            <i class="fa fa-trash-o"></i> Remove</a>
                                    </span>
                                    <div class="act-pst-lk-stm">
                                        <a class="brd-rd5 green-bg-hover" href="#" title="">
                                            <i class="ion-heart"></i> Love</a>
                                        <a class="brd-rd5 blue-bg-hover" href="#" title="">
                                            <i class="ion-thumbsup"></i> Like</a>
                                    </div>
                                </div>
                            </div>
                            <div class="act-pst">
                                <img class="brd-rd50" src="images/resource/acti-thmb2.jpg" alt="" />
                                <div class="act-pst-inf">
                                    <div class="act-pst-inr">
                                        <h5>
                                            <a href="#" title="">Overtunk</a>
                                        </h5> posted in
                                        <a href="#" title="">New Blog</a>
                                    </div>
                                    <span class="spnd-tm">37 Min Ago</span>
                                    <div class="act-pst-dta">
                                        <p>That's awesome!</p>
                                    </div>
                                    <span class="pst-tm">
                                        <a href="#" title="">
                                            <i class="fa fa-trash-o"></i> Remove</a>
                                    </span>
                                    <div class="act-pst-lk-stm">
                                        <a class="brd-rd5 green-bg-hover" href="#" title="">
                                            <i class="ion-heart"></i> Love</a>
                                        <a class="brd-rd5 blue-bg-hover" href="#" title="">
                                            <i class="ion-thumbsup"></i> Like</a>
                                    </div>
                                </div>
                            </div>
                            <div class="act-pst">
                                <img class="brd-rd50" src="images/resource/acti-thmb3.jpg" alt="" />
                                <div class="act-pst-inf">
                                    <div class="act-pst-inr">
                                        <h5>
                                            <a href="#" title="">Kim Smith</a>
                                        </h5> add
                                        <a href="#" title="">1 photo</a>
                                    </div>
                                    <span class="spnd-tm">50 Min Ago</span>
                                    <div class="act-pst-dta">
                                        <img src="images/resource/act-pst-img1.jpg" alt="" />
                                    </div>
                                    <span class="pst-tm">
                                        <a href="#" title="">
                                            <i class="fa fa-trash-o"></i> Remove</a>
                                    </span>
                                    <div class="act-pst-lk-stm">
                                        <a class="brd-rd5 green-bg-hover" href="#" title="">
                                            <i class="ion-heart"></i> Love</a>
                                        <a class="brd-rd5 blue-bg-hover" href="#" title="">
                                            <i class="ion-thumbsup"></i> Like</a>
                                    </div>
                                </div>
                            </div>
                            <div class="act-pst">
                                <img class="brd-rd50" src="images/resource/acti-thmb4.jpg" alt="" />
                                <div class="act-pst-inf">
                                    <div class="act-pst-inr">
                                        <h5>
                                            <a href="#" title="">Chris Johnathan</a>
                                        </h5> started following
                                        <h6>
                                            <a href="#" title="">Monica Smith</a>
                                        </h6> site.</div>
                                    <span class="spnd-tm">1 Hour Ago</span>
                                    <div class="act-pst-dta">
                                    </div>
                                    <span class="pst-tm">
                                        <a href="#" title="">
                                            <i class="fa fa-trash-o"></i> Remove</a>
                                    </span>
                                    <div class="act-pst-lk-stm">
                                        <a class="brd-rd5 green-bg-hover" href="#" title="">
                                            <i class="ion-heart"></i> Love</a>
                                        <a class="brd-rd5 blue-bg-hover" href="#" title="">
                                            <i class="ion-thumbsup"></i> Like</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Activity Post List -->
                        <div class="vw-mr-act">
                            <a href="#" title="">View More Activity</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                    <div class="totl-revnu widget pad50-40">
                        <div class="wdgt-opt">
                            <span class="wdgt-opt-btn">
                                <i class="ion-android-more-vertical"></i>
                            </span>
                            <div class="wdgt-opt-lst brd-rd5">
                                <a class="delt-wdgt" href="#" title="">Delete</a>
                                <a class="expnd-wdgt" href="#" title="">Expand</a>
                                <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                            </div>
                        </div>
                        <div class="wdgt-ldr">
                            <div class="ball-scale-multiple">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <h4 class="widget-title">Total Revenue</h4>
                        <div id="chart5"></div>
                    </div>
                </div>
            </div>
            <!-- Filter Items -->
        </div>
    </div>
    <!-- Panel Content -->
    <footer>
        <p>Copyright
            <a href="#" title="">Example Company</a> &amp; 2017 - 2018</p>
        <span>10GB of 250GB Free.</span>
    </footer>

    <!-- Vendor: Javascripts -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Vendor: Followed by our custom Javascripts -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/select2.min.js" type="text/javascript"></script>
    <script src="js/slick.min.js" type="text/javascript"></script>

    <!-- Our Website Javascripts -->
    <script src="js/isotope.min.js" type="text/javascript"></script>
    <script src="js/isotope-int.js" type="text/javascript"></script>
    <script src="js/jquery.counterup.js" type="text/javascript"></script>
    <script src="js/waypoints.min.js" type="text/javascript"></script>
    <script src="js/highcharts.js" type="text/javascript"></script>
    <script src="js/exporting.js" type="text/javascript"></script>
    <script src="js/highcharts-more.js" type="text/javascript"></script>
    <script src="js/moment.min.js" type="text/javascript"></script>
    <script src="js/jquery.circliful.min.js" type="text/javascript"></script>
    <script src="js/fullcalendar.min.js" type="text/javascript"></script>
    <script src="js/jquery.downCount.js" type="text/javascript"></script>
    <script src="js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script src="js/jquery.formtowizard.js" type="text/javascript"></script>
    <script src="js/form-validator.min.js" type="text/javascript"></script>
    <script src="js/form-validator-lang-en.min.js" type="text/javascript"></script>
    <script src="js/cropbox-min.js" type="text/javascript"></script>
    <script src="js/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="js/ion.rangeSlider.min.js" type="text/javascript"></script>
    <script src="js/jquery.poptrox.min.js" type="text/javascript"></script>
    <script src="js/styleswitcher.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            'use strict';

            $.getJSON(
                'https://cdn.rawgit.com/highcharts/highcharts/057b672172ccc6c08fe7dbb27fc17ebca3f5b770/samples/data/usdeur.json',
                function (data) {
                    Highcharts.chart('chrt1', {
                        chart: {
                            zoomType: 'x'
                        },

                        legend: {
                            enabled: false
                        },
                        title: {
                            style: {
                                display: 'none'
                            }
                        },
                        plotOptions: {
                            area: {
                                fillColor: {
                                    linearGradient: {
                                        x1: 0,
                                        y1: 0,
                                        x2: 0,
                                        y2: 1
                                    },
                                    stops: [
                                        [0, Highcharts.getOptions().colors[0]],
                                        [1, Highcharts.Color(Highcharts.getOptions().colors[
                                            0]).setOpacity(0).get('rgba')]
                                    ]
                                },
                                marker: {
                                    radius: 2
                                },
                                lineWidth: 1,
                                states: {
                                    hover: {
                                        lineWidth: 1
                                    }
                                },
                                threshold: null
                            }
                        },
                        series: [{
                            type: 'area',
                            name: 'USD to EUR',
                            data: data
                        }]
                    });
                });

            Highcharts.chart('chrt2', {
                chart: {
                    type: 'area',
                    backgroundColor: "#FFFFFF",
                    borderColor: "#335cad"
                },
                legend: {
                    enabled: false
                },
                title: {
                    style: {
                        display: 'none'
                    }
                },
                xAxis: {
                    categories: ['1', '2', '3', '4', '5', '6', '7']
                },
                credits: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
                },
                plotOptions: {
                    area: {
                        categories: ['1', '2', '3', '4', '5', '6', '7'],
                        marker: {
                            enabled: false,
                            symbol: 'circle',
                            radius: 2,
                            states: {
                                hover: {
                                    enabled: true
                                }
                            }
                        }
                    }
                },
                series: [{
                    data: [null, null, null, null, null, 6, 11, 32, 110, 235, 369, 640, 1005,
                        1436, 2063, 3057, 4618, 6444, 9822, 15468, 20434,
                        24126, 27387, 29459, 31056, 31982, 32040, 31233, 29224, 27342,
                        26662, 26956, 27912, 28999, 28965, 27826, 25579, 25722, 24826,
                        24605, 24304, 23464, 23708, 24099, 24357, 24237, 24401, 24344,
                        23586, 22380, 21004, 17287, 14747, 13076, 12555, 12144, 11009,
                        10950, 10871, 10824, 10577, 10527, 10475, 10421, 10358, 10295,
                        10104, 9914, 9620, 9326, 5113, 5113, 4954, 4804, 4761, 4717,
                        4368, 4018
                    ]
                }, {
                    data: [null, null, null, null, null, null, null, null, null, null, 5, 25,
                        50, 120, 150, 200, 426, 660, 869, 1060, 1605,
                        2471, 3322, 4238, 5221, 6129, 7089, 8339, 9399, 10538, 11643, 13092,
                        14478, 15915, 17385, 19055, 21205, 23044, 25393, 27935,
                        30062, 32049, 33952, 35804, 37431, 39197, 45000, 43000, 41000,
                        39000, 37000, 35000, 33000, 31000, 29000, 27000, 25000, 24000,
                        23000, 22000, 21000, 20000, 19000, 18000, 18000, 17000, 16000,
                        15537, 14162, 12787, 12600, 11400, 5500, 4512, 4502, 4502,
                        4500, 4500
                    ]
                }]
            });

            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $('#chrt3').highcharts({
                    chart: {
                        type: 'area',
                        backgroundColor: "#FFFFFF",
                        borderColor: "#335cad"
                    },
                    legend: {
                        enabled: false
                    },
                    title: {
                        style: {
                            display: 'none'
                        }
                    },
                    xAxis: {
                        categories: ['1', '2', '3', '4', '5', '6', '7']
                    },
                    credits: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
                    },
                    plotOptions: {
                        area: {
                            categories: ['1', '2', '3', '4', '5', '6', '7'],
                            marker: {
                                enabled: false,
                                symbol: 'circle',
                                radius: 2,
                                states: {
                                    hover: {
                                        enabled: true
                                    }
                                }
                            }
                        }
                    },
                    series: [{
                        data: [null, null, null, null, null, null, null, null, null,
                            null, 5, 25, 50, 120, 150, 200, 426, 660, 869, 1060,
                            1605,
                            2471, 3322, 4238, 5221, 6129, 7089, 8339, 9399, 10538,
                            11643, 13092, 14478, 15915, 17385, 19055, 21205, 23044,
                            25393, 27935,
                            30062, 32049, 33952, 35804, 37431, 39197, 45000, 43000,
                            41000, 39000, 37000, 35000, 33000, 31000, 29000, 27000,
                            25000, 24000,
                            23000, 22000, 21000, 20000, 19000, 18000, 18000, 17000,
                            16000, 15537, 14162, 12787, 12600, 11400, 5500, 4512,
                            4502, 4502,
                            4500, 4500
                        ]
                    }, {
                        data: [null, null, null, null, null, 6, 11, 32, 110, 235, 369,
                            640, 1005, 1436, 2063, 3057, 4618, 6444, 9822, 15468,
                            20434,
                            24126, 27387, 29459, 31056, 31982, 32040, 31233, 29224,
                            27342, 26662, 26956, 27912, 28999, 28965, 27826, 25579,
                            25722, 24826,
                            24605, 24304, 23464, 23708, 24099, 24357, 24237, 24401,
                            24344, 23586, 22380, 21004, 17287, 14747, 13076, 12555,
                            12144, 11009,
                            10950, 10871, 10824, 10577, 10527, 10475, 10421, 10358,
                            10295, 10104, 9914, 9620, 9326, 5113, 5113, 4954, 4804,
                            4761, 4717,
                            4368, 4018
                        ]
                    }]
                });
            });

            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $('#chrt4').highcharts({
                    chart: {
                        type: 'area',
                        backgroundColor: "#FFFFFF",
                        borderColor: "#335cad"
                    },
                    legend: {
                        enabled: false
                    },
                    title: {
                        style: {
                            display: 'none'
                        }
                    },
                    xAxis: {
                        categories: ['1', '2', '3', '4', '5', '6', '7']
                    },
                    credits: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
                    },
                    plotOptions: {
                        area: {
                            categories: ['1', '2', '3', '4', '5', '6', '7'],
                            marker: {
                                enabled: false,
                                symbol: 'circle',
                                radius: 2,
                                states: {
                                    hover: {
                                        enabled: true
                                    }
                                }
                            }
                        }
                    },
                    series: [{
                        data: [null, null, null, null, null, 6, 11, 32, 110, 235, 369,
                            640, 1005, 1436, 2063, 3057, 4618, 6444, 9822, 15468,
                            20434,
                            24126, 27387, 29459, 31056, 31982, 32040, 31233, 29224,
                            27342, 26662, 26956, 27912, 28999, 28965, 27826, 25579,
                            25722, 24826,
                            24605, 24304, 23464, 23708, 24099, 24357, 24237, 24401,
                            24344, 23586, 22380, 21004, 17287, 14747, 13076, 12555,
                            12144, 11009,
                            10950, 10871, 10824, 10577, 10527, 10475, 10421, 10358,
                            10295, 10104, 9914, 9620, 9326, 5113, 5113, 4954, 4804,
                            4761, 4717,
                            4368, 4018
                        ]
                    }, {
                        data: [null, null, null, null, null, null, null, null, null,
                            null, 5, 25, 50, 120, 150, 200, 426, 660, 869, 1060,
                            1605,
                            2471, 3322, 4238, 5221, 6129, 7089, 8339, 9399, 10538,
                            11643, 13092, 14478, 15915, 17385, 19055, 21205, 23044,
                            25393, 27935,
                            30062, 32049, 33952, 35804, 37431, 39197, 45000, 43000,
                            41000, 39000, 37000, 35000, 33000, 31000, 29000, 27000,
                            25000, 24000,
                            23000, 22000, 21000, 20000, 19000, 18000, 18000, 17000,
                            16000, 15537, 14162, 12787, 12600, 11400, 5500, 4512,
                            4502, 4502,
                            4500, 4500
                        ]
                    }]
                });
            });

            Highcharts.chart('chart5', {
                title: {
                    style: {
                        display: 'none'
                    }
                },
                xAxis: {
                    categories: ['Apples', 'Oranges', 'Pears',
                        'Bananas', 'Plums'
                    ]
                },
                labels: {
                    items: [{
                        style: {
                            left: '50px',
                            top: '18px',
                            color: (Highcharts.theme &&
                                Highcharts.theme.textColor) || 'black'
                        }
                    }]
                },
                series: [{
                    type: 'column',
                    name: 'Jane',
                    data: [3, 2, 1, 3, 4]
                }, {
                    type: 'column',
                    name: 'John',
                    data: [2, 3, 5, 7, 6]
                }, {
                    type: 'column',
                    name: 'Joe',
                    data: [4, 3, 3, 9, 0]
                }, {
                    type: 'spline',
                    name: 'Average',
                    data: [3, 2.67, 3, 6.33, 3.33],
                    marker: {
                        lineWidth: 2,
                        lineColor: Highcharts.getOptions().colors[3],
                        fillColor: 'white'
                    }
                }, {
                    type: 'pie',
                    name: 'Total consumption',
                    data: [{
                        name: 'Jane',
                        y: 13,
                        color: Highcharts.getOptions().colors[0]
                    }, {
                        name: 'John',
                        y: 23,
                        color: Highcharts.getOptions().colors[1]
                    }, {
                        name: 'Joe',
                        y: 19,
                        color: Highcharts.getOptions().colors[2]
                    }],
                    center: [100, 80],
                    size: 100,
                    showInLegend: false,
                    dataLabels: {
                        enabled: false
                    }
                }]
            });

            //===== ToolTip =====//
            if ($.isFunction($.fn.tooltip)) {
                $('[data-toggle="tooltip"]').tooltip();
            }
        });
    </script>
</body>

</html>
