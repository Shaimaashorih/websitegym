<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="shortcut icon" type="image/png" href="{{URL::asset('src/image/d.jpg')}}">
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
        <div class="d-flex row wrap">
          @foreach ($general_settings as $item)
              <a href="https://api.whatsapp.com/send?phone=2{{$item->phone2}}&amp;text=hi" class=""><i
              class="fa-solid fa-phone l"></i>{{$item->phone2}}</a>
          <a href="mailto:{{$item->email2}}" class=""><i class="fa-solid fa-envelope l"></i>{{$item->email2}}</a>
        </div>

        <div class="d-flex row wrap">
          <p>Folow In :</p>
          <a href="{{$item->facebook}}"><i class="fa-brands fa-facebook-f i"></i></a>
          <a href="{{$item->instegram}}"><i class="fa-brands fa-instagram i"></i></a>
        </div>
      </div>
      <!-- end container -->
    </div>
    @endforeach

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
  <div class="landing carousel">
      <div class="owl-carousel owl-theme owl-landing">
        <!-- start item -->
        <div class="item">
          <!-- start container -->
          <div class="container">
      @foreach($articles as $item)
          <div class="card">
            <h1 data-line>
              GYMFIT
              <br />
              <span class="font-w300">{{$item->title_span}}</span>
              {{-- <span class="font-w300">For ATHLETIC WOMEN</span> --}}
            </h1>
            <p class="font-size17">
              <br/>
              {{$item->title_article}}
            </p>
            
            <br />
            <button class="main-btn">Join Now!</button>
          </div>
          @endforeach
        </div>
<!-- end container -->
          <div class="bg">
            <img src="{{URL::asset('src/image/template12.png')}}" alt="">
          </div>

        </div>
        <!-- end item -->

        <!-- start item -->
        <div class="item">
          <!-- start container -->
          @foreach($articles as $item)
          <div class="container">
            <div class="card">
              <h1 data-line>
                GYMFIT
                <br />
                <span class="font-w300">{{$item->title_span}}</span>
              </h1>
              <p class="font-size17">
                <br />
                {{$item->title_article}}
              </p>
              <br />
              <button class="main-btn">Join Now!</button>
            </div>
            
          </div>
          @endforeach
          <!-- end container -->

          <div class="bg">
            <img src="{{URL::asset('src/image/weight-lifting-1284616_1920.jpg')}}" alt="">
          </div>

        </div>
        <!-- end item -->

    </div>
  </div>
  <!-- end landing -->


  <!-- start about-section -->

  <div class="section about-section">
    <!-- start container -->
    <div class="container d-grid repeat-2">

      <div class="part part1">
        <img src="{{URL::asset('src/image/template (1).png')}}" alt="">
        <img src="{{URL::asset('src/image/template.png')}}" alt="">
      </div>
@foreach($articles as $item)
      <div class="part part2">
        <h1 data-line class="font-w900 font-size50">
          About Us
          <br>
          {{-- <span class="font-w300 font-size30">The Pest GYM</span> --}}
          <span class="font-w300 font-size30">{{$item->abotus_span}}</span>
        </h1>
        <p>
          {{$item->abotus_article}}
        </p>
        <br>
        <button class="main-btn font-size24"><a href="{{'\about'}}" style="color: black;"> Read More</a></button>
      </div>

    </div>
    @endforeach
    <!-- end contaienr -->
  </div>

  <!-- end about-section -->


  <!-- start COURSES-section -->
  <div class="section courses-section">
    <!-- start container -->
    <div class="container">
      <!-- start top-title -->
      @foreach($articles as $item)
      <div class="top-title">
        <h1 data-line="" class="font-size40">
          OUR COURSES
        </h1>
        <span>
          {{$item->courses_span}}
        </span>
        <p class="font-size20">{{$item->courses_article}}</p>
      </div>
      @endforeach
      <!-- end top  title -->

      <!-- start content grid -->
      <div class="grid-content d-grid repeat-3 gap-20">
        @foreach ($courses as $item)

        <!-- start card -->
        
        <div class="card">
          <a href="#">
            <p>{{$item->description}}</p>
            <img src="{{ asset('images/'.$item->image)}}" >
            {{-- <img src="{{URL::asset('src/image/template3.png')}}" alt=""> --}}
            <p>{{$item->title}}</p>
          </a>
        </div>
        @endforeach
        <!-- end card -->

      </div>
      <!-- end content grid -->
    </div>
    <!-- end container -->
  </div>
  <!-- end  COURSES-section -->

  <!-- start TRAINERS-section -->
  <div class="trainers-section section">
    <div class="container">
      <!-- start  top title -->
      <div class="top-title d-grid repeat-2 ">
        <div></div>
        @foreach($articles as $item)
        <div>
          <h1 data-line="">
            TRAINERS
            <br>
            {{-- <span class="font-w300 font-size20">For ATHLETIC WOMEN</span> --}}
            <span class="font-w300 font-size20">{{$item->trainer_span}}</span>
          </h1>
          <p>{{$item->trainer_article}}</p>
          <br>
        </div>
      </div>
      <!-- end top title -->
     @endforeach
      <!-- start grid-content -->
      <div class="grid-content d-grid repeat-3 gap-20">
        @foreach($trainers as $item)
          <!-- start card -->
          <div class="card">
            <img src="{{ asset('images/'.$item->image)}}" style="width: 200px; height=400px;"  >
            {{-- <img src="{{URL::asset('src/image/template8.png')}}" class="clip" alt=""> --}}
            <h2 class="c-main">{{$item->name}}</h2>
            <p class="c-black">{{$item->job}}</p>
          </div>
          <!-- end card -->
        @endforeach
      </div>
      <!-- end  grid-content -->

    </div>
    <!--  end container-->
  </div>
  <!-- end TRAINERS-section -->

  <!--start  video-section -->
  <div class="section video-section">
    <!-- start container -->
    <div class="container">
      <!-- start card -->   
       @foreach($video_shows as $item)

      <div class="card">
        <button class="play-video" onclick="videoOp( )">
          <i class="fa-solid fa-play"></i>
        </button>
        <h1 class="c-white">{{$item->title}}</h1>
        <button class="main-btn font-size20 c-white" onclick="videoOp( )">Watch Now !</button>
      </div>
      <!-- end card -->
    </div>
    <!-- end container -->
    <div class="video-view">

      <button class="close" onclick="videoOp( )"><i class="fa-solid fa-xmark"></i></button>
      <video  autoplay muted style="width: 80%;">
        <source src="{{asset('storage')}}/{{$item['path']}}" type="video/mp4">
      </video>
      {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/DSWYAclv2I8" title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe> --}}
    </div>
    <div class="overlay"></div>
  </div>
  @endforeach
  <!--end  video-section -->

  <!-- start time-table-section -->
  <div class="section time-table">
    <!-- start container -->
    <div class="container">

      <!-- start top-title -->
    @foreach($articles as $item)
      <div class="top-title d-grid repeat-2 gap-20">
        <div class="part1">
          <h1 data-line="">
            TIMETABLe
            <br>
            <span class="font-w300 font-size20">{{$item->timetable_span}}</span>
          </h1>
          <p>{{$item->timetable_article}}</p>
          <br>

        </div>
        @endforeach

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

                <img src="{{URL::asset('src/image/dumbell.png')}}" alt="">
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

                <img src="{{URL::asset('src/image/weightlifting.png')}}" alt="">
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


  <!-- start gymnastics-slider section -->
  <div class="section gymnastics-slider b-black">
    <div class="container">
      <!-- start slider -->
      <div class="owl-carousel owl-theme owl-grmnastics">

        <!-- start item  -->
        <div class="item">
          <a href="#">
            <img src="src/image/template9.png" alt="" srcset="">
          </a>
        </div>
        <!-- end item  -->

      </div>
      <!-- end slider -->
    </div>
    <div class="overlay">

    </div>
  </div>
  <!-- end gymnastics-slider section -->


  <!-- start blog-section -->
  <div class="section blog-section">
    <!-- start container -->
    <div class="container">
      <!-- start  top-title -->
      @foreach($articles as $item)
      <div class="top-title">
        <h1 data-line="" class="font-w900 font-size50">
          OUR BLOG
          <br>
          <span class="font-w300 font-size30">{{$item->ourblog_span}}</span>
        </h1>
      </div>
      @endforeach
      <!-- end top-title -->
      <div class="grid-content d-grid repeat-3 gap-20">

        <!-- start card -->
        <div class="card">
          <a href="#">
            <img src="{{URL::asset('src/image/template3.png')}}" alt="">
            <p class="c-dark font-w500">Lorem ipsum dolor sit amet consectetur.</p>
            <p class="c-black">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam dolores accusantium
              quaerat asperiores debitis, nihil odit laudantium quo animi iste?</p>
          </a>
        </div>
        <!-- end card -->

        <!-- start card -->
        <div class="card">
          <a href="#">
            <img src="{{URL::asset('src/image/template4.png')}}" alt="">
            <p class="c-dark font-w500">Lorem ipsum dolor sit amet consectetur.</p>
            <p class="c-black">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam dolores accusantium
              quaerat asperiores debitis, nihil odit laudantium quo animi iste?</p>
          </a>
        </div>
        <!-- end card -->

        <!-- start card -->
        <div class="card">
          <a href="#">
            <img src="{{URL::asset('src/image/template6.png')}}" alt="">
            <p class="c-dark font-w500">Lorem ipsum dolor sit amet consectetur.</p>
            <p class="c-black">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam dolores accusantium
              quaerat asperiores debitis, nihil odit laudantium quo animi iste?</p>
          </a>
        </div>
        <!-- end card -->


      </div>
      <!-- end grid-content -->
    </div>
    <!-- start container -->
  </div>
  <!-- end blog-section -->

  <div class="section message-section">
    <!-- start container -->
    <div class="container d-grid repeat-2 ">
      <div></div>
      <!-- start messeg-form -->
      <div class="message-form">
        <form class="form form-horizontal" action="{{ route('message.store') }}"  method="POST">
          {{csrf_field()}}
          <!-- start input-group -->
          <div class="input-group">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control" required>
          </div>
          <!-- end input-group -->


          <!-- start input-group -->
          <div class="input-group">
            <label for="">Email</label>
            <input type="email" required name="email" id="" class="form-control">
          </div>
          <!-- end input-group -->

          <!-- start input-group -->
          <div class="input-group">
            <label for="">Phone</label>
            <input type="number" name="phone" id="" class="form-control">
          </div>
          <!-- end input-group -->

          <!-- start input-group -->
          <div class="input-group">
            <label for="">Message</label>
            <input type="text" name="message" required id="" class="form-control">
          </div>
          <!-- end input-group -->
          <br>
          <div class="btn-container">
            <button type="submit" class="main-btn font-size20">Submit</button>
          </div>

        </form>
      </div>
      <!-- end messeg-form -->
    </div>
    <!-- end container -->
  </div>

  <!-- start  -->

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

  <div class="color-preview d-flex row align-start">
    <button class="btn" onclick=" cInpParent_op(this)">
      <i class="fa-solid fa-gear"></i>
    </button>
    <div class="container">

      <div class="input-group">
        <label for="">main color</label>
        <input type="color" id="color1" name="" class="form-control" id="" />
      </div>
  
      <div class="input-group">
        <label for="">dark</label>
        <input type="color" id="color2" name="" class="form-control" id="" />
      </div>
  
      <div class="input-group">
        <label for="">white</label>
        <input type="color" id="color3" name="" class="form-control" id="" />
      </div>
      <div class="input-group">
        <label for="">black</label>
        <input type="color" id="color4" name="" class="form-control" id="" />
      </div>
    </div>


  </div>

  <script src="{{URL::asset('src/js/jquery-3.6.0.js')}}"></script>
  <script src="{{URL::asset('src/js/owl.carousel.min.js')}}"></script>
  <script src="{{URL::asset('src/js/main.js')}}"></script>
</body>

</html>