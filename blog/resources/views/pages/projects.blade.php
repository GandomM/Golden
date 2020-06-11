@extends('layout/master',[
'project_company'=>$project_company,
'project_homes'=>$project_homes,
'top_projects1'=>$top_projects1,
'top_projects2'=>$top_projects2
])
@section('content')

 <div class="page-content">
            <div class="container">
                <div class="row">
                    
                    <aside class="col-md-2 col-xs-12 aside">
                        <ul class="aside-widgets">
                            <li class="widget widget_nav_menu clearfix">
                                <div class="title">
                                    <h3> 
                                    <!--      پروژه کمپنی ها و هوتل ها -->
                                    Top Projects
                                    </h3>
                                </div>
                                @foreach($project_company as $project_company)
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="{{URL::to('/project_detail/'
                                        .$project_company->id.'/'.$project_company->project_name)}}">

                                            {{$project_company->project_name}} 
                                        </a>
                                    </li>

                                </ul><!-- .menu end -->
                                 @endforeach
                            </li><!-- .widget.widget_nav_menu end -->

                        </ul><!-- .aside-widgets end -->
                    </aside><!-- .aside end -->

                  
                    
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
                    <div class="features-boxes-wrapper col-md-8">
                        <div class="row mb-0">
                              <h1 style="text-align: center;
                                margin-bottom:20px;
                                text-decoration-style: initial;
                                text-color: blue
                              ">  مشهورترین پروژه ها    </h1>
 @foreach($top_projects1 as $top_projects1)
<div class="feature-box col-md-6 col-sm-6 style-2">

                                <div class="feature-media">
                                    <img src="assests/img/slider/oranos.jpg" class="img-responsive" alt=" قصر عروسی اورانوس  "/>

                                    <a href="{{URL::to('/project_detail/'
                                        .$top_projects1->id.'/'.$top_projects1->project_name)}}
                                    " class="read-more">
                                        <span class="icon-container">
                                            <img class="svg-black img-responsive" src="assests/img/svg/arrow.svg" alt="arrow icon"/>
                                        </span>
                                    </a>
                                </div><!-- .feature-media end -->

                                <div class="feature-body">
                                   
                                    <div class="custom-heading style-1">
                                        
                                        <a href="{{URL::to('/project_detail/'
                                        .$top_projects1->id.'/'.$top_projects1->project_name)}}">
                                            <h4> 
 {{$top_projects1->project_name}}
                                             </h4>
                                        </a>

                                    </div><!-- .custom-heading end -->
                                   

                                    <p>
                                       درباره پروژه

                                    </p>
                                   <ul class="fa-ul">
                                        <li>
                                            دیزاین: 
                                           {{$top_projects1->design}}   
                                        </li>
                                        <li>
                                          رنگ : 
                                           {{$top_projects1->color}}
                                        </li>
                                        <li>
                                            ضخامت
                                           {{$top_projects1->technis}} 
                                        </li>
                                   
                                    </ul>
                                </div><!-- .feature-body end -->
                            </div>
@endforeach

 @foreach($top_projects2 as $top_projects2)
<div class="feature-box col-md-6 col-sm-6 style-2">

                                <div class="feature-media">
                                        <img src="assests/img/slider/waterCastel.jpg" class="img-responsive" alt=""/>

                                    <a href="{{URL::to('/project_detail/'
                                        .$top_projects2->id.'/'.$top_projects2->project_name)}}" class="read-more">
                                        <span class="icon-container">
                                            <img class="svg-black img-responsive" src="assests/img/svg/arrow.svg" alt="arrow icon"/>
                                        </span>
                                    </a>
                                </div><!-- .feature-media end -->

                                <div class="feature-body">
                                   
                                    <div class="custom-heading style-1">
                                        
                                        <a href="{{URL::to('/project_detail/'
                                        .$top_projects2->id.'/'.$top_projects2->project_name)}}">
                                            <h4> 
 {{$top_projects2->project_name}}
                                             </h4>
                                        </a>

                                    </div><!-- .custom-heading end -->
                                   

                                    <p>
                                       درباره پروژه
                                   </p>
                                    <ul class="fa-ul">
                                        <li>
                                            دیزاین: 
                                           {{$top_projects2->design}}   
                                        </li>
                                        <li>
                                          رنگ : 
                                           {{$top_projects2->color}}
                                        </li>
                                        <li>
                                            ضخامت
                                           {{$top_projects2->technis}} 
                                        </li>
                                   
                                    </ul>

                               
                                  </div><!-- .feature-body end -->
                              
                            </div><!-- .feature-box-end -->
    @endforeach


  </div>
</div>
  <aside class="col-md-2 col-xs-12 aside">
                        <ul class="aside-widgets">
                            <li class="widget widget_nav_menu clearfix">
                                <div class="title">
                                    <h3> 
                                   پروژه منازل و ساختمان های رهایشی
                                    </h3>
                                </div>
                                @foreach($project_homes as $project_homes)
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="{{URL::to('/project_detail/'
                                        .$project_homes->id.'/'.$project_homes->project_name)}}">

                                            {{$project_homes->project_name}} 
                                        </a>
                                    </li>

                                </ul><!-- .menu end -->
                                 @endforeach
                            </li><!-- .widget.widget_nav_menu end -->

                        </ul><!-- .aside-widgets end -->
                    </aside><!-- .aside end -->

                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->  

        @stop