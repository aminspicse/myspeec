@extends('layouts.publiclayout')
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
            $service = DB::table('services')->get();
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

@endsection