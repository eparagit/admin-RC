<!DOCTYPE html>
<html>

<head>
    <!-- Meta-Information -->
    <title>Ruta a la cima Interno</title>
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
                    <img src="images/rutacima.png" alt="" />
                </a>
            </h1>
        </div>
        <div class="topbar-data">
          <div class="usr-act">
            @foreach(Session::get('datos') as $data)
              <i>Hola, <label id="con_regus">{{$data['NombreCompleto']}}</label></i>
              @endforeach
              <a id="con_logout" class="btn-danger" href="#" title="">
                  <i class="fa fa-sign-out"></i> Cerrar Sesión</a>
            </div>

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
        <div class="nav-head">Menú Principal
            <span class="menu-trigger">
                <i class="ion-android-menu"></i>
            </span>
        </div>
        <nav class="custom-scrollbar">
          <ul class="sb-drp">
             <li>
                 <a href="/Admin-RC/public//Internal" title="">Inicio</a>
             </li>
           </ul>
            <ul class="drp-sec">
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-home"></i>
                        <span>Viajes</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="/Admin-RC/public//GetTourUpload" title="">Publicación</a>
                        </li>
                        <li>
                            <a href="/Admin-RC/public//GetTourToApprove" title="">Aprobación</a>
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
                            <a href="/Admin-RC/public//GoProductUpload" title="">Publicar</a>
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
                        <span>Mantenimientos</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="/Admin-RC/public//GetBookingContractStatus" title="">Estado RC</a>
                        </li>
                        <li>
                            <a href="/Admin-RC/public//GetTourStatus" title="">Estado Viaje</a>
                        </li>
                        <li>
                            <a href="/Admin-RC/public//GetTourCategory" title="">Categoría Viaje</a>
                        </li>
                        <li>
                            <a href="/Admin-RC/public//GetEventType" title="">Tipo Evento</a>
                        </li>
                        <li>
<<<<<<< HEAD
                            <a href="/Admin-RC/public//GoServiceType" title="">Tipo Servicio</a>
                        </li>
                    </ul>
                </li>
=======
                            <a href="/Admin-RC/public//GetServiceType" title="">Tipo Servicio</a>
                        </li>
                    </ul>
                </li>

>>>>>>> 4e53a95c0eaebe7f14b4cdff2bb77c0a8765787e
            </ul>
          
        </nav>
    </header>
    <!-- Side Header -->

    <!-- Options Panel -->
    <div class="pg-tp">
        <i class="ion-cube"></i>
        <div class="pr-tp-inr">
            <h4>Bienvenido
                <strong>@foreach(Session::get('datos') as $data)
                  {{$data['NombreCompleto']}}
                  @endforeach</strong>
                <span></span> Al Modulo Interno</h4>
        </div>
    </div>
    <!-- Page Top -->


    <!-- Panel Content -->
    <footer>
        <p>Todos los derechos a
          Ruta a la Cima 2018</p>
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
    <script src="ProjectJs/logout.js" type="text/javascript"></script>
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
