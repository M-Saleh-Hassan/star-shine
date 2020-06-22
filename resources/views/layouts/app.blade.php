<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <!-- link fontawesome -->
  <link rel="stylesheet" href="{{asset('/css/all.min.css')}}">
  <!-- link Normalize -->
  <link rel="stylesheet" href="{{asset('/css/normalize.css')}}">
  <!-- link bootstrap -->
  <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
  <!-- link Skitter -->
  <link rel="stylesheet" href="{{asset('/css/skitter.css')}}">
  <!-- link Owl carousel, Owl theme -->
  <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css')}}">
  <!-- link app-style -->
  <link rel="stylesheet" href="{{asset('/css/app.css')}}">

  <!-- Link Oxygen font -->
  <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Header -->
  <header>
    <!-- <div class="topbar">
      <div class="container">
        <ul>
          <li>
            <i class="fas fa-phone"></i> +1 212-946-2707
          </li>
          <li>
          <i class="far fa-clock"></i> 7am - 11pm
          </li>
        </ul>
  
        <ul>
          <li>
            <i class="fab fa-facebook-f"></i>
          </li>      
          <li>
            <i class="fab fa-twitter"></i>
          </li>
          <li>
            <i class="fab fa-instagram"></i>
          </li>
          <div class="lang-switch">
            <a href="#" class="current-lang">
              <img src="{{asset('/images/english.png')}}" alt="" style="width: 24px;"> English
            </a>
            <div class="sub-menu">
              <a href="#">
                <img src="{{asset('/images/egypt-min.png')}}" alt="" style="width: 24px;"> العربية
              </a>
            </div>
          </div>
        </ul>
      </div>
    </div> -->

    <nav class="lg-navbar">
      <div class="container">
        <div class="logo">
          <img src="{{asset('/images/2.png')}}" alt="">
        </div>
  
        <ul>
          <li>
            <a class="nav-link" href="{{url('/')}}">Home</a>
          </li>
          <li>
            <a class="nav-link" href="{{url('about')}}">About</a>
          </li>
          <li>
            <a class="nav-link" href="{{url('services')}}">Services</a>
          </li>
          <li>
            <a class="nav-link" href="{{url('gallery')}}">Gallery</a>
          </li>
          <li>
            <a class="nav-link" href="{{url('projects')}}">Our Work</a>
          </li>
          <li>
            <div class="lang-switch">
              <a href="#" class="current-lang">
                <img src="{{asset('/images/english.png')}}" alt="" style="width: 24px;"> English
              </a>
              <div class="sub-menu">
                <a href="#">
                  <img src="{{asset('/images/egypt-min.png')}}" alt="" style="width: 24px;"> العربية
                </a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <nav class="sm-navbar">
      <div class="container">
        <div class="logo">
          <img src="{{asset('/images/SSTlogo-min.png')}}" alt="">
        </div>
        <div class="toggler">
          <span class="toggler-btn"></span>
        </div>
        <div class="menu-container">
          <ul>
            <span class="close">
              <i class="fas fa-times"></i>
            </span>
            <li>
              <a class="nav-link active" href="{{url('/')}}">Home</a>
            </li>
            <li>
              <a class="nav-link" href="{{url('about')}}">About</a>
            </li>
            <li>
              <a class="nav-link" href="{{url('services')}}">Our Programs</a>
            </li>
            <li>
              <a class="nav-link" href="{{url('gallery')}}">Gallery</a>
            </li>
            <li>
              <a class="nav-link" href="{{url('projects')}}">Our Work</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  @yield('pageHeader')
  @yield('pageContent')

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 my-3">
          <div class="about">
            <h4>About Us</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio ad, eveniet vel distinctio dolor eos!</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 my-3">
          <div class="hours">
            <h4>Working Hours</h4>
            <ul>
              <li>Mon-Thu: 8:00 - 17:00</li>
              <li>Fri: 8:00 - 19:00</li>
              <li>Sat: 11:00 - 14:00</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 my-3">
          <div class="pages">
          <h4>Pages</h4>
            <ul>
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">About</a>
              </li>
              <li>
                <a href="#">Our work</a>
              </li>
              <li>
                <a href="#">Gallery</a>
              </li>
              <li>
                <a href="#">Projects</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 my-3">
          <div class="info">
            <h4>Contact</h4>
            <ul>
              <li>
                <span><i class="fa fa-phone-alt"></i></span>
                01091475936
              </li>
              <li>
                <span><i class="fas fa-map-marker-alt"></i></span>
                758 Lorem ipsum dolor sit amet consectetur
              </li>
              <li>
                <span><i class="fas fa-envelope"></i></span>
                info@SST.com
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>  
  </footer>




  <!-- jQuery -->
  <script src="{{asset('/js/jquery-3.4.1.js')}}"></script>
  <script src="{{asset('/js/jquery.easing.1.3.js')}}"></script>
  <!-- Popper -->
  <script src="{{asset('/js/popper.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('/js/bootstrap.min.js')}}"></script>
  <!-- link Owl carousel -->
  <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
  <!-- Link Skitter Slider -->
  <script src="{{asset('/js/jquery.skitter.min.js')}}"></script>
  <!-- main -->
  <script src="{{asset('/js/app.js')}}"></script>
</body>
</html>







<!-- 
  FontAwesome 
<i class="fas fa-phone"></i>
<i class="fas fa-envelope-open"></i>
<i class="fas fa-map-marker-alt"></i>
<i class="fab fa-facebook-f"></i>
<i class="fab fa-twitter"></i>
<i class="fab fa-linkedin-in"></i>
<i class="fab fa-instagram"></i>
<i class="fab fa-vimeo"></i>
<i class="far fa-check-circle"></i>
<i class="far fa-clock"></i>
<i class="fab fa-youtube"></i>
<i class="fas fa-envelope"></i>
<i class="fas fa-angle-up"></i>
 -->