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
    <div class="nav-head">Menú Interno
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
                    </li>
                    <li>
                        <a href="/Admin-RC/public//GoTourAprlid" title="">Aprobación</a>
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

  @include('Ilayout.headerI')
  </header>

  <!-- Side Header -->

  <!-- Page Top -->



  <div class="panel-content" style="background-color:white">
    <div class="pad50-65">

      <form class="form-group" accept-charset="UTF-8" action="insertTour" method="POST" enctype="multipart/form-data">
              <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
              <div class="row">
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Imagen y Datos principales</label>
                       <input type="file" name="image" id="image" accept="image/*"  class="form-control" required>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Titulo</label>
                       <input class="form-control" name="con_titulo" id="con_titulo"  type="text" required />
                     </div>
                 </div>
              </div>

              <div class="row">
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Lugar de Salida</label>
                       <input class="form-control" name="con_lsalida" id="con_lsalida"  type="text" required />
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Destino</label>
                       <input class="form-control" name="con_destino" id="con_destino"  type="text" required />
                     </div>
                 </div>
              </div>

              <div class="row">
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Descripción del tour</label>
                       <textarea class="form-control" name="con_descripcion" id="con_descripcion" type="text" required ></textarea>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Tipo de viaje</label>
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
                       <select class="form-control"  id="cviaje" name="cviaje">
                        <option value="0">Seleccione</option>
                       </select>
                       <button class="btn btn-info" data-toggle="modal" data-target="#cat-Modal" type="button">Agregar Nueva Categoría</button>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Requisitos</label>
                       <textarea  class="form-control" id="con_requisitos" name="con_requisitos" type="text" required></textarea>
                     </div>
                 </div>
              </div>

              <div class="row">
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Incluye</label>
                        <textarea class="form-control" id="con_incluye"  name="con_incluye"  type="email" required /></textarea>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Cupo</label>
                       <input class="form-control"  id="con_cupo" name="con_cupo" type="number" required />
                     </div>
                 </div>
              </div>

              <div class="row">
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Costo en colones</label>
                       <input class="form-control" name="con_costo" id="con_costo" type="number" required>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="form-group">
                       <label>Fecha de salida</label>
                       <input type="text" id="con_dtfhs" name="con_dtfhs" class="form-control" required />
                     </div>
                 </div>
              </div>

              <div class="row">
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label>Fecha de regreso</label>
                         <input type="text" id="con_dtfhr"  name="con_dtfhr" class="form-control" required />
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label>Fecha de vencimiento del tour</label>
                        <input type="text" id="con_dtfhv"  name="con_dtfhv" class="form-control" required />
                      </div>
                  </div>
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
 <div class="modal fade" id="cat-Modal" role="dialog">
   <div class="modal-dialog">

     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Nueva Categoría</h4>
       </div>
       <form action="" method="POST" id="fp-insert">
         <div class="modal-body">
         <div class="col-4-md">
             <div class="form-group">
               <label>Nombre:</label>
               <input type="text" name="nombre" id="con_cat_name">
             </div>
         </div>
         <div class="modal-footer">
           <input type="button" class="btn btn-success pull-left" value="Agregar" id="con_addct">
           <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
         </div>
       </form>

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
  <script src="ProjectJs/trip.js" type="text/javascript"></script>
  <script src="ProjectJs/logout.js" type="text/javascript"></script>
  <script src="ProjectJs/tourCharact.js" type="text/javascript"></script>
  <script src="ProjectJs/dt.js" type="text/javascript"></script>
  <script src="js/jquery.datetimepicker.full.js" type="text/javascript"></script>
  <script src="js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>
<!--    <script src="ProjectJs/dt.js" type="text/javascript"></script>-->
</body>

</html>
