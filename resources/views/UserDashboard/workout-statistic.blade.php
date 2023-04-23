<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Statistic</title>
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
                <button class="hrader-toggle"></button>
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
                        <div class="max-height">

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
                                <li><a href="{{'/dashboard'}}">Dash Bord
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

                <div class="d-flex f-b66 column gap-20">
                      <!-- start running card -->

                      <div class="card b-white f-b50">
                        <!-- start card-container -->

                        <div class="card-container">
                            @foreach($user_workouts as $item)

                            <div class="top-title">

                                <div>
                                    <h4 class="c-black">{{$item->title}}</h4>
                                    <p class="c-font">
                                        {{$item->name}}
                                    </p>
                                </div>

                            </div>
                            <canvas id="running-chart"></canvas>
                            <div class="chart-data dis-none">
                                <li class="chart-data">
                                    <ol chart-data="{{$item->distance}}"></ol>
                                </li>
                                <li class="chart-labels">
                                    <ol chart-data="{{$item->month}}"></ol>                           
                                </li>
                            </div>
                            @endforeach
                        </div>

                        <!-- end card-container -->
                    </div>
                    <!-- end running card -->


                </div>
                <!-- ------------------------ -->

                <div class="d-flex f-b33 wrap row gap-20  align-content-flex-start">
                    <button class="f-b100 btn green">+ Add More Trining</button>

                    <!-- start card -->
                    <div class="card b-white f-b50">
                        <!-- start card-container -->
                        <div class="card-container d-flex column gap-10">
                            <!-- start top-title -->
                            <div class="top-title">
                                <h4>Progress
                                </h4>
                                {{-- <a href="#" class="btn c-font">+ add Target</a> --}}
                            </div>
                            <!-- end top-title -->
                            @foreach($groups as $item)
                            <div class="naitev-pai-chart-container c2 d-flex row wrap gap-20 align-center border zero">
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
                            

                        </div>
                        <!-- end card-container -->
                    </div>
                    <!-- end card -->

                    <!-- --------------------------- -->
                    <!-- start card -->
                    <div class="card b-white f-b50">
                        <!-- start card-container -->
                        <div class="card-container d-flex column">
                            <div class="top-title">
                                <h4>Charts</h4>
                            </div>
                            @foreach($user_workouts as $item)
                            <canvas id="stat-chart" class="max-250"></canvas>
                            <div class="chart-data dis-none">
                                <li class="stat-labels">
                                    <ol chart-data="{{$item->month}}"></ol>
                                    {{-- <ol chart-data="feb stat"></ol>
                                    <ol chart-data="mar stat"></ol> --}}
                                </li>
                                <li class="stat-data">
                                    <ol chart-data="{{$item->distance}}"></ol>
                                    {{-- <ol chart-data="02"></ol>
                                    <ol chart-data="02"></ol> --}}
                                </li>
                            </div>
                            @endforeach
                        </div>
                        <!-- end card-container -->
                    </div>
                    <!-- end card -->


                </div>

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