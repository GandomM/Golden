@extends('layout/master')
@section('content')
 <!-- .page-content start -->
        <div class="page-content">
            <!-- .container start -->
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb filters">
                            @foreach($products as $product)
                            <li><a href="{{URL::to('/product_detail/'
                                        .$product->id.'/'.$product->product_name)}}"> 
                                {{$product->product_name}}   
                              </a></li>
                            @endforeach
                        </ul>
                    </div><!-- .col-md-12 end -->                    
                </div><!-- .row.gallery-filters end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
        <div class="page-content">
             
            <div class="container">
                <div class="row mb-40">
                     
                    <ul id="galleryitems" class="isotope isotopeitems-full">
                         
                        <li class="col-xs-6 col-md-4 isotope-item interior">
                          @foreach($products as $product)
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                      
                                    <img src="{{'images/'.$product->image}} " 

                                    class="img-responsive" alt=""/>
 
                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="" />
                                                
                                                <!-- <span class="icon-container">
                                                    <img src="assests/img/svg/arr.svg" class="img-responsive" alt="arrow icon"/>
                                                </span> -->
                                            </a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end --> 
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                          @endforeach
                        </li><!-- .isotope-item end -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
    
                    </ul><!-- #galleryitems.isotope end -->
                  
                </div><!-- .row end -->
            </div><!-- .container-fluid end -->
                  
        </div><!-- .page-content end -->
        @stop