@extends('layout/master',[
'partners_first_4'=>$partners_first_4,
'partners_second_4'=>$partners_second_4])

@section('content')
<div class="page-content">
     
            <div class="container">
                <!-- .row start -->
                <div class="row">
  @foreach($partners_first_4 as $partners_first_4) 
                          <div class="col-md-6 col-sm-6">
 <div class="simple-gallery">
                            <img class="gallery-main-image triggerAnimation animated img-responsive" data-animate='fadeIn' src="{{url($partners_first_4->logo)}} " alt=" photo1" width="360" height="216" />
                        </div> 
                                    <div class="custom-heading">
                                      <br>
                            <h3>
                              {{$partners_first_4->name}}
                            </h3>
                        </div>     
                                   
                                        
                                    
</div>
@endforeach

@foreach($partners_second_4 as $partners_second_4) 
                          <div class="col-md-6 col-sm-6">
 <div class="simple-gallery">
                            <img class="gallery-main-image triggerAnimation animated img-responsive" data-animate='fadeIn' src="{{url($partners_second_4->logo)}} " alt=" photo1" width="360" height="216" />
                        </div> 
                                    <div class="custom-heading">
                            <h3>
                              {{$partners_second_4->name}}
                            </h3>
                        </div>     
                                   
                                        
                                    
</div>

                       <!-- .row end -->
                         @endforeach</div>
            </div><!-- .container end -->
          
        </div><!-- .page-content end -->

                    @stop