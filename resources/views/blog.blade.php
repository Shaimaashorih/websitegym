<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <!-- link css -->
    <link rel="stylesheet" href="{{URL::asset('src/css/dist/normaliz.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('src/css/dist/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('src/css/dist/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('src/css/dist/main.css')}}" />
    <!-- icons script -->
    <script src="https://kit.fontawesome.com/92c7a83d65.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- start header -->
    <header class="header">
        <!-- start  social-info -->
        <div class="inf social">
            <!-- start container -->
            <div class="container">
                @foreach ($general_settings as $item)

                <div class="d-flex row wrap">
                      <a href="https://api.whatsapp.com/send?phone=2{{$item->phone2}}&amp;text=hi" class=""><i
                      class="fa-solid fa-phone l"></i>{{$item->phone2}}</a>
                  <a href="mailto:{{$item->email2}}" class=""><i class="fa-solid fa-envelope l"></i>{{$item->email2}}</a>
                </div>
        
                <div class="d-flex row wrap">
                  <p>Folow In :</p>
                  <a href="{{$item->facebook}}"><i class="fa-brands fa-facebook-f i"></i></a>
                  <a href="{{$item->instegram}}"><i class="fa-brands fa-instagram i"></i></a>
                </div>
                @endforeach

            </div>
            <!-- end container -->
        </div>
        <!-- end social-info  -->
        <!-- start navBar -->
        <div class="nav">
            <!-- start log -->
            @foreach ($general_settings as $item)
     
            <div class="log">
                <img src="{{URL::asset('images').'/'.$item->logo_path}}" alt="Logo" />
            </div>
                
            @endforeach
            <!-- end logo -->

            <button class="nav-op" onclick="nav_op(this)">
                <i class="fa-solid fa-bars"></i>
            </button>

            <nav class="navBar">
                <a href="{{'/home'}}" >Home</a>
                <a href="{{'/about'}}">about us</a>
                <a href="{{'/courses'}}">courses</a>
                <a href="{{'/schedule'}}">schedule</a>
                <a href="{{'/blog'}}">Blog</a>
                
                <a href="{{'/contact'}}">contact us</a>
                <br>
                <span>|</span>
                <a href="{{'/login'}}">Login</a>
              </nav>
        </div>
        <!-- end navBar -->
    </header>
    <!-- start header -->

    <!-- start landing -->
    <div class="landing normal">
        <!-- start container -->
        <div class="container">

            <h1 data-line="" class="c-white">
                BLOG
                <br>
                <span class="font-w300">Bulding A Communti For ATHLETIC WOMEN</span>
            </h1>

        </div>
        <!-- end container -->
        <!--start  landing bg -->
        <div class="overlay-img bg">
            <img src="{{URL::asset('src/image/sport-2792995_1920.jpg')}}" alt="">
        </div>
        <!--end  landing bg -->
    </div>
    <!-- end landing -->


    <!-- start blog-section -->
    <div class="section blog-section">
        <!-- start container -->
        <div class="container d-flex row wrap gap-20">

            <div class="part1 grid-content d-grid repeat-1 gap-20 f-b66">

                <!-- start card -->
                <div class="card">

                    <img src="{{URL::asset('src/image/template3.png')}}" alt="">

                    <p class="c-dark font-w600">Lorem ipsum dolor sit amet consectetur.</p>

                    <div class="d-flex row align-center gap-20">

                        <a href="#comments" class="comments c-black">
                            <i class="fa-solid fa-comments c-main"></i>
                            Comments
                        </a>

                    </div>

                    <p class="c-font">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam dolores
                        accusantium
                        quaerat asperiores debitis, nihil odit laudantium quo animi iste?</p>
                    <div class="d-flex row wrap justify-space-between">
                        <a href="#" class="c-black font-w600">Read More
                            <i class="fa-solid fa-arrow-right c-main"></i>
                        </a>

                        <div class="d-flex row wrap gap-5 align-center">
                            <span>Share :</span>
                            <a href="#" class="ic"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="ic"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- start prev & next part -->
                <div class="prev-next-container">
                    <div class="d-flex">
                        <button href="#" id="btn-prev" class="c-dark">
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>
                        <div class="numbers-continer">
                            <button>1</button>
                            <button>2</button>
                            <button>3</button>
                        </div>
                        <button href="#" id="btn-next" class="c-dark"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    <p class="c-font">Page <span id="page">2 / 4</span></p>
                </div>
                <!-- end prev & next part -->
            </div>
            <!-- end grid-content -->
            <!-- start  part2 -->
            <div class="part2 f-b33">

                <div class="d-flex column gap-20">

                    <!-- start card -->
                    <div class="card">
                        <form action="" method="get">

                            <div class="input-group">
                                <input type="text" class="form-control">
                                <button class="search-btn">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>

                        </form>

                    </div>
                    <!-- end card -->
                    <!-- start card -->
                    <div class="card">
                        <div class="top-title b-main padding-5">
                            <h2 class="c-white">
                                CATEGORIES
                            </h2>
                        </div>
                        
                        <details class="d-flex column">
                            <summary>title</summary>
                            <a href="#">tags</a>
                            <a href="#">tags</a>
                            <a href="#">tags</a>
                        </details>
                    </div>
                    <!-- end card -->
                    <!-- start card -->
                    <div class="card">
                        <div class="top-title b-main padding-5">
                            <h2 class="c-white">
                                POPELAR TAGS
                            </h2>
                        </div>
                        
                        <div class="d-flex row gap-20 wrap  tags">
                            <a href="#">Tag1 </a>
                            <a href="#">Tag2 </a>
                            <a href="#">Tag3 </a>
                        </div>
                    
                    </div>
                    <!-- end card -->

                </div>

            </div>
            <!-- end part2 -->
        </div>
        <!-- start container -->
    </div>
    <!-- end blog-section -->



    <!-- start footer -->
    <footer class="footer section">
        <!-- start container -->
        <div class="container">
            @foreach($general_settings as $item)
            <!-- start logo -->
            <div class="logo">
                <img src="{{URL::asset('images').'/'.$item->logo_path}}" alt="Logo" />
            </div>
            <!-- end logo -->
            @endforeach
      
            <!-- start links -->
            <div class="links">
              <a href="{{'/home'}}">Home</a>
              <a href="{{'/about'}}">about us</a>
              <a href="{{'/courses'}}">courses</a>
              <a href="{{'/schedule'}}">schedule</a>
              <a href="{{'/blog'}}">Blog</a>
              <a href="{{'/dashboard'}}">DashBord</a>
              <a href="{{'/contact'}}">contact us</a>
              <br>
              <span>|</span>
              <a href="{{url('/login')}}">Login</a>
             
            </div>
            <!-- end links -->

            <!-- start form -->

            <form class="form">

                <div class="input-group">
                    <input type="email" class="" placeholder="Enter Your Email...">
                    <button type="submit"><i class="fa-solid fa-hand-fist"></i></button>
                </div>

            </form>

            <!-- end form -->

            <!-- start social -->
            @foreach ($general_settings as $item)

            <!-- start social -->
            <ul class="social d-flex row wrap justify-center gap-20">
              <li class="title">
                <h3 class="">Folow Us On</h3>
              </li>
              <li>
                <a href="{{$item->facebook}}">
                  <i class="fa-brands fa-facebook-f i"></i>
                </a>
              </li>
              <li>
                <a href="{{$item->instegram}}">
                  <i class="fa-brands fa-instagram i"></i>
                </a>
              </li>
              <li>
                <a href="{{$item->twitter}}">
                  <i class="fa-brands fa-twitter"></i>
                </a>
      
              </li>
            </ul>
            <!-- end social -->
          @endforeach
            <!-- end social -->

            <!-- start copyRight -->
            <div class="copyRight">
                <p>@2023 Copy right</p>
            </div>
            <!-- end copyRight -->

        </div>
        <!-- end container -->
        <div class="overlay"></div>
    </footer>
    <!-- end  footer -->

    <script src="{{URL::asset('src/js/jquery-3.6.0.js')}}"></script>
    <script src="{{URL::asset('src/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('src/js/main.js')}}"></script>
</body>

</html>