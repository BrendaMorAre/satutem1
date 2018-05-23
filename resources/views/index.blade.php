<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<script type="text/javascript" src="/js/app.js"></script>

<nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">SAT UTeM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- left navigation links -->
            <ul class="navbar-nav mr-auto">

                <!-- active navigation link -->
                <li class="nav-item active">
                    <div class="dropdown">
                        <button class="dropbtn">Declaraciones</button>
                        <div class="dropdown-content">
                            <a><strong>Provisionales o definitivas</strong></a>
                            <a href="{{ url('/home') }}">Mensuales</a>
                        </div>
                    </div>
                </li>
            </ul>

            <!-- right navigation link -->
            <!--<ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>-->
        </div>
    </div>
</nav>