<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="{{asset('css/img/icon.png')}}" rel="icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/dca5fddf5a.js" crossorigin="anonymous"></script>

    <title>SERVICES | Affiliate Website</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar bg-light navbar-light navbar-expand-lg">
        <div class="container-fluid">
            <a href="" class="navbar-brand">
                <img src="{{asset('css/img/icon.png')}}" alt="Logo" title="Logo">
            </a>
            <a href="{{url('/')}}" class="nav-link">
                <h4 class="text-left">{{$companyProfileManagement->indonesian}}<br>
                    <sub>
                        <h6 class="text-left">{{$companyProfileManagement->international}}</h6>
                    </sub>
                </h4>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"><span
                class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{url('/')}}" class="nav-link borderLeftRight">HOME</a></li>
                    <li class="nav-item"><a href="{{url('/services')}}" class="nav-link borderLeftRight">SERVICES</a></li>
                    <li class="nav-item"><a href="{{url('/blog')}}" class="nav-link borderLeftRight">BLOG</a></li>
                    <li class="nav-item"><a href="{{url('/companyProfile')}}" class="nav-link borderLeftRight">COMPANY PROFILE</a></li>
                    <li><a href="{{url('/profile')}}" class="nav-link"><button type="button" class="btn btn-primary slideUpBtn">MEMBER
                            AREA</button></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->
    <!-- Banner -->
    <div class="container">
        <div class="banner mt-5">
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12 mx-5 mt-5 text-left">
                            <h2>Become a member of this <br>growing community</h2>
                        </div>
                    </div>
                    <div class="row mx-5 mt-4 join">
                        <a href="{{url('/login')}}"><button type="button" class="btn btn-light">Join the Community</button></a>
                    </div>
                </div>
                <div class="col-sm-4 text-right test">
                    <img src="{{asset('storage/'.$photos->name)}}" alt="" class="w-75" style="width:341px;height:302px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Services -->
    <div class="services-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h1>PRODUK KAMI</h1>
                    <sub>
                        <h3>OUR SERVICES</h3>
                    </sub>
                </div>
            </div>
            <div class="services-product">
                <div class="row mt-5">
                @foreach($service as $s )
                    <div class="col-sm-4">
                        <a href="{{url('/detailServices/'.$s->id)}}" style="text-decoration: ;">
                            <img src="{{asset('storage/'.$s->photo)}}" alt="{{$s->title}}" style="object-fit: contain;" class="rounded"></a>
                        <a href="{{url('/detailServices/'.$s->id)}}" class="text-dark" style="text-decoration: none;">
                            <h4>{{$s->title}}</h4>
                        </a>
                        <a href="{{url('/detailServices/'.$s->id)}}" class="text-primary" style="text-decoration: none;">
                            <p>{{$s->trainer}}</p>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- End Services -->
    <!-- Start Footer -->
   <footer>
        <div class="footer">
            <div class="container-fluid mt-5">
                <div class="row px-5 py-5 mx-auto">
                    <div class="col-md-4 col-sm-4 col-xs-12 segment-one text-center">
                        <img src="img/icon.png" alt="" class="my-3">
                        <p>{{$companyProfileManagement->desc}}</p>
                        <div class="icon">
                            <div class="row">
                                <div class="col-12">
                                    <a href=""><i class="fab fa-facebook-square fa-2x"></i></a>
                                    <a href=""><i class="fab fa-twitter fa-2x"></i></a>
                                    <a href=""><i class="fab fa-instagram fa-2x"></i></a>
                                    <a href=""><i class="fab fa-youtube fa-2x"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End social media & Profile -->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 segment-two text-center">
                        <h2>Main Office</h2>
                        <div class="row text-center">
                            <div class="col-12">
                                <h5>Address</h5>
                                <p>{{$companyProfileManagement->address}}</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-12">
                                <h5>Phone</h5>
                                <p>{{$companyProfileManagement->phone}}</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-12">
                                <h5>Fax</h5>
                                <p>{{$companyProfileManagement->fax}}</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-12">
                                <h5>Email</h5>
                                <a href="">{{$companyProfileManagement->email}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 segment-three text-center">
                        <h2>Customer Service Centers</h2>
                        <div class="row text-center">
                            <div class="col-12">
                                <h5>Phone</h5>
                                <p>{{$companyProfileManagement->csphone}}</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-12">
                                <h5>Email</h5>
                                <a href="">{{$companyProfileManagement->csemail}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="copyright text-center">
                            Copyright &copy; 2021 <span> Alvin Dimas Satria</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>