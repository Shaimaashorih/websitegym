<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
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

                <div class="d-flex f-b66 column gap-20">

                    @foreach($user_dietmenus as $item)
                    <div class="card b-white bx-shadow f-b100">
                        <div class="card-container">

                            <div class="top-title">
                                <h4> {{$item->title}}</h4>
                                <p class="c-font"> {{$item->description}}</p>
                            </div>

                            <!-- start menu -->
                            <div class="menu">

                                <div class="menu-img fb-25">
                                    <img src="{{URL::asset('images').'/'.$item->image}}" />

                                </div>

                                <div class="inf-des-group fb-50">

                                    <div class="inf">
                                        <img src="{{URL::asset('src/image/user.png')}}" alt="" class="radius50">
                                        <div class="name">{{ Auth::user()->name }}</div>
                                    </div>

                                    <div class="description">
                                        <h4> {{$item->name}}</h4>
                                        <p class="c-font"> {{$item->ingridients}}</p>


                                    </div>
                                </div>

                                <div class="d-flex row wrap gap-20 justify-space-between f-b25">

                                    <div class="views">
                                        <span class="font-size12"><i class="c-font fa-regular fa-clock"></i>  {{$item->times}} times</span>
                                            <br>
                                        {{-- <span class="font-size12">
                                            <i class="fa-regular fa-clipboard"></i>4-6
                                            5 Ingridients
                                        </span>
                                        <br>
                                        <span class="font-size12"><i data-color="#fc9844"
                                                class="fa-regular fa-star"></i> 107 reviews</span> --}}
                                    </div>

                                    {{-- <button class="btn green-w-bg font-size30">+</button> --}}
                                </div>

                            </div>
                        @endforeach
                            <!-- end menu -->
                        </div>
                    </div>




                </div>
                <!-- ------------------------ -->

                <div class="d-flex f-b33 wrap row gap-20">
                    @foreach($user_dietmenus as $item)
                    <!-- start card -->
                    <div class="card b-white f-b50">
                        <!-- start card-container -->
                        
                        <div class="card-container ">
                            <div class="top-content d-flex row wrap  gap-10 align-center ">

                                <div class="top-title">
                                    <h4>
                                        Current Diet Menu
                                    </h4>
                                    <p class="c-font">{{$item->name}}</p>

                                </div>
                                <!-- end top-title -->
                                <div>
                                    <button class="green btn font-size30">+</button>
                                </div>
                            </div>

                            <div class="menu current">
                                <a href="#">

                                    <div class="menu-img">
                                        <img src="{{URL::asset('images').'/'.$item->image}}" />
                                    </div>

                                    <div class="description">
                                        <h4 class="c-dark">{{$item->description}}</h4>
                                        <p class="c-font"></p>
                                    </div>

                                    <br>

                                    <div class="views d-flex column gap-10">
                                        <span class="font-size12 c-font"><i class="c-font fa-regular fa-clock"></i> {{$item->ingridients}}times</span>
                                        {{-- <span class="font-size12 c-font">
                                            <i class="fa-regular fa-clipboard"></i>4-6
                                            5 Ingridients
                                        </span>
                                        <span class="font-size12 c-font"><i data-color="#fc9844"
                                                class="fa-regular fa-star"></i> 107 reviews</span> --}}
                                    </div>


                                </a>
                            </div>
                            <!-- end menu -->
                        </div>
                        <!-- end card-container -->
                    </div>
                    <!-- end card -->
                    @endforeach
                    <!-- --------------------------- -->
                    <!-- start card -->
                    <div class="card b-white f-b50">
                        <!-- start card-container -->
                        <div class="card-container">
                            <div class="top-title">
                                <h4>Trending Ingridients
                                </h4>
                            </div>
                            <div class="trends">
                                @foreach($otherdiets as $item)

                                <p class="c-font">{{$item->description}}</p>
                                <!-- start trend -->
                                <div class="trend up">
                                    <a href="#">
                                        <img src="{{URL::asset('images').'/'.$item->image}}" />
                                    </a>

                                    <div>
                                        <h4 class="c-black">
                                            <a href="#" class="c-black">{{$item->title}}</a>
                                        </h4>
                                        <p class="c-font font-size14">{{$item->name}}
                                        </p>
                                    </div>
                                    <span>
                                        {{$item->id}}
                                    </span>
                                </div>
                                @endforeach

                                <!-- end trend -->
                            </div>

                            <!-- start btn container -->
                            <div class="btn-container d-flex row justify-center">
                                <button class="btn green-w-bg">View More</button>
                            </div>
                            <!-- end btn container -->
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
    <script src="{{URL::asset('src/js/main.js')}}"></script>

</body>

</html>