<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SGIWEB - Sistema de Gestão Integrada</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

                @if (Route::has('login'))

                    @if (Auth::check())
                        <li>  <a href="{{ url('/home') }}">Página Inicial</a></li>

                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                                Finalizar Sessão!
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>



                    @else
                        <li> <a href="{{ url('/login') }}">Login</a></li>
                        <li> <a href="{{ url('/register') }}">Registrar</a></li>




                    @endif

                @endif
            </ul>


        </div>
    </div>


</nav>