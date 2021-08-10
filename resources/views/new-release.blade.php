@extends('layouts.backend')


@section('page-title')

Dashboard - {{Auth::user()->name}}

@endsection

@section('sidebar')
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

    <div>
        <div class="mt-5">
            <p class="innerpage-site-title">YVE</p>
        </div>
        <ul class="nav menu">
            <li><a href="/dashboard">MUSIC</a></li>
            <li><a href="/analytics">ANALYTICS</a></li>
            <li class="active"><a href="/royalties">ROYALTIES</a></li>
            <li><a href="/promotion">PROMOTION</a></li>
        </ul>
    </div>

    <div class="line-divider">
        
    </div>

    <div class="side-bar-bottom-text">
        <h3>We are here to help</h3>
        <p>Ask a question or file a 
            suppoort ticket, manage 
            request, report on issues. 
            Our support team will get 
        back to you in no time</p>
    </div>

    <div class="btn-area">
        <a href="#" class="btn btn-circle btn-primary">Get Support Now</a>
    </div>

    <div>
        <div class="terms">

            <ul>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Help</a></li>
            </ul>



            <div class="developer-mention mt-4">
                <small>Created by Manifest Multimedia</small>
            </div>
        </div>
    </div>

</div>
<!--/.sidebar-->
@endsection

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main menu-sidearea custom-main-box">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default bo-radius">
                <div class="panel-heading">
                    <div class="heading-bar">
                        <div class="greetings">
                            <h1 class="greet">Good morning, {{Auth::user()->name}}</h1>
                            <small>Ready to get your music out there?</small>
                        </div>
                        <div>
                            <div class="btn-div">
                                <a href="#" class="btn btn-default btn-circle create-new"><span></span> + Create New</a>
                                <a href="#" class="btn btn-default btn-rounded"><span><img src="../images/hi1.png"></span></a>
                                <a href="#" class="btn btn-default btn-rounded"><span><img src="../images/hi2.png"></span></a>
                                <a href="#" class="btn btn-default btn-rounded"><span><img src="../images/hi3.png"></span></a>
                                <a href="#" class="btn btn-default btn-rounded-img">
                                    <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="round-tabs">
                            <ul class="nav nav-pills">
                                <li><a href=""><small>1HR</small></a></li>
                                <li><a href=""><small>1D</small></a></li>
                                <li class="active"><a href=""><small>1W</small></a></li>
                                <li><a href=""><small>1M</small></a></li>
                                <li><a href=""><small>1Y</small></a></li>
                            </ul>										
                    </div>

                    <span class="pull-right clickable panel-toggle panel-button-tab-left hideme"><em class="fa fa-toggle-up"></em></span></div>
                    <div class="panel-body custom-body">
                        <div class="panel panel-default">
                            <div class="panel-body tabs">
                                <ul class="nav nav-pills custom-pills">
                                    <li class="active"><a href="#pilltab1" data-toggle="tab" aria-expanded="true">ALL(5,000,000)</a></li>
                                    <li class=""><a href="#pilltab2" data-toggle="tab" aria-expanded="false">SPOTIFY(1,000,000)</a></li>
                                    <li class=""><a href="#pilltab3" data-toggle="tab" aria-expanded="true">APPLE(1,000,000)</a></li>
                                    <li class=""><a href="#pilltab4" data-toggle="tab" aria-expanded="true">TIDAL(1,000,000)</a></li>
                                    <li class=""><a href="#pilltab5" data-toggle="tab" aria-expanded="true">YOUTUBE(1,000,000)</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="pilltab1">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="slider-top-text">We've got you covered, just select a type of release to start with:</h4>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-md-7">
                                                <div class="dashboard-green-slider shadow-box-wp">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container slider-rounded">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">

                                                                <div class="release-bar">
                                                                    <div>
                                                                        <p class="tag-line">Latest release</p>
                                                                    </div>
                                                                    <div>
                                                                        <img src="../images/spotify.png" class="img-fluid">
                                                                    </div>
                                                                </div>
                                                                <div class="tracks">
                                                                    <div>
                                                                        <p class="track_cat">SINGLE</p>
                                                                        <h2 class="track_name">Self Help</h2>
                                                                        <p class="singer"><span>By </span><span> Fameye</span></p>
                                                                        <p class="track_time">2021-1 song, 2 min 41sec</p>
                                                                    </div>
                                                                    <div>
                                                                        <img src="../images/mg.png" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="time-line">
                                                                    <div>
                                                                        <p class="time-line-heading">Last Week <span class="red-drop"><i class="glyphicon glyphicon-triangle-bottom "></i> 12%</span></p>
                                                                        <h3 class="time-line-subheading">150,000 plays</h3>
                                                                    </div>
                                                                    <div>
                                                                        <p class="time-line-heading">Last Week <span class="white-top"><i class="glyphicon glyphicon-triangle-top "></i> 13%</span></p>
                                                                        <h3 class="time-line-subheading">150,000 plays</h3>
                                                                    </div>							
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="swiper-pagination"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 shadow-box">
                                                <div>
                                                    <h2 style="margin-top: 0px;" class="bps-text">Best Performing Stores</h2>
                                                    <div class="stores-lists">
                                                        <div class="store">
                                                            <small>Itunes</small>
                                                            <p><b>50%</b></p>
                                                        </div>
                                                        <div class="bar">
                                                            <div class="progress">
                                                                <div data-percentage="0%" style="width: 50%;" class="progress-bar progress-bar-red" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="stores-lists">
                                                        <div class="store">
                                                            <small>Spotify</small>
                                                            <p><b>50%</b></p>
                                                        </div>
                                                        <div class="bar">
                                                            <div class="progress">
                                                                <div data-percentage="0%" style="width: 50%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="stores-lists">
                                                        <div class="store">
                                                            <small>Tidal</small>
                                                            <p><b>15%</b></p>
                                                        </div>
                                                        <div class="bar">
                                                            <div class="progress">
                                                                <div data-percentage="0%" style="width: 15%;" class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="stores-lists">
                                                        <div class="store">
                                                            <small>Amazon Music</small>
                                                            <p><b>7%</b></p>
                                                        </div>
                                                        <div class="bar">
                                                            <div class="progress">
                                                                <div data-percentage="0%" style="width: 7%;" class="progress-bar progress-bar-warning" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="stores-lists">
                                                        <div class="store">
                                                            <small>Boomplay</small>
                                                            <p><b>3%</b></p>
                                                        </div>
                                                        <div class="bar">
                                                            <div class="progress">
                                                                <div data-percentage="0%" style="width: 3%;" class="progress-bar progress-bar-info" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="shadow-box">
                                                    <h2 style="margin-top: 0px;" class="bps-text">Best Performing Countries</h2>
                                                    <div class="row custom-flex-center">
                                                        <div class="col-md-6 col-ls-6 col-sm-6 col-xs-6">
                                                            <div class="country-tab">
                                                                <div class="country-tabs">
                                                                    <div>
                                                                        <img src="../images/flag1.png" class="img-responsive">
                                                                        <span class="country-name">GHA</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="green-drop"><i class="glyphicon glyphicon-triangle-top "></i> 12%</span>	
                                                                    </div>
                                                                </div>
                                                                <div class="country-tabs">
                                                                    <div>
                                                                        <img src="../images/flag2.png" class="img-responsive">
                                                                        <span class="country-name">GBR</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="green-drop"><i class="glyphicon glyphicon-triangle-top "></i> 12%</span>	
                                                                    </div>
                                                                </div>
                                                                <div class="country-tabs">
                                                                    <div>
                                                                        <img src="../images/flag3.png" class="img-responsive">
                                                                        <span class="country-name">USA</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="red-drop"><i class="glyphicon glyphicon-triangle-bottom "></i> 12%</span>	
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#">See all countries</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-ls-6 col-sm-6 col-xs-6">
                                                            <div class="earth">
                                                                <img src="../images/earth.png" class="img-responsive">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 shadow-box yellow-box">
                                                <div class="yellow-box-inner">
                                                    <div class="yellow-box-product">
                                                        <img src="../images/pr1.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="yellow-box-btn-box">
                                                        <a href="#" class="btn btn-circle btn-yellow-box">Create Release +</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pilltab2">
                                        <h4>SPOTIFY(1,000,000)</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor.</p>
                                    </div>
                                    <div class="tab-pane fade  in" id="pilltab3">
                                        <h4>APPLE(1,000,000)</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor.</p>
                                    </div>
                                    <div class="tab-pane fade  in" id="pilltab4">
                                        <h4>TIDAL(1,000,000)</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor.</p>
                                    </div>
                                    <div class="tab-pane fade" id="pilltab5">
                                        <h4>YOUTUBE(1,000,000)</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default bo-radius">
                <div class="panel-heading_">
                    <span class="pull-right clickable panel-toggle panel-button-tab-left hideme"><em class="fa fa-toggle-up"></em></span></div>
                    <div class="panel-body custom-body" style="margin-top: 0px !important;">
                        <div class="panel panel-default ">
                            <div class="panel-body tabs">
                                <ul class="nav nav-pills custom-pills">
                                    <li class="active"><a href="#pilltab1-a" data-toggle="tab" aria-expanded="true">ALL(5,000,000)</a></li>
                                    <li class=""><a href="#pilltab2-a" data-toggle="tab" aria-expanded="false">SPOTIFY(1,000,000)</a></li>
                                    <li class=""><a href="#pilltab3-a" data-toggle="tab" aria-expanded="true">APPLE(1,000,000)</a></li>
                                    <li class=""><a href="#pilltab4-a" data-toggle="tab" aria-expanded="true">TIDAL(1,000,000)</a></li>
                                    <li class=""><a href="#pilltab5-a" data-toggle="tab" aria-expanded="true">YOUTUBE(1,000,000)</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="pilltab1-a">

                                        
                                        <div class="row mt-5">
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <div class="track-info">
                                                        <div class="track-img">
                                                            <img src="../images/tr1.png" class="img-responsive">
                                                        </div>

                                                        <div class="track-info-container">
                                                            <h2 class="track-info-title">Destiny</h2>
                                                            <p class="track-info-time">2021-1 song, 2 min 41sec</p>
                                                            <p class="track-info-singer">By Fameye</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="col-md-12 shadow-box">
                                                        <div>
                                                            
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading_">
                                                                <span class="hideme pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                                                                <div class="panel-body">
                                                                    <div class="canvas-wrapper">
                                                                        <canvas class="main-chart" id="line-chart" height="354" width="1064" style="width: 1064px; height: 354px;"></canvas>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-8 col-md-offset-2 shadow-box just-bottom">
                                                        <div class="report-tab">
                                                          <div>
                                                             <h3>Monthly report</h3>
                                                              <p>Last reporting months total earnings</p>
                                                          </div>
                                                          <div>
                                                              <h3>$ 100.27</h3>
                                                              <h3><span class="red-drop">-17.6% <i class="glyphicon glyphicon-triangle-bottom "></i></span></h3>
                                                              <p>vs previous month</p>
                                                          </div>
                                                        </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <div class="track-info">
                                                    <div class="track-img">
                                                        <img src="../images/tr2.png" class="img-responsive">
                                                    </div>

                                                    <div class="">
                                                        <h2 class="track-info-title">Rap Kasa</h2>
                                                        <p class="track-info-time">2021-1 song, 2 min 41sec</p>
                                                        <p class="track-info-singer">By Fameye</p>
                                                    </div>
                                                </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="col-md-12 shadow-box">
                                                        <div>
                                                            
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading_">
                                                                <span class="hideme pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                                                                <div class="panel-body">
                                                                    <div class="canvas-wrapper">
                                                                        <canvas class="main-chart" id="line-chart_1" height="354" width="1064" style="width: 1064px; height: 354px;"></canvas>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-8 col-md-offset-2 shadow-box just-bottom">
                                                        <div class="report-tab">
                                                          <div>
                                                             <h3>Monthly report</h3>
                                                              <p>Last reporting months total earnings</p>
                                                          </div>
                                                          <div>
                                                              <h3>$ 100.27</h3>
                                                              <h3><span class="red-drop">-17.6% <i class="glyphicon glyphicon-triangle-bottom "></i></span></h3>
                                                              <p>vs previous month</p>
                                                          </div>
                                                        </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pilltab2-a">
                                        <h4>SPOTIFY(1,000,000)</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor.</p>
                                    </div>
                                    <div class="tab-pane fade  in" id="pilltab3-a">
                                        <h4>APPLE(1,000,000)</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor.</p>
                                    </div>
                                    <div class="tab-pane fade  in" id="pilltab4-a">
                                        <h4>TIDAL(1,000,000)</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor.</p>
                                    </div>
                                    <div class="tab-pane fade" id="pilltab5-a">
                                        <h4>YOUTUBE(1,000,000)</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div><!--/.row-->

    
</div><!--/.row-->

@endsection