  
  
  <!DOCTYPE html>
  <html>

  <head>
      <meta charset="UTF-8">
      <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ trans('panel.site_title') }}</title>


      <link href="{{ asset('css/assets/bootstrap.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('css/assets/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('css/assets/fontawesome.css') }}" rel="stylesheet" />
      <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
      <link href="{{ asset('website/css/style.css') }}" rel="stylesheet" />
      @yield('styles')
  </head>



<section class="content">
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                
                        @foreach(App\Models\Menu::orderBy('id','asc')->get() as $menuItem)

                    {{-- @if( $menuItem->parent != 0 )
                            <li {{ $menuItem->slug ? 'class="nav-item dropdown"' : 'class="nav-item dropdown"' }}>
                            <a href="{{ $menuItem->children->isEmpty() ? $menuItem->slug : "#" }}"{{ $menuItem->children->isEmpty() ? '' : "class=dropdown-toggle data-toggle=dropdown role=button aria-expanded=false" }}>
                                {{ $menuItem->name }}
                            </a>
                        @endif --}}
                        @if ( $menuItem->parent == NULL)
                       
                        @if($menuItem->children->isNotEmpty())
                           <li class="nav-item dropdown">
                        <a   class="nav-link dropdown-toggle" href="{{ $menuItem->slug }}" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           {{ $menuItem->name }}
                        </a>
                        @if( ! $menuItem->children->isEmpty() )
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           @foreach($menuItem->children as $subMenuItem)
                                <a class="dropdown-item" href="{{ $subMenuItem->slug }}">{{ $subMenuItem->name }}</a>
                            @endforeach
                           
                        </div>
                          
                        @endif
                        @else
                       
                        @endif
                       
                    </li>
                    @elseif( $menuItem->parent ==$menuItem->id)
                    <li class="nav-item {{ $menuItem->children->isEmpty() ? "" : "dropdown" }}">
                        <a   class="nav-link {{ $menuItem->children->isEmpty() ? '' : 'dropdown-toggle' }}" href="{{ $menuItem->slug }}" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           {{ $menuItem->name }}
                        </a>
                        @if( ! $menuItem->children->isEmpty() )
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           @foreach($menuItem->children as $subMenuItem)
                                <a class="dropdown-item" href="{{ $subMenuItem->slug }}">{{ $subMenuItem->name }}</a>
                            @endforeach
                           
                        </div>
                          
                        @endif
                       
                    </li>
                   
                    @else
                      {{-- <li class="nav-item">
                        <a   class="nav-link" href="{{ $menuItem->slug }}" >
                           {{ $menuItem->name }}
                        </a>
                        </li> --}}
                    @endif
                    
                      
                        @endforeach
                                
                  
                </ul>

                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
      
        </div>
    </nav>
    <!-- /.container-fluid -->
</section>
 