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
          <span>
              <img src="images/resource/topbar-usr1.jpg" alt="" />
              <i class="sts away"></i>
          </span>
          <div class="usr-inf">
              <div class="usr-thmb brd-rd50">
                  <img class="brd-rd50" src="images/resource/usr.jpg" alt="" />
                  <i class="sts away"></i>
                  <a class="green-bg brd-rd5" href="#" title="">
                      <i class="fa fa-envelope"></i>
                  </a>
              </div>
              <h5>
                @foreach(Session::get('datos') as $data)
                <a href="#" title="">{{$data['NombreUsuario']}}</a>
                  <input type="text" id="con_iduse" value="<?=$data['ID_Usuario']?>"/>
                @endforeach
              </h5>
              <span>
                @foreach(Session::get('datos') as $data)
                <label>{{$data['NumeroTelefonico']}}</label>
                @endforeach
              </span>



              <div class="act-pst-lk-stm">
                  <a class="brd-rd5 blue-bg-hover" href="#" title="">
                      <i class="ion-forward"></i>Mi perfil</a>
              </div>
              <div class="usr-ft">
                  <a id="con_logout" class="btn-danger" href="#" title="">
                      <i class="fa fa-sign-out"></i> Logout</a>
              </div>
            </div>
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
