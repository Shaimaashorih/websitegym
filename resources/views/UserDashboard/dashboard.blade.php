<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash Bord</title>
    <link rel="stylesheet" href="{{URL::asset('src/css/dist/normaliz.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('src/css/dist/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('src/css/dist/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('src/css/dist/main.css')}}" />
    <!-- icons script -->
    <script src="https://kit.fontawesome.com/92c7a83d65.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- start  header -->
    <header class="db-header b-white row d-flex align-center">

        <!-- start part1 -->
        <div class="part1">
            <!-- start log -->
            @foreach ($general_settings as $item)
     
            <div class="log">
                <img src="{{URL::asset('images').'/'.$item->logo_path}}" alt="Logo" />
            </div>
                
            @endforeach
            <!-- end logo -->
        </div>
        <!-- end part1 -->
        <!-- start part2 -->
        <div class="d-flex row wrap gap-20 part2 f-b-g1">

            <div class="f-b50 d-flex gap-20 row align-center ">
                <button class="hrader-toggle "></button>
                <div class="page-name">
                    <h2 id="page-title">Dash Bord</h2>
                </div>
            </div>
            <div class="f-b50 d-flex row wrap align-center gap-20">

                <!-- start input-group-->
                <div class="input-group d-flex">
                    <input type="text" class="form-control">
                    <button type="submit"></button>
                </div>
                <!-- start input-group -->

                <!-- start notification_dropdown  -->
                <div class="message" data-dropDown>
                    <button class="btn"><i class="fa-solid fa-message"></i></button>
                    <div class="dropdown bx-shadow b-white">
                        <!-- start max-height -->
                        <div class="max-height">

                        </div>
                        <!-- end max-height -->
                    </div>
                    <!-- end drop-down -->
                </div>
                <!-- end notification_dropdown  -->

                <!-- start notification_dropdown  -->
                <div class="gift" data-dropDown>
                    <button class="btn"><span class="length">1</span><i class="fa-solid fa-gift"></i></button>
                    <!-- start drop-down -->
                    <div class="dropdown bx-shadow b-white">
                        <!-- start max-height -->
                        <div class="max-height">

                            <div class="gift">
                                <p class="c-font font-size13">3 men ago</p>
                                <p class="c-black">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>

                        </div>
                        <!-- end max-height -->
                    </div>
                    <!-- end drop-down -->
                </div>
                <!-- end notification_dropdown  -->


                <!-- start notification_dropdown  -->
                <div class="notification" data-dropDown>
                    <button class="btn"><span class="length">1</span><i class="fa-regular fa-bell"></i></button>
                    <!-- start drop-down -->
                    <div class="dropdown bx-shadow b-white">
                        <!-- start max-height -->
                        <div class="max-height b-white padding-10">

                            <div class="noti">
                                <img src="src/image/sport-2792995_1920.jpg" alt="">
                                <div>
                                    <p class="c-black">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem,
                                        delectus!</p>
                                    <p class="c-font font-size12">20 jule , 2022 , 02:00BM</p>
                                </div>
                            </div>

                        </div>
                        <!-- end max-height -->
                    </div>
                    <!-- end drop-down -->
                </div>
                <!-- end notification_dropdown  -->


                <!-- start profile-btn -->
                <div class="profile-btn" data-dropDown>
                    <button class="btn">
                        <img class="" src="{{URL::asset('src/image/user.png')}}" alt="user.." srcset="">
                    </button>
                    <!-- start drop-down -->
                    <div class="dropdown bx-shadow b-white">
                        <!-- start max-height -->
                        <div class="max-height d-flex column padding-5 gap-5">

                            <a href="#"><i class="fa-solid fa-person" data-color="#8dc255"></i>{{ Auth::user()->name }}</a>
                            <a href="#"><i class="fa-solid fa-envelope" data-color="#3097ef"></i>inbox</a>

                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa-solid fa-arrow-left" data-color="red"></i>logout</a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                        </div>
                        <!-- end max-height -->
                    </div>
                    <!-- end drop-down -->
                </div>
                <!-- end profile-btn -->

            </div>

        </div>
        <!-- end part2 -->

    </header>
    <!-- end header -->

    <!-- ----------------------------- -->
    <!-- start dashBord-bg -->
    <div class="dash-bg">

    </div>
    <!-- end dashBord-bg -->
    <!-- ---------------------- -->
    <!-- start grid-page -->
    <div class="flex-page d-flex row wrap">

        <!-- start left-nav -->
        <div class="left-nav b-white">
            <ul>
                <li data-dropDown class="">
                    <button>
                        <div>
                            <i class="fa-solid fa-bars-progress"></i>
                            <span class="re">Dashbord</span>
                        </div>
                    </button>
                    <div class="clospall">
                        <ul class="max-hieght">
                                <li><a href="{{'/dashboaard'}}">Dash Bord
                                </a></li>
                            <li><a href="{{url('/workout-statistic')}}">Workout Statistic
                                </a></li>
                            <li><a href="{{url('/workout-plan')}}">Workout Plan
                                </a></li>
                            <li><a href="{{url('/distance-map')}}">Distance Map
                                </a></li>
                            <li><a href="{{url('/food-menu')}}">Food Menu
                                </a></li>
                            <li><a href="{{url('/personal-record')}}">Personal Record
                                </a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- end leftr-nav -->

        <!-- ----------------------------- -->

        <!-- start page-content -->
        <div class="page-content padding-20">
            <!-- start container -->
            <div class="container d-flex row gap-20 wrap">

                <!-- start card Weekly Progress-->
                <div class="card b-white bx-shadow padding-20 f-b20 weekly-progress">
                    <div class="card-container">

                        <i class="naitev-pai-chart" data-bg="#70c436" data-bg="#fb4a83" data-persent="70%">
                            <i class="fa-solid fa-dumbbell"></i>
                            <span></span>
                        </i>

                        <h2 class="font-size24 font-w600">60%</h2>
                        <p class="c-font">Weekly Progress</p>

                    </div>
                </div>
                <!-- end card Weekly Progress-->

                <!-- start card Calories Burn-->
                <div class="card b-white bx-shadow  padding-20 f-b20 calories-burn">
                    <div class="card-container">

                        <i class="naitev-pai-chart" data-bg="#fb4a83" data-persent="60%">
                            <i class="fa-solid fa-fire"></i>
                            <span></span>
                        </i>

                        <h2 class="font-size24 font-w600">76cal</h2>
                        <p class="c-font">Calories Burn</p>
                    </div>
                </div>
                <!-- end card Calories Burn-->
                <!-- start card Diet Programs-->
                <div class="card b-white bx-shadow padding-20 f-b20 diet-programs">
                    <div class="card-container">
                        <i class="naitev-pai-chart" data-bg="#fc942d" data-persent="90%">
                            <i class="fa-solid fa-carrot"></i>
                            <span></span>
                        </i>

                        <h2 class="font-size24 font-w600">5 Left
                        </h2>
                        <p class="c-font">Diet Programs</p>
                    </div>
                </div>
                <!-- end card Diet Programs-->
                <!-- start card Sleeping Potency-->
                <div class="card b-white bx-shadow padding-20 f-b20 sleeping-potency">
                    <div class="card-container">
                        <i class="naitev-pai-chart" data-bg="#2196f3" data-persent="100%">
                            <i class="fa-solid fa-bed"></i>
                            <span></span>
                        </i>

                        <h2 class="font-size24 font-w600">8 Hours
                        </h2>
                        <p class="c-font">Sleeping Potency</p>
                    </div>
                </div>
                <!-- end card Sleeping Potency-->
                <!-- start card Total Members-->
                <div class="card b-white bx-shadow padding-20 f-b20 total-members">
                    <div class="card-container">
                        <i class="naitev-pai-chart" data-bg="#009688" data-persent="20%">
                            <i class="fa-regular fa-user"></i>
                            <span></span>
                        </i>

                        <h2 class="font-size24 font-w600">974 Person
                        </h2>
                        <p class="c-font">Total Members</p>
                    </div>
                </div>
                <!-- end card Total Members-->

                <!-- ------------------------- -->


                <!-- start card -->
                <div class="card b-white bx-shadow f-b66">
                    <div class="card-container">
                        <div class="top-content d-flex align-center justify-space-between gap-20 row wrap">
                            <!-- start top-title -->
                            <div class="top-title f-b50">
                                <h4>Workout Statistic
                                </h4>
                                <p class="c-font">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <!-- end top-title -->
                            <div class="chart-ic d-flex align-center row wrap gap-20 f-b50">

                                <div class="d-flex wrap row">
                                    <i class="fa-solid fa-person-biking f-b50 font-size24" data-color="#2ea7c3"></i>
                                    <span>
                                        <p class="font-size18 font-w600 ">80%</p>
                                        <p class="">Cycling</p>
                                    </span>
                                </div>

                                <div class="d-flex wrap row">
                                    <i class="fa-solid fa-person-running font-size24" data-color="#fc943d"></i>
                                    <span>
                                        <p class="font-size18 font-w600 ">80%</p>
                                        <p>Running</p>
                                    </span>
                                </div>

                                <div class="d-flex wrap row">
                                    <i class="fa-solid fa-child-reaching font-size24" data-color="#bc50cb"></i>
                                    <span>
                                        <p class="font-size18 font-w600 ">80%</p>
                                        <p>yoga</p>
                                    </span>
                                </div>

                            </div>

                        </div>
                        <canvas id="workout-statistic-chart"></canvas>
                        <div class="chart-data">
                            <!-- start running-data -->
                            <li class="dis-none running-data">
                                <ol chart-data="0"></ol>
                                <ol chart-data="20"></ol>
                                <ol chart-data="30"></ol>
                                <ol chart-data="40"></ol>
                                <ol chart-data="0"></ol>
                            </li>
                            <!-- end running-data -->
                            <!-- start cycling-data -->
                            <li class="dis-none cycling-data">
                                <ol chart-data="0"></ol>
                                <ol chart-data="25"></ol>
                                <ol chart-data="20"></ol>
                                <ol chart-data="48"></ol>
                                <ol chart-data="2"></ol>
                            </li>
                            <!-- end cycling-data -->
                            <!-- start running-data -->
                            <li class="dis-none yoga-data">
                                <ol chart-data="50"></ol>
                                <ol chart-data="22"></ol>
                                <ol chart-data="33"></ol>
                                <ol chart-data="44"></ol>
                                <ol chart-data="2"></ol>
                            </li>
                            <!-- end yoga-data -->
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <!-- start card -->
                <div class="card b-white bx-shadow f-b33">
                    <div class="card-container d-flex column">
                        <!-- start top-title -->
                        <div class="top-title">
                            <h4>Workout Progress
                            </h4>
                        </div>
                        <!-- end top-title -->

                        <i class="naitev-pai-chart workout-progress" data-persent="80%">
                            <p>90%</p>
                            <span></span>
                        </i>
                        <p class="c-font font-size14 c"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <button class="btn green">Set S Target</button>

                    </div>
                </div>
                <!-- end card -->

                <!-- ----------------------------- -->


                <!-- start card -->
                <div class="card b-white bx-shadow f-b33">
                    <div class="card-container d-flex column gap-10">
                        <!-- start top-title -->

                        <div class="top-title">
                            <h4>Duration Worked
                            </h4>
                        </div>
                        <!-- end top-title -->       
                       @foreach($groups as $item)

                        <div class="naitev-pai-chart-container c2 d-flex row wrap gap-20 align-center">
                            <i class="naitev-pai-chart workout-progress c-2" data-persent="80%">
                                <i class="fa-solid fa-person-running font-size24" data-color="#fc943d"></i>

                                <span></span>
                            </i>
                            <div>
                                <p class="font-size18 c-dark">{{$item->name}}</p>
                                <p data-color="#fc943d">{{$item->duration}}</p>

                            </div>
                        </div>
                        @endforeach
                        <!-- ----------------- -->

                    </div>
                </div>
                <!-- end card -->

                <!-- start card -->
                <div class="card b-white bx-shadow f-b66">
                    <div class="card-container">
                        <div class="top-content">
                            <!-- start top-title -->
                            <div class="top-title">
                                <h4>Calories Chart
                                </h4>
                            </div>
                            <!-- end top-title -->
                            <canvas id="calories-chart"></canvas>

                            <div class="chart-data dis-block">

                                <div class="chart-data dis-none">

                                    <li class="chart-labels">
                                        <ol chart-data="jun"></ol>
                                        <ol chart-data="fep"></ol>
                                        <ol chart-data="mar"></ol>
                                        <ol chart-data="april"></ol>
                                        <ol chart-data="jou"></ol>
                                    </li>

                                    <li class="green-line-data">
                                        <ol chart-data="5"></ol>
                                        <ol chart-data="40"></ol>
                                        <ol chart-data="10"></ol>
                                        <ol chart-data="35"></ol>
                                        <ol chart-data="5"></ol>
                                    </li>

                                    <li class="red-line-data">
                                        <ol chart-data="-10"></ol>
                                        <ol chart-data="-20"></ol>
                                        <ol chart-data="-10"></ol>
                                        <ol chart-data="-40"></ol>
                                        <ol chart-data="0"></ol>
                                    </li>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <!-- ----------------------------- -->

                <!-- start menu-carousel -->
                <div class="card b-white bx-shadow f-b100 menu-carousel overflow-hidden">
                    <div class="card-container">
                        <div class="top-content d-flex row wrap">

                            <!-- start top-title -->
                            <div class="top-title f-b50">
                                <h4>Featured Diet Menus
                                </h4>
                                {{-- <p class="c-font">Lorem ipsum dolor sit amet.</p> --}}
                            </div>

                            <!-- end top-title -->
                            <div class="f-b50 align-center justify-end d-flex gap-20">

                                <div class="btn-container ">
                                    <button class="ac btn">Break Fast</button>
                                </div>
                                <a href="{{'food-menu'}}" class="btn green">View More</a>
                            </div>
                        </div>

                        <div class="owl-carousel owl-theme owl-menu" id="owl-menu">
                            <!-- start item -->
                            <div class="item padding-5">
                                <div class="card d-flex row wrap bx-shadow b-white padding-10">
                            @foreach($user_dietmenus as $item)

                                    <div class="card-img width-50h d-flex">
                                        <img src="src/image/template14.png" class="w100" alt="img">
                                    </div>
                                    <div class="card-content width-50h">
                                        <div class="humen-img">
                                            <img src="src/image/user.png" alt="" class="radius50">
                                            <div class="name">{{ Auth::user()->name }}</div>
                                        </div>
                                        <p class="description c-font">{{ $item->description }}</p>
                                        <br>
                                        <span class="font-size12"><i class="c-font fa-regular fa-clock"></i>{{ $item->times }} </span>
                                        <br>
                                        {{-- <span class="font-size12"><i data-color="#fc9844"
                                                class="fa-regular fa-star"></i> 107 reviews</span> --}}
                                    </div>
                            @endforeach

                                </div>
                            </div>
                            <!-- end item -->
                        </div>


                    </div>
                </div>
                <!-- end menu-carousel -->
                <!-- ----------------- -->



            </div>
            <!-- end container -->


        </div>
        <!-- end page-content -->
    </div>
    <!-- end grid-page -->

    <script src="{{URL::asset('src/js/jquery-3.6.0.js')}}"></script>
    <script src="{{URL::asset('src/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('src/js/chart.min.js')}}"></script>
    <script src="{{URL::asset('src/js/main.js')}}"></script>

</body>

</html>