<header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img class="navbar-brand" id="logo" src="/images/logo.jpg"  href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav botonbuscar" href="{{ url ('/') }}">Inicio </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Ofertas</a>
      </li>
      <li class="nav-item">
      <a href="" class="nav botonbuscar"><i class="fas fa-shopping-cart"></i></a>
    </li>


    @if (Route::has('login'))
           @auth
               <li class="nav-item dropdown">
                   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       {{ Auth::user()->name }} <span class="caret"></span>
                   </a>

                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('perfil') }}"> Perfil

                                            </a>
 <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
  document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                       </a>




                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           {{ csrf_field() }}
                       </form>
                   </div>
               </li>
           @else
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('login') }}">Login</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('register') }}">Register</a>
               </li>
           @endauth
       @endif


    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Nombre del producto" aria-label="Search">
      <button class="botonbuscar" type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>
</nav>
