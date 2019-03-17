<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Web TechBD | We Belive In Work</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Iconmoon -->
    <link href="{{asset('public/frontend/css/iconmoon.css')}}" rel="stylesheet">
    <!-- Landing Page -->
    <link href="{{asset('public/frontend/css/landing-page.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('public/frontend/css/custom.css')}}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<!-- ==============================================
**Preloader**
=================================================== -->
<div id="loader" style="display: none;">
    <div id="element">
        <div class="circ-one"></div>
        <div class="circ-two"></div>
    </div>
</div>

<!-- ==============================================
**Header**
=================================================== -->
<header class="opt5 landing"> 
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-info bg-info" >
        <div class="container"> <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('public/frontend/images/logo.png')}}" class="img-fluid logo1" alt=""><img src="{{url('public/frontend/images/landing-logo.png')}}" class="img-fluid logo2" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}" style="color:#fbff04;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color:#fbff04;">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color:#fbff04;">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color:#fbff04;">Protfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color:#fbff04;">Contact</a></li>
                </ul>
                <ul class="navbar-right d-flex">
                    <li><a href="{{route('register')}}">Signup</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation --> 
</header>
<br><br><br><br>
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card" style="padding: 5px;">
                <div class="card-header">
                    <h3>Admission Form</h3>
                </div>
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Application's full name(captial)</label>
                                <input type="text" name="name" class="form-control" required="1" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Father's Name</label>
                                <input type="text" name="student_fname" class="form-control" required="1" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Mother's Name</label>
                                <input type="text" name="student_mname" class="form-control" required="1" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date Of Birth</label>
                                <input type="date" name="student_birthdate" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Contact No</label>
                                <input type="text" name="student_phone" class="form-control" required="1"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="email" name="email" class="form-control" required="1"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Present Address</label>
                                <input type="text" name="present_address" class="form-control" required="1"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Last Education Qualification</label>
                                <input type="text" name="lasteducation" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Course Name</label>
                                <select name="course_id" class="form-control">
                                    <option value="1">Web Design</option>
                                    <option value="2">Web Development</option>
                                    <option value="3">Web Development Framework</option>
                                    <option value="4">Graphics Design</option>
                                    <option value="5">Programming</option>
                                    <option value="6">MS Word 2016</option>
                                    <option value="7">MS Excel 2016 (Advance)</option>
                                    <option value="8">MS Access 2016 (Advance)</option>
                                    <option value="9">Basic Computer</option>
                                    <option value="10">Digital Marketing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Shift</label>
                                <select name="shift_id" class="form-control">
                                    <option value="1">Morning (10:00 - 1:00)</option>
                                    <option value="2">Day (02:30 - 6:00)</option>
                                    <option value="3">Evening (06:00 - 8:00)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Gender</label>
                                <select name="student_gender" class="form-control">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Photo</label>
                                <input type="file" name="student_photo" class="form-control-file"/>
                                <i>Note: File Size Max: 1 MB</i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-block" value="Apply">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ==============================================
**Why Protech**
=================================================== -->
<section class="why-protech-outer padding-lg">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <h2>Why Web TechBD?</h2>
                <p>With amazing features, beautiful design and well-thought out demos, Web TechBD is the perfect choice to you.</p>
            </div>
        </div>
        <ul class="row features-listing">
            <li class="col-md-4">
                <div class="inner"> <span class="icon"><img src="{{url('public/frontend/images/landing-icon-1.png')}}" alt=""></span>
                    <h3>Beautiful elements</h3>
                    <p>Concepta comes bundled with a bunch re-usable elements for your site.</p>
                </div>
            </li>
            <li class="col-md-4">
                <div class="inner"> <span class="icon"><img src="{{url('public/frontend/images/landing-icon-2.png')}}" alt=""></span>
                    <h3>Outstanding support</h3>
                    <p>We are here to help you with any issues you may encounter along the way.</p>
                </div>
            </li>
            <li class="col-md-4">
                <div class="inner"> <span class="icon"><img src="{{url('public/frontend/images/landing-icon-3.png')}}" alt=""></span>
                    <h3>Clean Code</h3>
                    <p>You can find our code well organized, commented and readable.</p>
                </div>
            </li>
            <li class="col-md-4">
                <div class="inner"> <span class="icon"><img src="{{url('public/frontend/images/landing-icon-4.png')}}" alt=""></span>
                    <h3>Well Documented</h3>
                    <p>As you can see in the source code, we provided a comprehensive.</p>
                </div>
            </li>
            <li class="col-md-4">
                <div class="inner"> <span class="icon"><img src="{{url('public/frontend/images/landing-icon-5.png')}}" alt=""></span>
                    <h3>Free Updates</h3>
                    <p>When you purchase from us, you'll freely receive future updates.</p>
                </div>
            </li>
            <li class="col-md-4">
                <div class="inner"> <span class="icon"><img src="{{url('public/frontend/images/landing-icon-6.png')}}" alt=""></span>
                    <h3>Fits every device</h3>
                    <p>Retina ready and fully responsive, Concepta delivers on every device.</p>
                </div>
            </li>
            <li class="col-md-4">
                <div class="inner"> <span class="icon"><img src="{{url('public/frontend/images/landing-icon-7.png')}}" alt=""></span>
                    <h3>Free Service</h3>
                    <p>We will provide you free service for first two years.</p>
                </div>
            </li>
            <li class="col-md-4">
                <div class="inner"> <span class="icon"><img src="{{url('public/frontend/images/landing-icon-8.png')}}" alt=""></span>
                    <h3>User Friendly</h3>
                    <p>Protech Saas easy to use for any technical &amp; nontechnical People.</p>
                </div>
            </li>
            <li class="col-md-4">
                <div class="inner"> <span class="icon"><img src="{{url('public/frontend/images/landing-icon-9.png')}}" alt=""></span>
                    <h3>Creative Design</h3>
                    <p>It's comes with creative &amp; smart design layout.</p>
                </div>
            </li>
        </ul>
    </div>
</section>

<!-- ==============================================
**Technologies and Plugins**
=================================================== -->
<section class="technology-plugins-wrapper padding-lg">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <h2>Our Courses</h2>
                <p>We Also Provide IT Trainings For Freshers.</p>
            </div>
        </div>
        <ul class="row tech-plugins-listing">
            <li class="col-6 col-md-3">
                <div class="inner"><a href="https://getbootstrap.com/" target="_blank"><img src="{{url('public/frontend/images/bootstrap-logo.png')}}" alt=""></a></div>
            </li>
            <li class="col-6 col-md-3">
                <div class="inner"><img src="{{url('public/frontend/images/html5-logo.png')}}" alt=""></div>
            </li>
            <li class="col-6 col-md-3">
                <div class="inner"><img src="{{url('public/frontend/images/css3-logo.png')}}" alt=""></div>
            </li>
            <li class="col-6 col-md-3">
                <div class="inner"><a href="#" target="_blank"><img src="{{url('public/frontend/images/disqus-logo.png')}}" alt=""></a></div>
            </li>
            <li class="col-6 col-md-3">
                <div class="inner"><a href="#" target="_blank"><img src="{{url('public/frontend/images/owl-carousel-logo.png')}}" alt=""></a></div>
            </li>
            <li class="col-6 col-md-3">
                <div class="inner"><a href="#" target="_blank"><img src="{{url('public/frontend/images/bx-slider-logo.png')}}" alt=""></a></div>
            </li>
            <li class="col-6 col-md-3">
                <div class="inner"><a href="#" target="_blank"><img src="{{url('public/frontend/images/magnific-popup.png')}}" alt=""></a></div>
            </li>
            <li class="col-6 col-md-3">
                <div class="inner"><a href="#" target="_blank"><img src="{{url('public/frontend/images/mailchimp-logo.png')}}" alt=""></a></div>
            </li>
        </ul>
    </div>
</section>

<!-- ==============================================
**Get It Now**
=================================================== -->
<section class="get-it-now-wrapper">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-7">
                <h2>Need A Software??</h2>
                <p>Responsive, feature-packed, easy to build on - get it now exclusively on the ThemeForest marketplace.</p>
                <a href="#" class="btn purchase">Contact Now</a> </div>
            </div>
        </div>
    </section>

<!-- ==============================================
**Footer**
=================================================== -->
<footer class="footer landing-footer">
    <div class="container clearfix">
        <div class="foot-logo"><a href="sample.html"><img src="{{('public/frontend/images/logo.png')}}" class="img-fluid" alt=""></a></div>
        <div class="right">
            <div class="copyright">© 2019 All rights reserved</div>
            <ul class="social">
                <li><a href="sample.html"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="sample.html"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="sample.html"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- Scroll to top --> 
<a href="http://protechtheme.com/saas/#" class="scroll-top" style="display: none;"><i class="fa fa-angle-up" aria-hidden="true"></i></a> 

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script> 
<!-- Popper JS --> 
<script src="{{asset('public/frontend/js/popper.min.js')}}"></script> 
<!-- Bootsrap JS --> 
<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script> 
<!-- Counterup JS --> 
<script src="{{asset('public/frontend/js/waypoints.min.js')}}"></script> 
<!-- Counter Up JS --> 
<script src="{{asset('public/frontend/js/counterup.min.js')}}"></script> 
<!-- Custom JS --> 
<script src="{{asset('public/frontend/js/custom.js')}}"></script>
</body>
</html>