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
  @include('Ilayout.rightHeader')
    <!-- Topbar -->

    @include('Ilayout.headerI')
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
       <span>Solicitudes de Contratación de Servicios</span>
     </div>
   </div>
   <!-- Page Top -->

   <div class="panel-content" id="frm_contract">
     <div class="widget pad50-65">
       <div class="widget-title2">
         <h4>Contrataciones</h4>
       </div>
       <form class="form-wrp">
         <div class="row mrg20" id="con_content">

         </div>
       </form>
     </div>

   </div>

   <div class="modal fade" id="processModal" tabindex="-1" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Justifique el cambio</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <div class="col-md-6 col-sm-6 col-lg-6" id="p_contJust">
             <textarea class="brd-rd5 validate[required]" name="p_justDesc" id="p_justDesc"  type="text"></textarea>
             <span class="error-box"></span>
           </div>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
             <button type="button" class="btn btn-primary" id="btn_proNC" data-id="">Enviar</button>
           </div>
         </div>
       </div>
     </div>

     <div class="modal fade" id="rejectModal" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Justifique el cambio</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div class="modal-body">
               <div class="col-md-6 col-sm-6 col-lg-6" id="r_conJust">
               <input class="brd-rd5 validate[required]" name="r_justDesc" id="r_justDesc"  type="text"  />
               <span class="error-box"></span>
             </div>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               <button type="button" class="btn btn-primary" id="btn_rejNC" data-id="">Enviar</button>
             </div>
           </div>
         </div>
       </div>

   <!-- Panel Content -->
   <div class="modal fade" id="newContractApp-Modal" role="dialog">
     <div class="modal-dialog">

       <!-- Modal content-->
       <div class="modal-content" style="width:600px;">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Aprobación de contratación Nueva</h4>
         </div>
           <div class="modal-body" id="modalBodyNContract">

          </div>
     </div>
   </div>
   </div>
 </body>
    <!-- Page Top -->


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
    <script src="ProjectJs/rol.js" type="text/javascript"></script>
    <script src="ProjectJs/user.js" type="text/javascript"></script>
    <script src="ProjectJs/logout.js" type="text/javascript"></script>
    <script src="ProjectJs/contract.js" type="text/javascript"></script>
    <script src="ProjectJs/headerData.js" type="text/javascript"></script>
    <script src="ProjectJs/InternalPassChange.js" type="text/javascript"></script>
    <script src="ProjectJs/counters.js" type="text/javascript"></script>
</body>

</html>
