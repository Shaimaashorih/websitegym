<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash Bord</title>
    <link rel="stylesheet" href="{{ URL::asset('src/css/dist/normaliz.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('src/css/dist/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('src/css/dist/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('src/css/dist/main.css') }}" />
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
                    <img src="{{ URL::asset('images') . '/' . $item->logo_path }}" alt="Logo" />
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
                        <img class="" src="{{ URL::asset('src/image/user.png') }}" alt="user.." srcset="">
                    </button>
                    <!-- start drop-down -->
                    <div class="dropdown bx-shadow b-white">
                        <!-- start max-height -->
                        <div class="max-height d-flex column padding-5 gap-5">

                            <a href="#"><i class="fa-solid fa-person"
                                    data-color="#8dc255"></i>{{ Auth::user()->name }}</a>
                            <a href="#"><i class="fa-solid fa-envelope" data-color="#3097ef"></i>inbox</a>

                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i
                                    class="fa-solid fa-arrow-left" data-color="red"></i>logout</a>

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
                            <li><a href="{{ '/dashboardadmin' }}">dashboardadmin
                                </a></li>
                            <li><a href="{{ '/coursesa' }}">courses
                                </a></li>
                            <li><a href="{{ '/workouts' }}">Workout
                                </a></li>
                            <li><a href="{{ 'user_workouts' }}">Workout for users
                                </a></li>
                            <li><a href="{{ '/timetables' }}">Timetable
                                </a></li>
                            <li><a href="{{ '/diet_menus' }}">Food Menu
                                </a></li>
                            @foreach ($articles as $articles)
                                <li><a href="{{ 'articles/' . $articles->id . '/edit' }}">Articles
                                    </a></li>
                            @endforeach
                            <li><a href="{{ url('/trainers') }}">trainers
                                </a></li>
                            <li><a href="{{ url('/general_settings' . '/' . 1 . '/edit') }}">general settings
                                </a></li>
                            <li><a href="{{ url('/users') }}">users
                                </a></li>
                            <li><a href="{{ url('/roles') }}">permissions
                                </a></li>
                            <li><a href="{{ url('/video_shows') }}">Video show
                                </a></li>
                            <li><a href="{{ url('/message') }}">message
                                </a></li>
                            <li><a href="{{ url('/user_dietmenus') }}">user_dietmenus
                                </a></li>
                        </ul>
                    </div>
                </li>
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
        </div>
        <!-- end container -->

        {{-- ************************************ --}}
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Users</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                        اضافة
                        USER</span>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->

        <!-- row -->
        <div class="row">


            <div class="col-lg-12 col-md-12">

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>error</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-right">
                                <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}">Back</a>
                            </div>
                        </div><br>
                        <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2"
                            action="{{ route('users.store', 'test') }}" method="post">
                            {{ csrf_field() }}

                            <div class="">

                                <div class="row mg-b-20">
                                    <div class="parsley-input col-md-6" id="fnWrapper">
                                        <label>user name : <span class="tx-danger">*</span></label>
                                        <input class="form-control form-control-sm mg-b-20"
                                            data-parsley-class-handler="#lnWrapper" name="name" required=""
                                            type="text">
                                    </div>

                                    <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                        <label> email: <span class="tx-danger">*</span></label>
                                        <input class="form-control form-control-sm mg-b-20"
                                            data-parsley-class-handler="#lnWrapper" name="email" required=""
                                            type="email">
                                    </div>
                                </div>

                            </div>

                            <div class="row mg-b-20">
                                <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                    <label> password: <span class="tx-danger">*</span></label>
                                    <input class="form-control form-control-sm mg-b-20"
                                        data-parsley-class-handler="#lnWrapper" name="password" required=""
                                        type="password">
                                </div>

                                <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                    <label> confirm Password: <span class="tx-danger">*</span></label>
                                    <input class="form-control form-control-sm mg-b-20" required=""
                                        type="password">
                                </div>
                            </div>

                            <div class="row mg-b-20">

                                <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                    <label> phone : <span class="tx-danger">*</span></label>
                                    <input class="form-control form-control-sm mg-b-20" name="phone" required=""
                                        type="text">
                                </div>

                            </div>

                            <div class="row row-sm mg-b-20">
                                <div class="col-lg-6">
                                    <label class="form-label"> status</label>
                                    <select name="status" id="select-beast"
                                        class="form-control  nice-select  custom-select">
                                        <option value=""> choose status</option>
                                        <option value="مفعل">active</option>
                                        <option value="غير مفعل">not active</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mg-b-20">
                                <div class="col-xs-12 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label"> Permissions </label>

                                        {!! Form::select('roles_name[]', $roles, [], ['class' => 'form-control', 'multiple']) !!}

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button class="btn btn-main-primary pd-x-20" type="submit">SAVE</button>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button class="btn btn-main-primary pd-x-20" type="reset">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
    {{-- ************************************ --}}

    </div>
    <!-- end container -->


    </div>
    <!-- end page-content -->
    </div>
    <!-- end grid-page -->

    <script src="{{ URL::asset('src/js/jquery-3.6.0.js') }}"></script>
    <script src="{{ URL::asset('src/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('src/js/chart.min.js') }}"></script>
    <script src="{{ URL::asset('src/js/main.js') }}"></script>

</body>

</html>
