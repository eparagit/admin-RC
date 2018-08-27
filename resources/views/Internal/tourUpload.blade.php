<!DOCTYPE html>
<html>

<head>
  <!-- Meta-Information -->
  <title>Ruta Cima</title>
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
         <span>Publicación de Viaje</span>
       </div>
     </div>
  <!-- Page Top -->
  <div class="panel-content">
    <div class="widget pad50-65">


  <div class="panel-content" style="background-color:white">
    <div class="pad50-65">

      <form class="form-group" accept-charset="UTF-8" action="insertTour" method="POST" enctype="multipart/form-data">
              <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
              <div class="row">
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Imagen y Datos principales</label>
                        <label style="color: red">*</label>
                       <input type="file" name="image" id="image" accept="image/*"  class="form-control" required>
                     </div>
                 </div>

                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Titulo</label>
                       <label style="color: red">*</label>
                       <input class="form-control" name="con_titulo" id="con_titulo"  type="text" required />
                     </div>
                 </div>
              </div>

              <div class="row">
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Lugar de Salida</label>
                        <label style="color: red">*</label>
                       <input class="form-control" name="con_lsalida" id="con_lsalida"  type="text" required />
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Destino</label>
                        <label style="color: red">*</label>
                       <input class="form-control" name="con_destino" id="con_destino"  type="text" required />
                     </div>
                 </div>
              </div>

              <div class="row">
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Descripción del tour</label>
                        <label style="color: red">*</label>
                       <textarea class="form-control" name="con_descripcion" id="con_descripcion" type="text" required ></textarea>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Tipo de viaje</label>
                        <label style="color: red">*</label>
                       <select class="form-control" id="tviaje" name="tviaje">
                        <option value="0">Seleccione</option>
                       </select>
                     </div>
                 </div>
              </div>

              <div class="row">
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Categoría</label>
                        <label style="color: red">*</label>
                       <select class="form-control"  id="cviaje" name="cviaje">
                        <option value="0">Seleccione</option>
                       </select>

                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Requisitos</label>
                        <label style="color: red">*</label>
                       <textarea  class="form-control" id="con_requisitos" name="con_requisitos" type="text" required></textarea>
                     </div>
                 </div>
              </div>

              <div class="row">
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Incluye</label>
                        <label style="color: red">*</label>
                        <textarea class="form-control" id="con_incluye"  name="con_incluye"  type="email" required /></textarea>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Cupo</label>
                        <label style="color: red">*</label>
                       <input class="form-control"  id="con_cupo" name="con_cupo" type="number" min="1" max="100"  required />
                     </div>
                 </div>
              </div>

              <div class="row">
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Costo en colones</label>
                        <label style="color: red">*</label>
                       <input class="form-control" name="con_costo" id="con_costo" min="1" type="number" required>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Fecha de salida</label>
                        <label style="color: red">*</label>
                       <input type="text" id="con_dtfhs" name="con_dtfhs" class="form-control" required />
                     </div>
                 </div>
              </div>

              <div class="row">
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label>Fecha de regreso</label>
                         <label style="color: red">*</label>
                         <input type="text" id="con_dtfhr"  name="con_dtfhr" class="form-control" required />
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label>Fecha de vencimiento del tour</label>
                         <label style="color: red">*</label>
                        <input type="text" id="con_dtfhv"  name="con_dtfhv" class="form-control" required />
                      </div>
                  </div>
              </div>
                <div>
                  Campo requierido <label style="color: red">*</label></br>
                </div>


              <div class="row">
                <div class="col-12">
                   <button class="btn btn-success" type="submit" style=" position:relative;top:50%;left:50%;">Guardar</button>
                </div>
              </div>

      </form>



    </div>
  </div>
  <!-- Panel Content -->

  <!--Modal-->
 <div class="modal fade" id="updateTour-Modal" role="dialog">
   <div class="modal-dialog">

     <!-- Modal content-->
     <div class="modal-content" style="width:600px;">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Actualización del Tour</h4>
       </div>
         <div class="modal-body" id="modalBodyTour">

        </div>
   </div>
 </div>
</div>
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
  <script src="ProjectJs/trip.js" type="text/javascript"></script>
  <script src="ProjectJs/tourblade.js" type="text/javascript"></script>
  <script src="ProjectJs/logout.js" type="text/javascript"></script>

  <script src="js/jquery.datetimepicker.full.js" type="text/javascript"></script>
  <script src="js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>
  <script src="ProjectJs/dt.js" type="text/javascript"></script>


  <script src="ProjectJs/tourCharact.js" type="text/javascript"></script>
  <script src="ProjectJs/dt.js" type="text/javascript"></script>
  <script src="js/jquery.datetimepicker.full.js" type="text/javascript"></script>
  <script src="js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>
  <script src="ProjectJs/InternalPassChange.js" type="text/javascript"></script>
  <script src="ProjectJs/counters.js" type="text/javascript"></script>
<!--    <script src="ProjectJs/dt.js" type="text/javascript"></script>-->

</body>

</html>
