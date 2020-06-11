@extends('layout/master')

@section('content')
 <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="simple-gallery">
                            <img class="gallery-main-image triggerAnimation animated img-responsive" data-animate='fadeIn' 

                             alt="Construction HTML Template" width="555" height="333" />

                            <ul class="gallery-thumbnails triggerAnimation animated" data-animate='fadeIn'>
                                <li class="gallery-thumb">
                                    <img src="" class="img-responsive" alt="Construction HTML Template" width="555" height="333" />
                                    <div class="hover-overlay"></div>
                                </li>
                                <li class="gallery-thumb">
                                    <img src="" class="img-responsive" alt="Construction HTML Template" width="555" height="333" />
                                    <div class="hover-overlay"></div>
                                </li>
                                <li class="gallery-thumb">
                                    <img src="" class="img-responsive" alt="Construction HTML Template" width="555" height="333" />
                                    <div class="hover-overlay"></div>
                                </li>
                            </ul>
                        </div>   
                    </div><!-- .col-md-6 end -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
                    <div class="col-md-6 col-sm-6">
                        <h1>
                            {{$project_details->project_name}}
                        </h1>
                        <div class="custom-heading style-1">
                            <h2>
                                
درباره پروژه</h2>
                        </div>
                       <!--  

                        <div class="custom-heading style-1">
                            <h2>
خدمات ارائه شده</h2>
                        </div> -->
                        <ul class="fa-ul">
                            <li> 
                              صاحب پروژه: :
                           

                            

{{$project_details->owner}}  </li>
                            <li>
                                دیزاین:

                                {{$project_details->design}}  
                            </li>
                            <li>
رنگ:
                                {{$project_details->color}}

                            </li>
                            <li>
                                ضخامت:
{{$project_details->technis}}  

                            </li>
                               <li>
                                مواد آلمونیم:
{{$project_details->matrial}}  

                            </li>
                               <li>
                                موقعیت:
{{$project_details->location}}  

                            </li>
                               <li>
                                شهر:
{{$project_details->city}}  

                            </li>
                               <li>
                                تاریخ:
{{$project_details->date}}  

                            </li>
                        </ul>
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
@stop