<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distance Map
    </title>
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

            <div class="f-b50 d-flex gap-20 row align-center">
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
                    <button class="btn"><i class="fa-solid fa-gift"></i></button>
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
                    <button class="btn"><i class="fa-regular fa-bell"></i></button>
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
                @foreach($distances as $item)
                <!-- start card -->
                <div class="card b-white f-b50 pad-top">
                    <div class="card-container d-flex wrap row align-center gap-20">
                        <div>
                            <i class="fa-solid  font-size24" style="padding: 20px;width: 50px ;height: 50px; background-color: #edf5f8; border-radius: 50%;
                            display: flex ;
                            align-items: center;
                            justify-content: center;
                            "><img src="{{URL::asset('images').'/'.$item->image}}" style="width:100%;height:100%" /></i>

                        </div>
                        <div class="running naitev-progres" data-width="{{$item->distance}}/100">
                            <strong class="value">{{$item->distance}}</strong>
                            <small class="end-poind c-font">100km</small>
                            <strong class="type">{{$item->name}}</strong>
                            <span class="line"></span>
                        </div>

                    </div>
                </div>
                @endforeach
                <!-- end card -->

                {{-- <!-- start card -->
                <div class="card b-white f-b50 pad-top">
                    <div class="card-container d-flex wrap row align-center gap-20">
                        <div>

                            <i class="fa-solid fa-person-biking f-b50 font-size24" data-color="#fff" style="padding: 20px;width: 50px ;height: 50px; background-color: #2ea7c3; border-radius: 50%;
                            display: flex ;
                            align-items: center;
                            justify-content: center;
                            "></i>
                        </div>

                        <div class="cycling naitev-progres" data-width="50%">
                            <strong class="value">48Km</strong>
                            <strong class="type">cycling</strong>
                            <small class="end-poind c-font">100km</small>
                            <span class="line"></span>

                        </div>
                    </div>
                </div>
                <!-- end card --> --}}


                <!-- -------------- -->

                <!-- start card -->
                <div class="card b-white f-b33">
                    <div class="card-container">
                        <!-- start top-title -->
                        <div class="top-title">
                            <h4>Recent Activities
                            </h4>
                            <p class="c-font">Lorem ipsum dolor sit amet.</p>
                        </div>
                        <!-- end top-title -->
                        @foreach($active as $item)

                        <div class="activities">
                            <!-- start activitie -->
                            <div class="activitie">

                                <div>
                                    <i class="fa-solid fa-person-running font-size24 running" data-color="#fff"></i>
                                </div>
                                <div>
                                    <h4>{{$item->date}}
                                        <br>
                                        {{$item->name}}
                                    </h4>
                                    <p class="c-font">{{$item->distance}}</p>
                                </div>

                                <a href="personal-record.html" class="c-font"><i class="fa-solid fa-play"></i></a>

                            </div>

                            <!-- end activitie -->
                            <!-- start activitie -->
                            {{-- <div class="activitie">

                                <div>
                                    <i class="fa-solid fa-person-running font-size24 cycling" data-color="#fff"></i>
                                </div>
                                <div>
                                    <h4>saturday
                                        <br>
                                        Running
                                    </h4>
                                    <p class="c-font">2km mamm</p>
                                </div>

                                <a href="personal-record.html" class="c-font"><i class="fa-solid fa-play"></i></a>

                            </div>
                            <!-- end activitie -->
 --}}

                        </div>
                        @endforeach
                        <a href="personal-record.html" class="d-flex justify-center padding-20"
                            data-color="#6CC51D">Show All</a>
                    </div>

                </div>
                <!-- end card -->

                <!-- start card -->
                <div class="card b-white f-b66">
                    <div class="card-container">
                        <!-- start top-title -->
                        <div class="top-title">
                            <h4>Stats</h4>
                            <p class="c-font">Lorem ipsum dolor sit amet.</p>
                        </div>
                        <!-- end top-title -->
                        <canvas id="stat-bar-chart"></canvas>
                        <div class="chart-data dis-none">
                            @foreach($charts as $item)

                            <li class="chart-labels">
                                <ol chart-data="{{$item->date}}"></ol>
                                {{-- <ol chart-data="fep"></ol>
                                <ol chart-data="mar"></ol>
                                <ol chart-data="april"></ol>
                                <ol chart-data="jou"></ol> --}}
                            </li>

                            <li class="blue-line-data">
                                <ol chart-data="{{$item->distance}}"></ol>
                                {{-- <ol chart-data="40"></ol>
                                <ol chart-data="10"></ol>
                                <ol chart-data="35"></ol>
                                <ol chart-data="5"></ol> --}}
                            </li>
                             <li class="orange-line-data">
                                <ol chart-data="{{$item->distance}}"></ol>
                              {{--  <ol chart-data="20"></ol>
                                <ol chart-data="10"></ol>
                                <ol chart-data="40"></ol>
                                <ol chart-data="0"></ol>--}}
                            </li>  
                            @endforeach

                        </div>

                    </div>
                </div>
                <!-- end card -->

                <!-- ------------------- -->
                <!-- start map-route-->
                <div class="map-route fb-100">

                    <div class="card">
                        <div class="card-contaier">
                            <!-- start top-title -->
                            <div class="top-title">
                                <h4>Map Routes</h4>
                                <p class="c-font">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <!-- end top-title -->
                            <div class="card b-white bx-shadow padding-20">
                                <h4 class="top-title"></h4>
                                <p class="c-font">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>

                    </div>
                    <!-- end card -->
                </div>
                <!-- end map-route -->

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