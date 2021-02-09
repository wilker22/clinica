<div class="page-wrap">
    <div class="app-sidebar colored">
        <div class="sidebar-header">
            <a class="header-brand" href="{{url('/doctor')}}">
                <div class="logo-img">
                   <!--<img src="{{asset('template/src/img/brand-white.svg')}}" class="header-brand-img" alt="lavalite">-->
                </div>
                <span class="text">Clínica v1.0</span>
            </a>
            <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
            <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
        </div>

        <div class="sidebar-content">
            <div class="nav-container">
                <nav id="main-menu-navigation" class="navigation-main">
                    <div class="nav-lavel">Opções</div>
                    <div class="nav-item active">
                        <a href="{{url('dashboard')}}"><i class="ik ik-bar-chart-2"></i><span>Painel</span></a>
                    </div>
                    <!--<div class="nav-item">
                        <a href="pages/navbar.html"><i class="ik ik-menu"></i><span>Navigation</span> <span class="badge badge-success">New</span></a>
                    </div>-->
                    @if(auth()->check() && auth()->user()->role->name == 'admin')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Departamentos</span> <!--<span class="badge badge-danger">150+</span>--></a>
                            <div class="submenu-content">
                                <a href="{{route('department.index')}}" class="menu-item">Listar</a>
                                <a href="{{route('department.create')}}" class="menu-item">Criar</a>
                            </div>
                        </div>
                    @endif

                    @if(auth()->check() && auth()->user()->role->name == 'admin')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Médicos</span> <!--<span class="badge badge-danger">150+</span>--></a>
                            <div class="submenu-content">
                                <a href="{{route('doctor.index')}}" class="menu-item">Listar</a>
                                <a href="{{route('doctor.create')}}" class="menu-item">Criar</a>
                            </div>
                        </div>
                    @endif

                    @if(auth()->check() && auth()->user()->role->name == 'doctor') 
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Médicos - Agendamentos</span></a>
                            <div class="submenu-content">
                                <a href="{{ route('appointment.create') }}" class="menu-item">Criar</a>
                                <a href="{{ route('appointment.index') }}" class="menu-item">Confirmar</a>
                            </div>
                        </div>
                    @endif
                    
                    @if(auth()->check() && auth()->user()->role->name == 'admin')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Pacientes - Agendamentos</span></a>
                            <div class="submenu-content">
                                <a href="{{ route('patient') }}" class="menu-item">Agendamentos Hoje</a>
                                <a href="{{ route('all.appointments') }}" class="menu-item">Todos Agendamentos</a>
                            </div>
                        </div>
                    @endif

                    @if(auth()->check() && auth()->user()->role->name == 'doctor')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Pacientes</span></a>
                            <div class="submenu-content">
                                <a href="{{ route('patients.today') }}" class="menu-item">Pacientes(Hoje)</a>
                                <a href="{{ route('prescribed.patients') }}" class="menu-item">Pacientes(Prescrições)</a>
                            </div>
                        </div>
                    @endif

                    <div class="nav-item active">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                                                 document.getElementById('logout-form').submit();">
                                        
                            <i class="ik ik-power dropdown-icon"></i>
                            <span>Sair</span>
                        </a>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                            
                        </form>
                    </div>

                </nav>
            </div>
        </div>
    </div>
