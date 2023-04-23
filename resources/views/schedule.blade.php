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
                SCHEDULE
                <br>
                <span class="font-w300">Bulding A Community For ATHLETIC WOMEN</span>
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




    <!-- start time-table-section -->
    <div class="section time-table">
        <!-- start container -->
        <div class="container">

            <!-- start top-title -->

            <div class="top-title d-grid repeat-1 gap-20 padding-20">

                <div class="part2 d-flex row wrap align-center justify-center align-end gap-20">
                    <button>AM</button>
                    <button>PM</button>
                </div>

            </div>

            <!-- end top-title -->

            <!-- start  table part -->
            <div class="table-part">
                <table>
                    <tr>
                        <th class="time"></th>
                        <th>SUNDAY</th>
                        <th>MONDAY</th>
                        <th>TUESDAY</th>
                        <th>WEDNESDAY</th>
                        <th>THURSDAY</th>
                        <th>FRIDAY</th>
                    </tr>

                    <tr>
                        <th class="time">8:00 <br> AM</th>
                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/weightlifting.png')}}" alt="">
                                INTERMIDIATE
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>

                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/gym-station.png')}}" alt="">
                                TRX
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>

                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/stationary-bike.png')}}" alt="">
                                SPINNING
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>

                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/stationary-bike.png')}}" alt="">
                                SPINNING
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>

                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/stationary-bike.png')}}" alt="">
                                SPINNING
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>

                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/weightlifting.png')}}" alt="">
                                INTERMIDIATE
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>

                    </tr>

                    <tr>

                        <th class="time">9:00 <br> AM</th>

                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/treadmill.png')}}" alt="">
                                BEGGINERS
                                <br>
                                <span class="c-main">(samya)</span>
                            </a>
                        </th>


                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/treadmill.pn')}}g" alt="">
                                BEGGINERS
                                <br>
                                <span class="c-main">(samya)</span>
                            </a>
                        </th>


                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/treadmill.png')}}" alt="">
                                BEGGINERS
                                <br>
                                <span class="c-main">(samya)</span>
                            </a>
                        </th>


                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/treadmill.png')}}" alt="">
                                BEGGINERS
                                <br>
                                <span class="c-main">(samya)</span>
                            </a>
                        </th>


                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/treadmill.png')}}" alt="">
                                BEGGINERS
                                <br>
                                <span class="c-main">(samya)</span>
                            </a>
                        </th>


                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/weightlifting.png')}}" alt="">
                                INTERMIDIATE
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>

                    </tr>

                    <tr>
                        <th class="time">10:00 <br> AM</th>

                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/weightlifting.png')}}" alt="">
                                INTERMIDIATE
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>


                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/weightlifting.png')}}" alt="">
                                INTERMIDIATE
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>


                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/weightlifting.png')}}" alt="">
                                INTERMIDIATE
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>


                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/weightlifting.png')}}" alt="">
                                INTERMIDIATE
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>


                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/weightlifting.png')}}" alt="">
                                INTERMIDIATE
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>


                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/weightlifting.png')}}" alt="">
                                INTERMIDIATE
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>



                    </tr>

                    <tr>
                        <th class="time">11:00 <br> AM</th>

                        <th class="c">
                            <a href="#">

                                <img src="src/image/dumbell.png" alt="">
                                BOOT CAMP
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>


                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/weightlifting.png')}}" alt="">
                                INTERMIDIATE
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>


                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/dumbell.png')}}" alt="">
                                BOOT CAMP
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>


                        <th class="c d-flex gap-5">
                            <a href="#" class="f-b50">

                                <img src="{{URL::asset('src/image/dumbell.png')}}" alt="">
                                BOOT CAMP
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                            <a href="#" class="f-b50">

                                <img src="{{URL::asset('src/image/boxing-gloves.png')}}" alt="">
                                BOXING
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>

                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/dumbell.png')}}" alt="">
                                BOOT CAMP
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>

                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/treadmill.png')}}" alt="">
                                BEGGINERS
                                <br>
                                <span class="c-main">(samya)</span>
                            </a>
                        </th>

                    </tr>

                    <tr>
                        <th class="time">11:30 <br> AM</th>

                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/gym-station.png')}}" alt="">
                                TRX
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>

                        <th class="c">
                            <a href="#">

                                <img src="s{{URL::asset('rc/image/weightlifting.png')}}" alt="">
                                INTERMIDIATE
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>
                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/stationary-bike.png')}}" alt="">
                                SPINNING
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>

                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/gym-station.png')}}" alt="">
                                TRX
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>

                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/gym-station.png')}}" alt="">
                                TRX
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>
                        <th class="c">
                            <a href="#">

                                <img src="{{URL::asset('src/image/exercise.png')}}" alt="">
                                CORE
                                <br>
                                <span class="c-main">(ANNA)</span>
                            </a>
                        </th>

                    </tr>

                </table>
            </div>

            <!-- end table part -->

        </div>

        <!-- end container -->
    </div>
    <!-- end time-table-section -->


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