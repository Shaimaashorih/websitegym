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
            @foreach ($logo as $item)
     
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
                    <h2 id="page-title">Admin Dash Bord</h2>
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
                            <span class="re">Admin Dashbord</span>
                        </div>
                    </button>
                    <div class="clospall">
                        <ul class="max-hieght">
                            <li><a href="{{'/dashboardadmin'}}">dashboardadmin
                                </a></li>
                            <li><a href="{{'/coursesa'}}">courses
                                </a></li>
                            <li><a href="{{'/workouts'}}">Workout
                                </a></li>
                            <li><a href="{{'/user_workouts'}}">Workout for user
                                </a></li>
                            <li><a href="{{'/timetables'}}">Timetable
                                </a></li>
                            @foreach($articles as $articles)
                            <li><a href="{{'articles/'. $articles->id .'/edit'}}">Articles
                                </a></li>
                            @endforeach
                            <li><a href="{{url('/trainers')}}">trainer
                                </a></li>
                            <li><a href="{{url('/general_settings')}}">general settings
                                </a></li>
                            <li><a href="{{url('/users')}}">users
                                </a></li>
                            <li><a href="{{url('/roles')}}">permissions
                                </a></li>
                            <li><a href="{{url('/video_shows')}}">Video show
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

     {{-- ************************************ --}}
     <div class="card-body">
        <div class="px-3">

            <div class="panel-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                       <button type="button" class="close" data-dismiss="alert">×</button>
                       <strong>{{ $message }}</strong>
                    </div>
                @endif
        
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                   <strong>Whoops!</strong> There were some problems with your input.
                   <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                   </ul>
                </div>
                @endif
            <form class="form form-horizontal" action= "{{url('general_settings/'. $general_settings->id )}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                @method("PUT")
                <div class="form-body">
                    <h4 class="form-section">
                        <i class="icon-user"></i>general_settings</h4>
         
                        <label class="col-md-3 label-control" for="projectinput1"> logo</label>
                        <div class="col-md-2">
                            <input type="file" id="projectinput1" class="form-control" name="logo_path"  value="{{$general_settings->logo_path}}">
                            <img src="{{ asset('images/'.$general_settings->logo_path)}}">
                        </div>

                     <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput1"> phone</label>
                        <div class="col-md-2">
                            <input type="text" id="projectinput1" class="form-control" name="phone2"  value="{{$general_settings->phone2}}">
                        </div>
                        <label class="col-md-3 label-control" for="projectinput1"> email</label>
                        <div class="col-md-2">
                            <input type="text" id="projectinput1" class="form-control" name="email2"  value="{{$general_settings->email2}}">
                        </div>

                        <label class="col-md-3 label-control" for="projectinput1"> facebook</label>
                        <div class="col-md-2">
                            <input type="text" id="projectinput1" class="form-control" name="facebook"  value="{{$general_settings->facebook}}">
                        </div>

                        <label class="col-md-3 label-control" for="projectinput1"> twitter</label>
                        <div class="col-md-2">
                            <input type="text" id="projectinput1" class="form-control" name="twitter"  value="{{$general_settings->twitter}}">
                        </div>

                        <label class="col-md-3 label-control" for="projectinput1"> instegram</label>
                        <div class="col-md-2">
                            <input type="text" id="projectinput1" class="form-control" name="instegram"  value="{{$general_settings->instegram}}">
                        </div>


                <div class="form-actions">
                  <button class="btn btn-success mb-2" type="submit"  >Update </button>
                </div>
        </form>


      {{-- ************************************ --}}

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