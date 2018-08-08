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
         <span>Reporte de Reservaciones</span>
       </div>
     </div>
  <!-- Page Top -->
  <div class="panel-content">
    <div class="widget">


            <table class="table table-striped table-bordered table-hover" width="100%" id="RbookingTableReport">
                 <thead>
                   <tr>
                      <th>#</th>
                      <th>Viaje</th>
                      <th>Cliente</th>
                      <th>Cantidad de Personas</th>
                      <th>Estado</th>
                   </tr>
                 </thead>
            </table>


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
  <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="js/dataTables.bootstrap.min.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js" type="text/javascript"></script>

  <!-- Our Website Javascripts -->

  <script src="js/main.js" type="text/javascript"></script>
  <script src="ProjectJs/reportsBooking.js" type="text/javascript"></script>
  <script src="ProjectJs/logout.js" type="text/javascript"></script>

</body>

</html>
