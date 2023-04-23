<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Plan</title>
    <link rel="stylesheet" href="{{URL::asset('src/css/dist/normaliz.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('src/css/dist/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('src/css/dist/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('src/css/dist/dycalendar.css')}}">
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

                <div class="d-flex row wrap f-b33 gap-20">
                    <!-- start card -->
                    <div class="card b-white f-b50">
                        <div class="card-container">
                            <!-- start top-title -->
                            <div class="top-title">
                                <h4></h4>
                            </div>
                            <!-- end top-title -->
                            <div id="dycalender"></div>
                        </div>
                    </div>
                    <!-- end card -->
                    <!-- ------------- -->
                    <!-- start card -->
                    <div class="card b-white f-b50">
                        <div class="card-container">
                            <!-- start top-title -->
                            <div class="top-title">
                                <h4>Next week plan
                                </h4>
                            </div>
                            <!-- end top-title -->
                            <!-- start plane -->
                            <div class="plane">
                                <span class="">10</span>
                                <div class="d-flex column">
                                    <a href="#" class="c-black">Cardio Exrice</a>
                                    <p class="c-font">12 sets | 10min</p>
                                </div>
                            </div>
                            <!-- end plane -->
                            <button class="btn green-w-bg p20">+ Add New Plane</button>
                        </div>
                    </div>
                    <!-- end card -->

                </div>
                <!-- ----------------- -->
                <div class="d-flex row wrap f-b66">

                    <!-- start card -->
                    <div class="card b-white f-b100">
                        <div class="card-container">
                            <div class="top-content d-flex row gap-10 justify-space-between">

                                <div class="top-title">
                                    <h4>Plane List</h4>
                                    <p class="c-font">Lorem ipsum dolor sit.</p>
                                </div>

                                <div class="op" data-dropdown="">
                                    <button class="btn">
                                        undfiend
                                    </button>
                                    <!-- start drop-down -->
                                    <div class="dropdown bx-shadow b-white" style="max-height: 0px;">
                                        <!-- start max-height -->
                                        <div class="max-height d-flex column gap-10 b-white bx-shadow card">
                                            <button class="btn b-white c-font">link1</button>
                                            <button class="btn b-white c-font">link2</button>
                                        </div>
                                        <!-- end max-height -->
                                    </div>
                                    <!-- end drop-down -->
                                </div>
                            </div>
                            
                                <div class="plan-list">

                                    <li class="plan">
                                        <span class="day">
                                            <h4>4</h4>
                                            sun
                                        </span>
                                        <p>Lorem ipsum dolor sit.
                                            <br>
                                            <span data-color="red">UNFINISHED</span>
                                        </p>
                                        <p data-color="#2ea7c3">
                                            <i class="fa-solid fa-person-biking f-b50 font-size24"></i>
                                            Cicling
                                        </p>
                                        <button class="btn green-w-bg p20">
                                            <i class="fa-solid fa-play"></i>
                                            Start Workout
                                        </button>
                                        <div class="op" data-dropdown="">
                                            <button class="btn">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <!-- start drop-down -->
                                            <div class="dropdown bx-shadow b-white" style="max-height: 0px;">
                                                <!-- start max-height -->
                                                <div class="max-height d-flex column gap-10 b-white bx-shadow card">
                                                    <button class="btn b-white c-font">Edit</button>
                                                    <button class="btn b-white c-font">Deleite</button>
                                                </div>
                                                <!-- end max-height -->
                                            </div>
                                            <!-- end drop-down -->
                                    </li>

                                </div>

                        </div>
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
    <script src="{{URL::asset('src/js/dycalendar.js')}}"></script>
    <script src="{{URL::asset('src/js/main.js')}}"></script>

</body>

</html>