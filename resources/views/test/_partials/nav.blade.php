<div class="card">
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                @if (isset($userName))
                    <li class="nav-item"><a class="nav-link" href="/sign-out">Logout</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="/sign-in">Login</a></li>
                @endif
            </ul>
        </div>
    </div>
    </nav>
</div>
