<!DOCTYPE html>
<html>

<head>
  <!-- Meta-Information -->
  <title>Ruta a la cima</title>
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
</head>

<body class="expand-data panel-data">
  @include('Ilayout.rightHeader')
  <!-- Topbar -->


  @include('Ilayout.headerI')


  </header>


  <!-- Side Header -->

  <div class="pg-tp">
       <i class="ion-cube"></i>
       <div class="pr-tp-inr">
         <h4>Ruta a la Cima</h4>
         <span>Notificaciones de Recordatorio</span>
       </div>
     </div>
  <!-- Page Top -->
  <div class="panel-content">
    <div class="widget pad50-65">


  <div class="panel-content" style="background-color:white">
    <div class="pad50-65">

        <div class="tab-styl tab-styl2">
          <ul class="nav nav-tabs">
            <li class="nav-item" style="width: 600px;">
              <a class="nav-link active" data-toggle="tab" href="#tab1-1">Tour</a>
            </li>
            <li class="nav-item" style="padding: 0px;margin: 0px;width: 100px;">
              <a class="nav-link" data-toggle="tab" href="#tab1-2"></a>
            </li>
            <li class="nav-item" style="width: 600px;">
            <a class="nav-link" data-toggle="tab" href="#tab1-3">Producto</a>
          </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1-1">

                  <form class="form-group" accept-charset="UTF-8" action="massiveNotificationTour" method="POST" enctype="multipart/form-data">
                          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <div class="row">
                               <div class="col-lg-6">
                                   <div class="form-group">
                                     <label>Tour</label>
                                     <select class="form-control" id="tour_Notificaciones" name="tour_Notificaciones">
                                      <option value="0">Seleccione</option>
                                     </select>
                                   </div>
                               </div>
                               <div class="col-lg-6">
                                   <div class="form-group">
                                     <label>Digite el titulo del Correo</label>
                                     <input class="form-control" name="titulo_tourNotificaciones" id="titulo_tourNotificaciones"  type="text" required />
                                   </div>
                               </div>
                            </div>

                            <div class="row">
                               <div class="col-lg-12">
                                   <div class="form-group">
                                     <label>Descripción del Correo de recordatorio</label>
                                     <textarea class="form-control" name="descripcion_tourNotificaciones" id="descripcion_tourNotificaciones" type="text" required ></textarea>
                                   </div>
                               </div>
                            </div>

                            <div class="row">
                              <div class="col-12">
                                 <button class="btn btn-info" type="submit" style="width:100%">Notificar a todos los usuarios asociados</button> <!-- style=" position:relative;top:50%;left:50%;" -->
                              </div>
                            </div>
                  </form>

            </div>
            <div class="tab-pane fade" id="tab1-3">

                  <form class="form-group" accept-charset="UTF-8" action="massiveNotificationProducto" method="POST" enctype="multipart/form-data">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                              <div class="row">
                                 <div class="col-lg-6">
                                     <div class="form-group">
                                       <label>Producto que desea promoveer</label>
                                       <select class="form-control" id="producto_Notificaciones" name="producto_Notificaciones" style="width:100%">
                                        <option value="0">Seleccione</option>
                                       </select>
                                     </div>
                                 </div>
                                 <div class="col-lg-6">
                                     <div class="form-group">
                                       <label>Digite el titulo del Correo</label>
                                       <input class="form-control" name="titulo_productoNotificaciones" id="titulo_productoNotificaciones"  type="text" required />
                                     </div>
                                 </div>
                              </div>

                              <div class="row">
                                 <div class="col-lg-12">
                                     <div class="form-group">
                                       <label>Descripción del Correo de recordatorio</label>
                                       <textarea class="form-control" name="descripcion_productoNotificaciones" id="descripcion_productoNotificaciones" type="text" required ></textarea>
                                     </div>
                                 </div>
                              </div>

                              <div class="row">
                                <div class="col-12">
                                   <button class="btn btn-info" type="submit" style="width:100%">Notificar a todos los usuarios</button> <!--  -->
                                </div>
                              </div>
                    </form>

            </div>
        <!--    <div class="tab-pane fade" id="tab1-3">

                <form class="form-group" accept-charset="UTF-8" action="/massiveNotificationOtro" method="POST" enctype="multipart/form-data">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                          <div class="row">
                             <div class="col-lg-6">
                                 <div class="form-group">
                                   <label>Servicio que desea promoveer</label>
                                   <select class="form-control" id="otro_Notificaciones" name="otro_Notificaciones" style="width:100%">
                                    <option value="">Seleccione</option>
                                    <option value="Taller">Taller</option>
                                    <option value="Programas">Programas</option>
                                    <option value="Otro">Otro Servicio</option>
                                   </select>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-group">
                                   <label>Digite el titulo del Correo</label>
                                   <input class="form-control" name="titulo_otroNotificaciones" id="titulo_otroNotificaciones"  type="text" required />
                                 </div>
                             </div>
                          </div>

                          <div class="row">
                             <div class="col-lg-12">
                                 <div class="form-group">
                                   <label>Descripción del Correo</label>
                                   <textarea class="form-control" name="descripcion_otroNotificaciones" id="descripcion_otroNotificaciones" type="text" required ></textarea>
                                 </div>
                             </div>
                          </div>

                          <div class="row">
                            <div class="col-12">
                               <button class="btn btn-info" type="submit" >Notificar a todos los usuarios</button>
                            </div>
                          </div>
                </form>

          </div> -->
          </div>
        </div>


    </div>
  </div>
  <!-- Panel Content -->


  @include('Ilayout.footerI')


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
  <script src="ProjectJs/notifications.js" type="text/javascript"></script>
  <script src="ProjectJs/logout.js" type="text/javascript"></script>
  <script src="ProjectJs/counters.js" type="text/javascript"></script>
    <script src="ProjectJs/InternalPassChange.js" type="text/javascript"></script>

<!--    <script src="ProjectJs/dt.js" type="text/javascript"></script>-->

</body>

</html>
