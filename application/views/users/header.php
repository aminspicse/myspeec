<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
//new header
?>
<!doctype html>
<html lang="en" >
  <head>
    
  <SCRIPT language=JavaScript>

        var message = "Right Button is Disabled";

        function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }

        if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }

        document.onmousedown = rtclickcheck;

    </SCRIPT>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="keywords" content="myspeec, myspeech, speeker"/>
    <meta name="description" content="MySpeec is a digital free social media. We believe in freedom of speech. We believe open journalism. Use MySpace and highlight all the events that happen around you and express your opinion. এটি একটি ডিজিটাল মুক্তবাক সামাজিক মাধ্যম । আমরা বাক স্বাধীনতায় বিশ্বাস করি। আমরা ওপেন সাংবাদিকতায় বিশ্বাস করি। মাইস্পিস ব্যাবহার করুন আর আপনার আশেপাশে ঘটে যাওয়া সকল ঘটনা তুলে ধরুন এবং আপনার মতামত ব্যক্ত করুন। "/>
    <meta name="subject" content="MySpeec Is a Digital Social Media">
    <meta name="copyright" content="MySpeec">
    <meta name="owner" content="MD. AL AMIN">
    <meta name="url" content="<?= base_url()?>">
    <meta name="identifier-URL" content="<?= base_url()?>">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="1 days">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
<!-- facebook share--> 
    <meta property="og:url"           content="<?= base_url()?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="MySpeec" />
    <meta property="og:description"   content="MySpeec is a digital free social media. We believe in freedom of speech. We believe open journalism. Use MySpace and highlight all the events that happen around you and express your opinion. এটি একটি ডিজিটাল মুক্তবাক সামাজিক মাধ্যম । আমরা বাক স্বাধীনতায় বিশ্বাস করি। আমরা ওপেন সাংবাদিকতায় বিশ্বাস করি। মাইস্পিস ব্যাবহার করুন আর আপনার আশেপাশে ঘটে যাওয়া সকল ঘটনা তুলে ধরুন এবং আপনার মতামত ব্যক্ত করুন। " />
    <meta property="og:image"         content="http://www.myspeec.com/uploads/nomination-awamilig.jpg" />
    <!-- START META FOR APPLE PHONE-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="yes" name="apple-touch-fullscreen" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <!-- END -->
    <!-- this tag use for bing search engine (start) -->
    <META NAME="geo.position" CONTENT="latitude; longitude">
    <META NAME="geo.placename" CONTENT="Place Name">
    <META NAME="geo.region" CONTENT="Country Subdivision Code">
    <!--end-->
    <title><?php if($title == ''){
        echo "MySpeec";
        }else{ 
            echo $title; }?></title>
    <link rel="icon" href="<?= base_url('assets/users/image/myspeec.png')?>" type="image/png" sizes="40x40"> 
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/users/bootstrap/css/bootstrap.min.css')?>">
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <!-- jquery slim -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/users/jquery/jquery-3.3.1.slim.min.js"><\/script>')</script>
    <!-- jquery slim -->

    <!-- jquery popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/users/jquery/popper.js"><\/script>')</script>
     <!-- jquery popper -->

    <!--bootstrap js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/users/bootstrap/js/bootstrap.min.js"><\/script>')</script>
    <!--bootstrap js -->

    <link rel="stylesheet" href="<?= base_url() ?>assets/users/headandnav/css/style.css">
    <script src="<?= base_url() ?>assets/users/headandnav/js/main.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!--Infinit pagination css-->
    <link rel="stylesheet" href="<?= base_url('assets/users/infinitpagination.css')?>">
  </head>
  <body class=" bg-light">
    <header class="cd-main-header">
        <nav class="navbar navbar-expand-md navbar-light  bg-light fixed-top ">
            <a class="navbar-brand" href="<?= base_url('home') ?>">MySpeec</a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <div class="col-sm-5 col-xs-12 col-md-5 mrg">  
                    <form action="<?= base_url('posts/')?>" method="GET" class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="search" class="form-control"  name="keyword" id="search_main" value="<?= $keyword ?>" placeholder="Search...">
                            <button type="submit" name="search"><i class="fa fa-search"></i></button> 
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav mr-auto navbar-right">
                    <li class="nav-item">
                        <a href="<?= base_url('allspeaker')?>" title="All Speaker"><i class="fas fa-users"></i></a> |
                        <a href="<?= base_url('new_speec')?>" title="New Post"><i class="fas fa-plus-circle"></i></a> | 
                        <a href="<?= base_url('sms')?>" title="SMS"><i class="fas fa-sms"><span class="badge badge-light">4</span></i></a> | 
                        <a href="<?= base_url('mypost')?>" title="MySpeec"><i class="fas fa-hashtag"></i></a> | 
                        <a href="<?= base_url("live")?>" onclick='live() + chat()' title='Live'><i class='fas fa-video'></i></a>
                    </li>  
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img width="20px" class="rounded-circle" src="<?= $this->session->userdata("photo")?>" alt=""><?= $this->session->userdata("fname").' '.$this->session->userdata("lname")?></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="<?= base_url('profile') ?>">Profile</a>
                            <a class="dropdown-item" href="<?= base_url('loginactivities') ?>">Log Activities</a>
                            <a class="dropdown-item" href="<?= base_url('changepassword') ?>">Change Password</a>
                            <a class="dropdown-item" href="<?= base_url('editinfo') ?>">Edit Profile</a>
                            <a class="dropdown-item" href="<?= base_url('logout')?>">Logout</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('score')?>" title="10 point = 1 Bangladeshi Taka">Your Scoure<span class="badge"><?= $score ?></span></a>
                    </li>
                    

                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
            </div>
        </nav>
        <br>
    </header>


<style>
    @media only screen and (min-width: 768px) {
	  .mrg{
		margin-left: 51px
		}
	}
</style>