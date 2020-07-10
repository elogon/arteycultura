<button type="button" class="btn btn-dark btn-menu" data-toggle="modal" data-target="#modalMenu">Menu <i class="fa fa-chevron-right"></i></button>

    <div class="modal left fade" id="modalMenu" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-menu">
                <div class="modal-body">
                    <div class="nav flex-sm-column flex-row">
                    	<a class="item-center img-menu rounded-circle">
                          <img class="rounded-circle" src="{{ asset(Auth::user()->photo) }}" width="140" height="140">
                        </a>
                        <a href="#" class="nav-item nav-link item-center item-name item-color-text">{{ Auth::user()->fullname.' '.Auth::user()->fullname }}</a>
                        <a href="#" class="nav-item nav-link item-color-text item-left item-home"><i class="fa fa-home"></i>  Inicio</a>
                        <a href="{{url('account')}}" class="nav-item nav-link item-color-text item-left"><i class="fa fa-user"></i>  Mi Cuenta</a>
                        <a href="{{url('users')}}" class="nav-item nav-link item-color-text item-left"><i class="fa fa-users"></i>  Módulo Usuarios</a>
                        <a href="{{url('categories')}}" class="nav-item nav-link item-color-text item-left"><i class="fa fa-layer-group"></i>  Módulo Categorias</a>
                        <a href="{{url('cultural_events')}}" class="nav-item nav-link item-color-text item-left"><i class="fa fa-calendar-check"></i>  Módulo Eventos</a>
                        <a href="{{url('quarters')}}" class="nav-item nav-link item-color-text item-left"><i class="fa fa-calendar"></i>  Módulo Trimestres</a>
                        <a href="{{url('training_programs')}}" class="nav-item nav-link item-color-text item-left"><i class="fa fa-list"></i>  Módulo Programas de Formación</a>
                        <a href="{{url('publications')}}" class="nav-item nav-link item-color-text item-left"><i class="fa fa-list"></i>  Módulo Publicaciones</a>
                        <a href="{{url('research_seedbeds')}}" class="nav-item nav-link item-color-text item-left"><i class="fa fa-list"></i>  Módulo Semilleros</a>


                        
                        
                        <a href="#" class="nav-item nav-link item-color-text item-left"><i class="fa fa-sign-out-alt"></i>  Cerrar Sesion</a>
                </div>
            </div>
        </div>
    </div>
</div>