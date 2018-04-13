<div class="sidebar" data-color="orange">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->

    <div class="logo">
        <a href="{{route('back.index')}}" class="simple-text logo-mini">
            <img src="{{url('img/Logo_TV_2015.png')}}" alt="">
        </a>

        <a href="{{route('back.index')}}" class="simple-text logo-normal">
            Food Delivery
        </a>

        <div class="navbar-minimize">
          <button id="minimizeSidebar" class="btn btn-simple btn-icon btn-neutral btn-round">
              <i class="now-ui-icons text_align-center visible-on-sidebar-regular"></i>
              <i class="now-ui-icons design_bullet-list-67 visible-on-sidebar-mini"></i>
          </button>
  	    </div>

    </div>

    <div class="sidebar-wrapper">

        <div class="user">
            <div class="photo">
                @if (isset(Auth::user()->profile))
                  @if (Auth::user()->profile->img_path != null)
                   <img src="{{url(Auth::user()->profile->img_path)}}">
                  @endif
                 @else
                  <img src="{{url('img/default-profile.png')}}">
                @endif
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        {{Auth::user()->name}}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="{{route('users.show', Auth::user()->id) }}">
                                <span class="sidebar-mini-icon">MP</span>
                                <span class="sidebar-normal">Mi Perfil</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('users.edit', Auth::user()->id) }}">
                                <span class="sidebar-mini-icon">EP</span>
                                <span class="sidebar-normal">Editar Perfil</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span class="sidebar-mini-icon"><i class="fa fa-times"></i></span>
                                <span class="sidebar-normal">Cerrar sesion</span>
                            </a>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <ul class="nav">
              <li class="">
                    <a href="">
                        <i class="fa fa-tachometer-alt"></i>
                      <p>Dashboard</p>
                    </a>
              </li>
              <li>
                    <a data-toggle="collapse" href="#clientes">
                        <i class="fa fa-user"></i>
                        <p>
                          Clientes <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="clientes">
                        <ul class="nav">

                          <li>
                              <a href="{{route('users.index')}}">
                                  <span class="sidebar-mini-icon"><i class="fa fa-user-circle"></i></span>
                                  <span class="sidebar-normal"> Todos los clientes</span>
                              </a>
                          </li>

                      </ul>
                  </div>
              </li>
              <li>
                    <a data-toggle="collapse" href="#ordenes">
                        <i class="fa fa-clipboard-list"></i>
                        <p>
                          Ordenes <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="ordenes">
                        <ul class="nav">

                          <li>
                              <a href="{{route('orders.index')}}">
                                  <span class="sidebar-mini-icon"><i class="fa fa-th-list"></i></span>
                                  <span class="sidebar-normal"> Todos las ordenes</span>
                              </a>
                          </li>

                      </ul>
                  </div>
              </li>
              <li>
                    <a data-toggle="collapse" href="#tickets">
                        <i class="fa fa-tag"></i>
                        <p>
                          Tickets <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="tickets">
                        <ul class="nav">

                          <li>
                              <a href="{{route('tickets.index')}}">
                                  <span class="sidebar-mini-icon"><i class="fa fa-tags"></i></span>
                                  <span class="sidebar-normal"> Todos los tickets</span>
                              </a>
                          </li>

                      </ul>
                  </div>
              </li>
              <li>
                    <a data-toggle="collapse" href="#platillos">
                        <i class="fa fa-utensils"></i>
                        <p>
                          Platillos <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="platillos">
                        <ul class="nav">

                          <li>
                              <a href="{{route('dishes.index')}}">
                                  <span class="sidebar-mini-icon"><i class="fa fa-utensils"></i></span>
                                  <span class="sidebar-normal"> Todos los platillos</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{route('categories.index')}}">
                                  <span class="sidebar-mini-icon"><i class="fa fa-certificate"></i></span>
                                  <span class="sidebar-normal"> Todas las categorias</span>
                              </a>
                          </li>

                      </ul>
                  </div>
              </li>
              <li>
                    <a data-toggle="collapse" href="#promos">
                        <i class="fa fa-bullhorn"></i>
                        <p>
                          Promociones <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="promos">
                        <ul class="nav">

                          <li>
                              <a href="{{route('tickets.index')}}">
                                  <span class="sidebar-mini-icon"><i class="fa fa-bullhorn"></i></span>
                                  <span class="sidebar-normal"> Todos las promociones</span>
                              </a>
                          </li>

                      </ul>
                  </div>
              </li>





        </ul>
    </div>
</div>
