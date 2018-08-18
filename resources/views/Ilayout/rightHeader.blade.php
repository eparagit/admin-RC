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
        @foreach(Session::get('standard') as $data)
          <i>Hola, <label id="con_regus">{{$data['NombreCompleto']}}</label></i>
          @endforeach
          <a id="con_logout" class="btn-danger" href="#" title="">
              <i class="fa fa-sign-out"></i> Cerrar Sesión</a>
            </br><a id="con_ipassch">
                <i>Cambiar Contraseña</i></a>
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
