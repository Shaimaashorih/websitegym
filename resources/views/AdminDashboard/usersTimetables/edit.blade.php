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
                            <li><a href="{{'user_workouts'}}">Workout for users
                                </a></li>
                            <li><a href="{{'/timetables'}}">Timetable
                                </a></li>
                            <li><a href="{{url('/articles/1/edit')}}">Articles
                                </a></li>
                            <li><a href="{{url('/trainers')}}">trainers
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

     @if(\Session::has('sucess'))
     <div class="alert alert-success">
         <p>{{\Session::get('success')}}</p>
     </div>   
 @endif

 
        <form  action= "{{url('timetables/' . $timetables->id )}}" method="POST" enctype="multipart/form-data">
           {{csrf_field()}}
           @method('PATCH')
   
           <div class="form-group row">
             <label> DAY </label>
                 <div class="col-md-6">
                   <select id="projectinput7" name="day" >
                            <option value="SATRDAY" <?php if( $timetables['day'] == 'SATRDAY'){echo "selected";}?> > SATRDAY </option>                                    
                            <option value="SUNDAY"  <?php if( $timetables['day'] == 'SUNDAY'){echo "selected";}?>> SUNDAY </option>                                    
                            <option value="MONDAY"  <?php if( $timetables['day'] == 'MONDAY'){echo "selected";}?>> MONDAY </option>                                    
                            <option value="TUSEDAY"  <?php if( $timetables['day'] == 'TUSEDAY'){echo "selected";}?>> TUSEDAY </option>                                    
                            <option value="WEDNESDAY"  <?php if( $timetables['day'] == 'WEDNESDAY'){echo "selected";}?>>WEDNESDAY  </option>                                    
                            <option value="THURSDAY"  <?php if( $timetables['day'] == 'THURSDAY'){echo "selected";}?>> THURSDAY </option>                                    
                            <option value="FRIDAY"  <?php if( $timetables['day'] == 'FRIDAY'){echo "selected";}?>> FRIDAY </option>  
                   </select>
                 </div>
                     @error('day')
                         <div class="form-error">
                             {{$message}}
                         </div>
                     @enderror
             </div>
   
           <div class="form-group row">
             <label> TIME </label>
             <div class="col-md-9">
                 <input type="time"  class="form-control" name="time"  value="{{$timetables->time}}">
                 <div class="form-control-position">
                   <i class="ft-clock"></i>
               </div>
                     @error('time')
                         <div class="form-error">
                             {{$message}}
                         </div>
                     @enderror
             </div>
           </div>
   
   
           <div class="form-group row">
               <label > workout traininig   </label>
   
                   <select name="workout_id"  class="form-control">
                        @foreach ($workouts as $key => $value)                               
                         <option {{$value->id == $timetables->workout_id?'selected':''}} value="{{$value->id}}">{{$value->name}}</option>                                    
                        @endforeach                                                          
                       
                   </select>
   
               </div>
   
                       <div class="btn-container">
                           <button type="submit" >Update</button>
                       </div>
                       <br>
                       <div class="btn-container">
                           <button type="reset" >Cancel</button>
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