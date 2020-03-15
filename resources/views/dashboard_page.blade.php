<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$title}}</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{url('/assets/library/bootstrap-4.4.1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/assets/style.css')}}">
    <link rel="stylesheet" href="{{url('/assets/library/highcharts-8.0.4/code/css/highcharts.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

    {{-- HEADER --}}
    <header>
        <nav id="nav-menu" class="navbar navbar-expand-md navabr-light bg light position-static navbar-company">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}">
                    <h2></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <section id="navabar-menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto"></ul>
                    <!-- <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/pages/about') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/pages/contact') }}">Contact</a></li>
                    </ul> -->

                <!-- {!!$nav_menu}; -->

                </section>
            </div>
        </nav>
    </header>
 

    {{-- CONTENT --}}
    <section class="bg-color-0">
        <div class="container">
            <div class="row align-items-center half-screen space">
                <div class="col-md-4 offset-md-4">
                    <h4>ID          :{{$session['id']}}</h4>
                    <h4>NAMA        :{{$session['nama']}}</h4>
                    <h4>USERNAME    :{{$session['username']}}</h4>
                    <h4>ROLE    :{{$session['role']}}</h4>
                    <a href="{{url('/sign-out')}}"><i class="btn btn-warning"></i>Sign Out</a>
                </div>
            </div>
        </div>

        <!-- <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Laporan Pendapatan
                </div>
                <div class="card-body">
                    <div id="grafik-pendapatan" style="height: 400px;"></div>
                </div>
            </div>
        </div> -->
    </section>


    {{-- FOOTER --}}
    <footer class="bg-color-1">
        <!-- <div class="container">
            <div class="row align-items-center space">
                <div class="col-md-4">
                    <h4>Title<h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid excepturi sed iusto aliquam, exercitationem quidem sequi assumenda, animi quia dolorum, dignissimos autem quibusdam quae eligendi fugiat veniam. Ab, nesciunt consequuntur.</p>
                </div>
                <div class="col-md-4">
                    <h4>Title<h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid excepturi sed iusto aliquam, exercitationem quidem sequi assumenda, animi quia dolorum, dignissimos autem quibusdam quae eligendi fugiat veniam. Ab, nesciunt consequuntur.</p>
                </div>
                <div class="col-md-4">
                    <h4>Title<h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid excepturi sed iusto aliquam, exercitationem quidem sequi assumenda, animi quia dolorum, dignissimos autem quibusdam quae eligendi fugiat veniam. Ab, nesciunt consequuntur.</p>
                </div>
                <div class="col-md-12 pt-4">
                    <p class ="copyright">
                        Copyright @ 2020 Corporate. All Right Reserved. Develop by <a href="">laracms</a>
                    </p>
                </div>
            </div>
        </div> -->
    </footer>

    {{-- JAVASCRIPT --}}
    <script src="{{url('/assets/library/jquery-3.4.1.js')}}"></script>
    <script src="{{url('/assets/library/bootstrap-4.4.1-dist/js/bootstrap.js')}}"></script>
    <script src="{{url('/assets/library/highcharts-8.0.4/code/highcharts.js')}}"></script>
    <script src="{{url('/assets/app.js')}}"></script>

</body>
</html>