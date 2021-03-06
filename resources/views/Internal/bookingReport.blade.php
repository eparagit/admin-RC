<!DOCTYPE html>
<html>

<head>
  <!-- Meta-Information -->
  <title>Ruta a la cima Administrador</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Vendor: Bootstrap 4 Stylesheets  -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" type="text/css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" type="text/css">
  <!-- Our Website CSS Styles -->
  <link rel="stylesheet" href="css/icons.min.css" type="text/css">
  <link rel="stylesheet" href="css/main.css" type="text/css">
  <link rel="stylesheet" href="css/responsive.css" type="text/css">

  <link rel="alternate stylesheet" href="css/color-schemes/color5.css" title="color5">
</head>

<body class="expand-data panel-data">
  @include('Ilayout.rightHeader')
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
         <span>Reporte de Productos</span>
       </div>
     </div>
  <!-- Page Top -->
  <div class="panel-content">
    <div class="widget">


            <table class="table table-striped table-bordered table-hover" width="100%" id="bookingTableReport">
              <thead>
                <tr>
                   <th>Nombre</th>
                   <th>Apellido</th>
                   <th>Correo Electrónico</th>
                   <th>Viaje</th>
                   <th>Cantidad de Personas</th>
                </tr>
              </thead>
            </table>


    </div>
  </div>
  <!-- Panel Content -->
    @include('Ilayout.footerI')


  <!-- Vendor: Javascripts -->
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <!-- Vendor: Followed by our custom Javascripts -->
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="js/dataTables.bootstrap.min.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js" type="text/javascript"></script>

  <!-- Our Website Javascripts -->

  <script src="js/main.js" type="text/javascript"></script>
  <script src="ProjectJs/bookingReport.js" type="text/javascript"></script>
  <script src="ProjectJs/logout.js" type="text/javascript"></script>
  <script src="ProjectJs/counters.js" type="text/javascript"></script>
    <script src="ProjectJs/InternalPassChange.js" type="text/javascript"></script>

</body>

</html>
