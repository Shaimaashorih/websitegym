<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
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
                CONTACT US
                <br>
                <span class="font-w300">Buld A Community For ATHLETIC WOMEN</span>
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

    <!-- start section  -->
    <div class="section">
        <div class="container d-grid gap-20">

            <!-- start info card -->
            <div class="info d-flex row align-center justify-center gap-20 wrap">

                <div class="address d-flex row wrap align-center gap-5 f-b33">
                    <span class="c-main info-ic">
                        <i class="fa-solid fa-location-dot"></i>
                    </span>
                    <div class="d-flex column gap-5">
                        <p class="c-font font-w500">1700 50 newYork main city</p>
                    </div>
                </div>

                <div class="numbers d-flex row wrap align-center  gap-5 f-b33">

                    <span class="c-main info-ic">
                        <i class="fa-solid fa-phone"></i>
                    </span>
                    <div class="d-flex column ">
                        <p class="c-font"> +10 01055566622
                            <br> info@mail.com
                        </p>
                    </div>
                </div>

                <div class="time d-flex row wrap align-center  gap-5 f-b33">
                    <span class="c-main info-ic">
                        <i class="fa-regular fa-calendar-days"></i>
                    </span>
                    <div class="d-flex column gap-5">
                        <p class="c-font">10:00 Am to 6:00 Pm
                            <br> Sunday Closed
                        </p>
                    </div>

                </div>
            </div>
            <!-- end info card -->
            <div class="map w100">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.27991292725!2d-73.69948712737622!3d40.6976700639256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2z2YbZitmI2YrZiNix2YPYjCDYp9mE2YjZhNin2YrYp9iqINin2YTZhdiq2K3Yr9ip!5e0!3m2!1sar!2seg!4v1675865312570!5m2!1sar!2seg"
                    width="" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- start contact-form -->
            <div class="contact-form d-grid gap-20">
                <div class="top-content">
                    <h1 data-line="" class="c-dark">
                        CONTACT US
                        <br>
                        <span class="font-w300"></span>
                    </h1>
                </div>
                <form action="" class="d-flex wrap row gap-20">

                    <!-- start form control -->
                    <div class="input-group f-b33">
                        <input type="text" placeholder="Your name" class="form-control">
                    </div>
                    <!-- end form control -->

                    <!-- start form control -->
                    <div class="input-group f-b33">
                        <input type="text" placeholder="Phone No" class="form-control">
                    </div>
                    <!-- end form control -->

                    <!-- start form control -->
                    <div class="input-group f-b33">
                        <input type="email" placeholder="Email Address" class="form-control">
                    </div>
                    <!-- end form control -->
                    <!-- start form control -->
                    <div class="input-group f-b100">
                        <textarea name="" id="" cols="30" rows="4" class="form-control "
                            placeholder="Your Message"></textarea>
                    </div>
                    <!-- end form control -->
                    <!-- start btn-container -->
                    <div class="btn-container f-b100">
                        <button class="main-btn">Submit</button>
                    </div>
                    <!-- end  btn-container -->


                </form>
            </div>
            <!-- end contact-form -->

        </div>
    </div>
    <!-- end section  -->


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