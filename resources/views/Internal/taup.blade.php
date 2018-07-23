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
    <link rel="stylesheet" href="css/jquery.datetimepicker.css" type="text/css">
    <!-- Color Scheme -->
    <link rel="stylesheet" href="css/color-schemes/color.css" type="text/css" title="color3">
    <link rel="alternate stylesheet" href="css/color-schemes/color1.css" title="color1">
    <link rel="alternate stylesheet" href="css/color-schemes/color2.css" title="color2">
    <link rel="alternate stylesheet" href="css/color-schemes/color4.css" title="color4">
    <link rel="alternate stylesheet" href="css/color-schemes/color5.css" title="color5">

     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">



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
                <i>Hola, <label id="con_regus">{{$data['NombreCompleto']}}</label>
                <input type="text" value="{{$data['ID_Usuario']}}" id="con_iduse" style="display:none;" /></i>
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
        <div class="nav-head">Menu Principal
            <span class="menu-trigger">
                <i class="ion-android-menu"></i>
            </span>
        </div>
        <nav class="custom-scrollbar">
            <ul class="drp-sec">
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-home"></i>
                        <span>Registro</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="/Admin-RC/public//GoReg" title="">Usuarios</a>
                        </li>

                    </ul>
                </li>
            </ul>
            <h4>Mantenimientos</h4>
            <ul class="drp-sec">
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-briefcase"></i>
                        <span>Cuentas</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="/Admin-RC/public//GoAdminU" title="">Administradores</a>
                        </li>
                        <li>
                            <a href="/Admin-RC/public//GoSIU" title="">Estándar Interno</a>
                        </li>
                        <li>
                            <a href="/Admin-RC/public//GoSEU" title="">Estandar Externo</a>
                        </li>
                    </ul>
                </li>
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-android-contact"></i>
                        <span>Roles</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="font-awesome-icons.html" title="">Administración</a>
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
    <body>

   <div class="pg-tp">
     <i class="ion-cube"></i>
     <div class="pr-tp-inr">
       <h4>Ruta a la Cima</h4>
       <span>Administración de Viajes</span>
     </div>
   </div>
   <!-- Page Top -->
    <!--Start Wizard-->

   <div class="panel-content">
     <div class="widget pad50-65">
       <div class="widget-title2">
         <h4>Calendario</h4>
         <span>Seleccione las siguientes fechas para finalizar el registro</span>

       </div>

     <form  class="form-wrp" enctype="multipart/form-data">
           <div class="row mrg20">

             <div class='col-md-6 col-sm-6 col-lg-6'>
               <div class="container">
                <input type="text" id="con_dtfhs" class="form-control" placeholder="Fecha y Hora de Salida*" />
               </div>
             </div>
             <div class='col-sm-6'>
               <div class="container">
                  <input type="text" id="con_dtfhr" class="form-control" placeholder="Fecha y Hora de Regreso*" />
               </div>
             </div>
             <div class='col-sm-6'>
               <div class="container">
                <input type="text" id="con_dtfhp" class="form-control" placeholder="Fecha de Publicación*" />
               </div>
             </div>
             <div class='col-sm-6'>
               <div class="container">
                <input type="text" id="con_dtfhv" class="form-control" placeholder="Vencimiento*" />
               </div>
             </div>
             <div class="col-md-12 col-sm-12 col-lg-12">
               <button id="con_regist" name="con_regist" class="green-bg brd-rd5" type="button">
                 <i class="fa fa-paper-plane"></i>Registrar Viaje</button>
             </div>





           <!--  <div class="col-md-12 col-sm-12 col-lg-12">
               <button id="con_regv" name="con_regist" class="green-bg brd-rd5" type="button">
                 <i class="fa fa-paper-plane"></i>Registrar</button>
             </div>
           </div>-->
     </form>
<!-- TEST -->

<!--END  TEST -->
     </div>
   </div>
   <!-- Panel Content -->
 </body>
    <!-- Page Top -->
    <!-- Panel Content -->
    <footer>
        <p>Kinesis
            <a href="#" title="">Ruta ala Cima</a> &amp; 2017 - 2018</p>
        <span></span>
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
    <script src="ProjectJs/trip.js" type="text/javascript"></script>
    <script src="ProjectJs/dt.js" type="text/javascript"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.datetimepicker.full.js" type="text/javascript"></script>
    <script src="js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>


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
