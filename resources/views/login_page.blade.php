<head>
<title>{{$title}}</title>

{{-- CSS --}}
    <link rel="stylesheet" href="{{url('/assets/library/bootstrap-4.4.1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/assets/style.css')}}">
    <link rel="stylesheet" href="{{url('/assets/library/highcharts-8.0.4/code/css/highcharts.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>
<section class="bg-color-0">
        <div class="container">
            <div class="row align-items-center half-screen space">
                <div class="col-md-4 offset-md-4">
                    <form action="{{url('/login/action')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Tulis email disini"><br>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Tulis password disini"><br>
                        </div>

                        <input type="submit" value="Login" class="btn btn-success btn-block"/>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </body>