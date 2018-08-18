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

              <li>
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


  @include('Ilayout.headerI')
  <!-- Side Header -->



  @include('Ilayout.headerI')
  <!-- Side Header -->


  </header>


    <div class="pg-tp">
       <i class="ion-cube"></i>
       <div class="pr-tp-inr">
         <h4>Ruta a la Cima</h4>
         <span>Mantenimiento de Producto</span>
       </div>
     </div>
  <!-- Page Top -->
  <div class="panel-content">
    <div class="widget pad50-65">
    <div class="col-md-12 col-sm-12 col-lg-12" >
          <div id="productDiv">
            <table class="table" id="t_product">
               <thead>
               </thead>
                  <tbody id="tb_product">



                </tbody>
            </table>
         </div>
    </div>
    </div>
  </div>
  <!-- Panel Content -->

  <!--Modal-->
 <div class="modal fade" id="updateProducto-Modal" role="dialog">
   <div class="modal-dialog">

     <!-- Modal content-->
     <div class="modal-content" style="width:600px;">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Actualización del Producto</h4>
       </div>
         <div class="modal-body" id="modalBodyProducto">

        </div>
   </div>
 </div>
</div>
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
  <script src="ProjectJs/product.js" type="text/javascript"></script>
  <script src="ProjectJs/logout.js" type="text/javascript"></script>
  <script src="js/jquery.datetimepicker.full.js" type="text/javascript"></script>
  <script src="js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>
  <script src="ProjectJs/dt.js" type="text/javascript"></script>
  <script src="ProjectJs/InternalPassChange.js" type="text/javascript"></script>
  <script src="ProjectJs/counters.js" type="text/javascript"></script>
</body>

</html>
