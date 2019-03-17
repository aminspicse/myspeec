@extends('layouts.homelayout')
@section('content')
<section class="demo-wrapper" id="demo-top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2>Our Services</h2>
                <p>We created awesome demos to show you the potentioal off saas app. Easy to import and highly customizable, they make your life easier</p>
            </div>
        </div>
    </div>
    <div class="container lg">
        <ul class="row theme-demo-listing">
            <?php
            $service = DB::table('services')->limit(6)->get();
            ?>
            @foreach($service as $result)
            <li class="col-6 col-md-4">
                <div class="top-bar"><img src="{{url('public/frontend/images/top-bar.png')}}" alt=""></div>
                <div class="thumbnail-holder">
                    <figure><img src="{{$result->service_thumbnail}}" alt=""></figure>
                    <div class="mask">
                        <a  class="ovelay-icon" data-toggle="modal" data-target="#{{$result->service_id}}"><span class="icon-go"></span></a>
                       {{--  <button type="button" class="ovelay-icon" data-toggle="modal" data-target="#exampleModalCenter">
                       </button> --}}
                   </div>
               </div>
           </li>
           <!-- Modal -->
           <div class="modal fade" id="{{$result->service_id}}" role="dialog">
              <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="{{$result->service_id}}">{{$result->service_name}}</h6>
                        <button type="button" data-dismiss="modal">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <?php $doc =new DOMDocument();$doc->loadHTML($result->service_details);echo $doc->saveHTML() ?>
                    </div>
                </div>
            </div>
        </div>
@endforeach
</ul>
</div>
</section>

<!-- ==============================================
**Banner Variety**
=================================================== -->
<section class="banner-variety horizontal-tab padding-lg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <h2>Visit Us</h2>
                <p>Star View Complex (4<sup>th</sup> Floor), Vartokola (Station Road),Sylhet.</p>
            </div>
        </div>
        <div class="tab-content" id="myTabContent">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.359642316081!2d91.86451081437157!3d24.885711350375264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751abff3195ec15%3A0xe9444694d652ddad!2sWeb+Tech+Bd!5e0!3m2!1sen!2sbd!4v1546427363615" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>

<!-- ==============================================
**Whats Included**
=================================================== -->
<section class="what-included-wrapper padding-lg">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-7">
                <h2>What our clients think</h2>
                <p>We measure our success by what our customers think. It’s the only measure of our performance of any value to us. If you would like us to send you some references it will be our pleasure.</p>
            </div>
        </div>
        <div class="generate-forms">
            <ul class="counter-listing">
                <li> <span class="counter">40</span><span>+</span> <span class="sub-title">Softwares</span> </li>
                <li>
                    <div class="couter-outer"><span class="counter">3.5</span> <span>X</span></div>
                    <span class="sub-title">FASTER</span> </li>
                    <li>
                        <div class="couter-outer"><span class="counter">60</span><span>+</span></div>
                        <span class="sub-title">CLIENTS</span> </li>
                    </ul>
                </div>
            </div>
            <figure class="what-included-img"><img src="images/wt-included-img.png" alt=""></figure>
        </section>
@endsection