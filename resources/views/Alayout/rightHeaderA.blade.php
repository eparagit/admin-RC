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
        @foreach(Session::get('admin') as $data)
          <i>Hola, <label id="con_regus">{{$data['NombreCompleto']}}</label></i>

          <a id="con_logout" class="btn-danger" href="#" title="">
              <i class="fa fa-sign-out"></i> Cerrar Sesión</a>
            </br><a id="con_passch">
                <i>Cambiar Contraseña</i></a>
                @endforeach
        </div>


        <ul class="nav">
        <li class="nav-item">
          <a class="nav-link Acerca de" href="/Admin-RC/public//GetAdminAbout">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Admin-RC/public//AdminGuide">Descargar Guía de Usuario</a>
        </li>
        <li class="nav-item">
          <a class="ion-home" href="/Admin-RC/public//Admin"></a>
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
