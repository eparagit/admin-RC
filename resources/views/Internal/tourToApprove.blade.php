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
<<<<<<< HEAD:resources/views/Internal/tourAprl-id.blade.php
            </li>

        </ul>
=======
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
>>>>>>> 4e53a95c0eaebe7f14b4cdff2bb77c0a8765787e:resources/views/Internal/tourToApprove.blade.php
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
<<<<<<< HEAD:resources/views/Internal/tourAprl-id.blade.php
    <div class="nav-head">Menu Principal
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
                  <a href="/Admin-RC/public//GoTourU" title="">Publicación</a>
=======
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
                          <a href="/Admin-RC/public//GetTourUpload" title="">Publicación</a>
                      </li>
                      <li>
                          <a href="/Admin-RC/public//GetTourToApprove" title="">Aprobación</a>
                      </li>
                      <li>
                          <a href="dashboard3.html" title="">Mantenimientos</a>
                      </li>
                  </ul>
>>>>>>> 4e53a95c0eaebe7f14b4cdff2bb77c0a8765787e:resources/views/Internal/tourToApprove.blade.php
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
<<<<<<< HEAD:resources/views/Internal/tourAprl-id.blade.php
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
                      <a href="/Admin-RC/public//GoBCStatus" title="">Estado RC</a>
                  </li>
                  <li>
                      <a href="/Admin-RC/public//GoTourStatus" title="">Estado Viaje</a>
                  </li>
                  <li>
                      <a href="/Admin-RC/public//GoTourCategory" title="">Categoría Viaje</a>
                  </li>
                  <li>
                      <a href="/Admin-RC/public//GoEventType" title="">Tipo Evento</a>
                  </li>
                  <li>
                      <a href="/Admin-RC/public//GoServiceType" title="">Tipo Servicio</a>
                  </li>
              </ul>
          </li>
      </ul>
    </nav>
=======
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
                          <a href="/Admin-RC/public//GetServiceType" title="">Tipo Servicio</a>
                      </li>
                  </ul>
              </li>
          </ul>      

      </nav>
>>>>>>> 4e53a95c0eaebe7f14b4cdff2bb77c0a8765787e:resources/views/Internal/tourToApprove.blade.php
  </header>

  <!-- Page Top -->
  <div class="panel-content">
    <div class="widget pad50-65">
    <div class="col-md-12 col-sm-12 col-lg-12">
      <div id="t_toursc">
      </div>
      <table class="table" id="t_tours">
         <thead>
         </thead>
            <tbody id="tb_tuors">

            </tbody>
        </table>
    </div>
    </div>
  </div>
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
<script src="ProjectJs/trip.js" type="text/javascript"></script>
<script src="ProjectJs/tourblade.js" type="text/javascript"></script>
<script src="ProjectJs/logout.js" type="text/javascript"></script>
<!--    <script src="ProjectJs/dt.js" type="text/javascript"></script>-->
  <script type="text/javascript">
    $(document).ready(function () {
      'use strict';

      var $info_form = $('#info-form');
      $info_form.validationEngine();
      $info_form.formToWizard({
        submitButton: 'SaveAccount',
        showProgress: true,
        nextBtnName: 'Next',
        prevBtnName: 'Previous',
        showStepNo: false,
        validateBeforeNext: function () {
          return $info_form.validationEngine('validate');
        }
      });

      $('#txt_stepNo').change(function () {
        $info_form.formToWizard('GotoStep', $(this).val());
      });

      $('#btn_next').on('click', function () {
        $info_form.formToWizard('NextStep');
      });

      $('#btn_prev').on('click', function () {
        $info_form.formToWizard('PreviousStep');
      });

    });
  </script>
</body>

</html>
