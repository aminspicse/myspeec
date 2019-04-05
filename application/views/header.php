<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="robots" content="noindex" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="keywords" content="myspeec, myspeech, speeker"/>
    <meta name="description" content="MySpeec is a digital free social media. We believe in freedom of speech. We believe open journalism. Use MySpace and highlight all the events that happen around you and express your opinion. এটি একটি ডিজিটাল মুক্তবাক সামাজিক মাধ্যম । আমরা বাক স্বাধীনতায় বিশ্বাস করি। আমরা ওপেন সাংবাদিকতায় বিশ্বাস করি। মাইস্পিস ব্যাবহার করুন আর আপনার আশেপাশে ঘটে যাওয়া সকল ঘটনা তুলে ধরুন এবং আপনার মতামত ব্যক্ত করুন। "/>
    <meta name="subject" content="MySpeec Is a Digital Social Media">
    <meta name="copyright" content="MySpeec">
    <meta name="owner" content="MD. AL AMIN">
    <meta name="url" content="http://myspeec.com/">
    <meta name="identifier-URL" content="http://myspeec.com/">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="1 days">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
<!-- facebook share-->
    <meta property="og:url"           content="http://www.myspeec.com/" />
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
    <title>MySpeec</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <script src="<?= base_url('assets/css/bootstrap.min.js') ?>"></script>
    

    <link rel="stylesheet" href="<?= base_url() ?>assets/headandnav/css/style.css">
    <script src="<?= base_url() ?>assets/headandnav/js/modernizr.js"></script>

    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script> 
    <script src="<?= base_url() ?>assets/headandnav/js/main.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- search live -->


<!--search live -->
    
</head>
<body class="bg-light">
    <header class="cd-main-header">
            <a href="<?= base_url() ?>" class="cd-logo"><img src="<?= base_url() ?>assets/headandnav/img/cd-logo.svg" alt=""></a>
            
            <div class="">
                <form action="<?= base_url('Search/posts/')?>" method="GET">
                    <input type="search" name="search" value="<?= $search ?>" placeholder="Search...">
                    <button type="submit" name="keyword"><i class="fa fa-search"></i></button>
                </form>
            </div> <!-- cd-search -->

            <a href="#0" class="cd-nav-trigger"><span></span></a>

            <nav class="cd-nav">
                <ul class="cd-top-nav">
                    <li><a href="<?= base_url() ?>" class="card-link"> <i class="fa fa-home"></i> Home</a></li>
                    <li><a href="<?= base_url() ?>" class="card-link"> <i class="fa fa-bell"></i> Notification</a></li>
                    
                    <li class="has-children account">
                        <?php if($this->session->userdata('user_id') == true){ ?>
                            
                        <?php }?> 
                        <a href="<?= base_url() ?>Login/" class="card-link">
                        <img src="<?= $this->session->userdata("photo")?>" alt="">
                            <?php if($this->session->userdata('user_id') == true){
                                
                                echo $this->session->userdata('fname');
                            }else{
                                echo "Need SignIn";
                            }

                            ?>
                        </a>
                        <?php if($this->session->userdata('user_id') == true){?>
                        <ul>
                           
                            <li><a href="<?= base_url() ?>Profile" class="card-link">Profile</a></li>
                            <li><a href="#0" class="card-link">Edit Account</a></li>
                            <li><a href="<?= base_url()?>Login/logout" class="card-link">Logout</a></li>

                        </ul>
                        <?php } ?>
                    </li>
                </ul>
            </nav>
        </header> <!-- .cd-main-header -->

   
