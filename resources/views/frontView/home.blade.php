<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="{{asset('css/img/icon.png')}}" rel="icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/testimonial.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/dca5fddf5a.js" crossorigin="anonymous"></script>

  <title>HOME | Affiliate Website</title>
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
  <!-- end Navigation -->
  <!-- Image Carousel -->

  <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
    <ol class="carousel-indicators">
      <i class="bi bi-circle"></i>
      @foreach($photo as $data)
      <li data-target="#carouselExampleIndicators" data-slide-to="{{$data->id}}" class="active"><i class="bi bi-circle"></i></li>
      @endforeach
    </ol>
    <!--Carousel Content  -->
    <div class="carousel-inner">
    @foreach($photo as $p)
      <div class="carousel-item @if($loop->first) active @endif">
        <img src="{{asset('storage/'.$p->photo)}}" alt="" class="w-100">
        <div class="carousel-caption">
          <div class="container">
            <div class="row justify-content-start text-left">
              <div class="col-sm-8 bg-custom d-none d-lg-block py-3 px-0 pl-3">
                <h3>{{$p->title}}</h3>
                <p class="lead">{{$p->hlcontent}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    </div>
    <!-- end Carousel Content -->

    <!-- Previous & Next Buttons -->
    <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="fas fa-chevron-left fa-2x"></span>
    </a>
    <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
      <span class="fas fa-chevron-right fa-2x"></span>
    </a>
    <!-- end Previous & Next Buttons -->
  </div>
  <!-- End Image Carousel -->

  <!-- Main Page Heading -->
  <div class="col-sm-12 text-center mt-5">
    <h1 class="text-dark pt-4">JASA OPERASI PENERBANGAN</h1><sub>
      <h4 class="text-dark pt-4">{{$companyProfileManagement->international}}</h4>
    </sub>
    <div class="border-top border-primary w-25 mx-auto my-3"></div>
    <p class="lead">{{$companyProfileManagement->motto}}</p>
  </div>
  <!-- end of Perusahaan Tag -->
  <div class="ceo-profile">
    <div class="container">
      <div class="row my-5">
        <div class="col-sm-6 text-center">
          <img src="{{asset('storage/'.$companyProfileManagement->photo)}}" alt="" class="w-50">
        </div>
        <div class="col-sm-6 text-left">
          <h1 class="ceo-name">{{$companyProfileManagement->ceoname}}</h1>
          <p class="ceo-quote">{{$companyProfileManagement->ceoquote}}</p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Main Page -->

  <!-- our services -->
  <div class="ourservices">
    <div class="container-sm">
      <div class="row my-5">
        <div class="col-sm-12 my-5">
          <h1>Produk Kami</h1>
          <hr>
          <sub>
            <h3>Our Services</h3>
          </sub>
        </div>
        @foreach($service as $s)
        <div class="row">
          <div class="col-sm-4 mx-2 gambar">
            <a href="">
              <img src="{{asset('storage/'.$s->photo)}}" style="width:530px; height:380px;" alt="">
            </a>
            <a href="">
              <h3 style="width:500px;" class="justify-align-start">{{$s->title}}</h3>
              <p class="lead" style="width:500px;">{{$s->shortdesc}}</p>
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- End Our Services -->
    
  <!-- Customer Testimonial -->
  <div class="owl-carousel owl-theme">
      @foreach($gallery as $g)
    <div class="item">
      <img src="{{asset('storage/'.$g->photo)}}" alt="" class="w-100" style="object-fit:contain;">
    </div>
       @endforeach
  </div>
  <!-- end Customer Testimonial -->

  <!-- Blog -->
  <div class="blog">
    <div class="container mt-5">
      <h1>Blog Kami</h1>
      <hr>
      <sub>
        <h3 class="mb-3">Our Blog</h3>
      </sub>
      <div class="row mx-auto">
        <!-- start item blog -->
        @foreach($blogManagement as $b)
        <div class="col-sm-6 col-6">
          <a href="{{url('/detailBlog/'.$b->id)}}">
            <img src="{{asset('storage/'.$b->photo)}}" style="width:500px; height:300px;" alt="">
            <h4>{{$b->title}}</h4>
            <p>{{$b->desc}}</p>
          </a>
        </div>
        @endforeach
        <!-- end looping -->
      </div>
    </div>
  </div> <!-- Start Footer -->
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
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="jquery-3.5.1.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/testimonial.js"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    })
  </script>
  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>