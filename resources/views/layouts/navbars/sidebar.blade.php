<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="https://argon-dashboard-pro-laravel.creative-tim.com/dashboard">
                <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block active" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        @php
        $module_auths= auth()->user()->whatModule(auth()->user()->id);                
    @endphp
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">       
                 <!-- Divider -->
                 <hr class="my-3">
                <!-- Nav items -->
                <ul class="navbar-nav">
                        @foreach ($module_auths as $key=>$valor)
                        @if ($key=="0")

                        <li class="nav-item">
                                <a class="nav-link collapsed" href="#navbar-{{$key}}" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                                    <i class="{{$valor->icon_module}}"></i>
                                    <span class="nav-link-text">{{$valor->module_description}}</span>
                                </a>
                            <div class="collapse" id="navbar-{{$key}}">
                                        <ul class="nav nav-sm flex-column">                                

                          {{-- <li class="treeview">
                                <a href="#">                  
                                  <i class="{{$valor->icon_module}}"></i> <span>{{$valor->module_description}}</span>      
                                  <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                  </span>
                                </a>
                                <ul class="treeview-menu"> --}}
                        @else
                          @if ($valor->module_id != $module_auths[$key-1]->module_id)
                          <li class="nav-item">
                                <a class="nav-link collapsed" href="#navbar-{{$key}}" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                                    <i class="{{$valor->icon_module}}"></i>
                                    <span class="nav-link-text">{{$valor->module_description}}</span>
                                </a>
                                <div class="collapse" id="navbar-{{$key}}">
                                        <ul class="nav nav-sm flex-column">             
                          @endif
                        @endif
                        @if ($key=="0")
                        <li class="nav-item">
                            <a href="{{ route($valor->route) }}" class="nav-link">{{$valor->module_option_description}}</a>
                        </li>
                          {{-- <li>
                            <a href="{{ route($valor->route)}}"><i class="{{$valor->icon_module_option}}"></i>{{$valor->module_option_description}}</a>
                          </li>                   --}}
                        @else
                          @if ($valor->module_option_id != $module_auths[$key-1]->module_option_id)
                          <li class="nav-item">
                                <a href="{{ route($valor->route) }}" class="nav-link">{{$valor->module_option_description}}</a>
                            </li>                     
                          @endif                  
                        @endif
                        @if ( ($module_auths->count() - 1) == ($key))
                                </ul>
                            </div>
                          </li>
                        @else
                          @if ($valor->module_id != $module_auths[$key+1]->module_id)
                                </ul>
                            </div>
                        </li>
                          @endif                  
                        @endif
                      @endforeach   
                </ul>
                
                
            </div>
        </div>
    </div>
</nav>