<nav class="navbar navbar-expand-lg bg-white px-3">
    <div class="container-fluid">
        <a class="navbar-brand title fs-3 text-primary" href="{{route('home')}}">Market Place</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div class="ms-auto">
                @auth
                    <div class="dropdown">
                        <button class="btn btn-primary px-3 dropdown-toggle text-uppercase" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{Auth::user()->name}}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end rounded-4">
                            <li><a class="dropdown-item" href="{{route('create')}}"><i class="fa-solid fa-plus me-3"></i>Inserisci Annuncio</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user me-3"></i> Profilo utente</a></li>
                            <li><a class="dropdown-item" href="{{route('cart')}}"><i class="fa-solid fa-cart-shopping text-dark me-2"></i> Carrello</a></li>
                            <li>
                                <form action="{{route('logout')}}" method="POST" style="display: inline;">
                                    @csrf
                                    <button class="dropdown-item fw-bold text-danger"><i class="fa-solid fa-right-from-bracket text-danger me-2"></i>Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endauth

                @guest
                    <a href="{{route('register')}}" class="btn btn-outline-dark px-3 rounded-5">Sign up</a>
                    <a href="{{route('login')}}" class="btn btn-primary px-4 rounded-5 ms-3">Login</a>
                @endguest
            </div>
        </div>
    </div>
</nav>
