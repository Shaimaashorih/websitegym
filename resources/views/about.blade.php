<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
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
                About Us
                <br>
                <span class="font-w300">Buldin A Community For ATHLETIC WOMEN</span>
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


    <!-- start about-section -->

    <div class="section about-section">
        <!-- start container -->
        <div class="container d-grid repeat-2">

            <div class="part part1">
                <img src="{{URL::asset('src/image/template.png')}}" class="shadow" alt="">
            </div>

            <div class="part part2">
                <h1 data-line class="font-w900 font-size50">
                    About Us
                    <br>
                    <span class="font-w300 font-size30">The Pest GYM</span>
                </h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt perspiciatis ipsum sit assumenda
                    voluptas,
                    error blanditiis, architecto, reprehenderit corporis nihil quas libero sint beatae. Ad nesciunt in
                    temporibus
                    facere quod.
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam suscipit voluptatibus corporis
                    commodi
                    ratione vitae inventore quae tempora aut facilis!
                </p>
                <br>
                <button class="main-btn font-size24">Read More</button>
            </div>

        </div>
        <!-- end contaienr -->
    </div>

    <!-- end about-section -->

    <!--start counter-section -->
    <div class="section counter-section">
        <div class="container">

            <div class="d-flex gap-20 row wrap">


                <!-- start card -->
                <div class="card f-b25 d-flex column align-center">
                    <p>
                        <i class="fa-regular fa-face-smile"></i>
                    </p>
                    <span class="c-main">11</span>
                    <p class="c-white">
                        Days WorkHard
                    </p>
                </div>
                <!-- end card -->


                <!-- start card -->
                <div class="card f-b25 d-flex column align-center">

                    <p>
                        <i class="fa-solid fa-mug-hot"></i>
                    </p>

                    <span class="c-main">30</span>
                    <p class="c-white">
                        project finshid
                    </p>
                </div>
                <!-- end card -->


                <!-- start card -->
                <div class="card f-b25 d-flex column align-center">

                    <p>
                        <i class="fa-solid fa-dumbbell"></i>
                    </p>
                    <span class="c-main">55</span>
                    <p class="c-white">
                        cuffi cup
                    </p>
                </div>
                <!-- end card -->


                <!-- start card -->
                <div class="card f-b25 d-flex column align-center">

                    <p>
                        <i class="fa-solid fa-award"></i>
                    </p>

                    <span class="c-main">66</span>
                    <p class="c-white">
                        Client serv
                    </p>
                </div>
                <!-- end card -->


            </div>

        </div>
        <div class="overlay"></div>
    </div>
    <!--end counter-section -->

    <!-- start testimonial-section -->
    <div class="section testimonial-section">
        <!-- start container -->
        <div class="container">
            <!-- start top-title -->
            <div class="top-title d-grid repeat-22">
                <div>
                    <h1 data-line="">
                        TESTIMONIAL WHAT <br>
                        <span class="font-w300 font-size20">
                            CLIENTS SAY
                        </span>
                    </h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti provident nam blanditiis
                        molestias quam
                        ex
                        sunt officiis adipisci accusantium optio.</p>
                </div>
            </div>
            <!-- end top-title -->

            <!-- start grid-content -->
            <div class="grid-content d-grid repeat-2 gap-40">

                <!-- start card -->
                <div class="card d-flex column align-center padding-20">
                    <img src="{{URL::asset('src/image/template12.png')}}" alt="">
                    <p class="c-dark">
                        Marker Divid
                    </p>
                    <span class="c-main font-size40">
                        <i class="fa-solid fa-quote-left"></i> </span>
                    <p class="c-font">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus molestias ipsam aperiam
                        dolorum cum sequi ea aut exercitationem illum qui sunt velit, eos, quae saepe dolores repellat
                        unde officiis minus.
                    </p>
                </div>
                <!-- end card -->
                <!-- start card -->
                <div class="card d-flex column align-center padding-20">
                    <img src="{{URL::asset('src/image/template13.png')}}" alt="">
                    <p class="c-dark">
                        Divid Marker
                    </p>
                    <span class="c-main font-size40">
                        <i class="fa-solid fa-quote-right"></i>
                    </span>
                    <p class="c-font">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus molestias ipsam aperiam
                        dolorum cum sequi ea aut exercitationem illum qui sunt velit, eos, quae saepe dolores repellat
                        unde officiis minus.
                    </p>
                </div>
                <!-- end card -->

            </div>
            <!-- end grid-content -->
        </div>
        <!-- end-container -->
    </div>
    <!-- end testimonial-section -->


    <!-- start TRAINERS-section -->
    <div class="trainers-section section">
        <div class="container">
            <!-- start  top title -->
            <div class="top-title d-grid repeat-2 ">
                <div></div>
                <div>
                    <h1 data-line="">
                        TRAINERS
                        <br>
                        <span class="font-w300 font-size20">For ATHLETIC WOMEN</span>
                    </h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti provident nam blanditiis
                        molestias quam
                        ex
                        sunt officiis adipisci accusantium optio.</p>
                    <br>
                </div>
            </div>
            <!-- end top title -->

            <!-- start grid-content -->
            <div class="grid-content d-grid repeat-3 gap-20">

                <!-- start card -->
                <div class="card">
                    <img src="{{URL::asset('src/image/template8.png')}}" class="clip" alt="">
                    <h2 class="c-main">name</h2>
                    <p class="c-black">Jop</p>
                </div>
                <!-- end card -->

                <!-- start card -->
                <div class="card">
                    <img src="{{URL::asset('src/image/template8.png')}}" class="clip" alt="">
                    <h2 class="c-main">name</h2>
                    <p class="c-black">Jop</p>
                </div>
                <!-- end card -->

                <!-- start card -->
                <div class="card">
                    <img src="{{URL::asset('src/image/template8.png')}}" class="clip" alt="">
                    <h2 class="c-main">name</h2>
                    <p class="c-black">Jop</p>
                </div>
                <!-- end card -->

            </div>
            <!-- end  grid-content -->

        </div>
        <!--  end container-->
    </div>
    <!-- end TRAINERS-section -->

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
              <a href="{{'/dashboardadmin'}}">Admin Dash Bord</a>
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