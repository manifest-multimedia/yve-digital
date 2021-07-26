@extends('layouts.frontend')

@section('navigation')
<div class="main-hero-section">
    <div class="header sticky-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light custon-nav-bar pt-4 pb-4">
                        <a class="navbar-brand" href="/">
                            <svg width="77" height="17" viewBox="0 0 77 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.52 0.0079999L11.424 11.84V17H6.096V11.84L0 0.0079999H6.096L8.808 6.032L11.52 0.0079999H17.52ZM50.1232 0.0079999L44.4112 17H37.5232L31.8112 0.0079999H37.4752L40.9792 11.696L44.4592 0.0079999H50.1232ZM70.9239 4.256V6.344H76.2039V10.352H70.9239V12.752H76.9239V17H65.5959V0.0079999H76.9239V4.256H70.9239Z" fill="white"/>
                            </svg>

                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto mr-3">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Sell Your Music<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">Support</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
                            </ul>

                            <form class="form-inline my-2 my-lg-0">
                                <a  href="/login" class="btn btn-circle btn-outline-light my-2 my-sm-0 mr-4 nav-btn header-btn" type="submit">Log In</a>
                                <a href="/register" class="btn btn-circle btn-primary my-2 my-sm-0 nav-btn header-btn" type="submit">Sign up</a>
                            </form>
                        </div>
                    </nav>
                </div>
            </div> 
        </div>
    </div>

   @section('hero')
   <div class="slider-section main-home-slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('images/slide1.png'); background-position: center center; background-size: cover;">
                <div class="slider-text">
                    <h1>SELL AND STREAM YOUR<br>
                    MUSIC EVERY WHERE.</h1>
                </div>	
            </div>
            <div class="swiper-slide" style="background-image: url('images/slide1.png'); background-position: center center; background-size: cover;">
                <div class="slider-text">
                    <h1>SELL AND STREAM YOUR<br>
                    MUSIC EVERY WHERE.</h1>
                </div>	
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
       
   @endsection
</div>    
@endsection

@section('content')
<div class="distribution-section">
    <div class="site-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="distribution-heading text-center">
                        <h2>We hail distribution linked with enhanced marketing.</h2>

                        <h3 class="mt-4">With quality marketing, every song can reach the listeners and buyers it deserves</h3>
                    </div>	

                </div>

                <div class="col-md-10 offset-md-1 text-center">
                    <div class="logos mt-5">

                        <img src="{{asset("images/lg5.png")}}" class="img-fluid" alt="">
                        <img src="{{asset("images/lg6.png")}}" class="img-fluid" alt="">
                        <img src="{{asset("images/lg4.png")}}" class="img-fluid" alt="">
                        <img src="{{asset("images/lg3.png")}}" class="img-fluid" alt="">
                        <img src="{{asset("images/lg2.png")}}" class="img-fluid" alt="">
                        <img src="{{asset("images/lg1.png")}}" class="img-fluid" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="music-section">
    <div class="site-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-7">

                    <img src="images/f1.png" class="img-fluid" alt="">

                </div>

                <div class="col-md-5">
                    <div class="own-music text-center">
                        <h4>Own your music.</h4>
                        <p>Keep 100% of the royalties you earn and all of the rights to your music.
                        We believe artists should stay independent, keep control of their own careers and not be tied down by unfair deals and shady industry contracts.</p>
                        <button class="btn btn-circle btn-outline-dark my-2 my-sm-0 mr-4 nav-btn" type="submit">Join now</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="site-wrapper">
        <div class="container">
            <div class="row">
                

                <div class="col-md-5">
                    <div class="own-music text-center">
                        <h4>Reach more fans.</h4>

                        <p class="small">Release your music to more worldwide music platforms than anywhere else.</p>

                        <p>
                        Reach fans on major streaming services including Spotify, Apple Music, Amazon, Deezer and more. Go viral on the biggest social platforms like TikTok, Instagram & Facebook and build a new global fan base on international music stores.</p>

                    </div>
                </div>

                <div class="col-md-7">

                    <img src="images/3.png" class="img-fluid" alt="">

                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="simple-and-easy">
    <div class="site-wrapper">
        <div class="container">
            <div class="row">
                
                <div class="col-md-2">
                    <p class="center-special-text">SIMPLE-
                        -AND
                        EASY TO
                    USE</p>
                </div>

                <div class="col-md-10">
                    <div class="inner-div-text">
                        <p>Whether you’re up and coming or already 
                            established, we’ve got you covered.
                        </p>
                    </div>	
                </div>

                
            </div>
        </div>
    </div>
</div>


<div class="Access-section">
    <div class="site-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-7">

                    <img src="images/a1.png" class="img-fluid" alt="">

                </div>

                <div class="col-md-5">
                    <div class="own-music text-center">
                        <h4>Access insights</h4>

                        <p class="small">Release your music to more worldwide music platforms than anywhere else.</p>

                        <p>
                        Reach fans on major streaming services including Spotify, Apple Music, Amazon, Deezer and more. Go viral on the biggest social platforms like TikTok, Instagram & Facebook and build a new global fan base on international music stores.</p>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="footer"> 

    <span class="developer"> Built by <a href="https://manifestghana.com"> Manifest Multimedia</a> </span> <span class="credits"> YVE Digital - Music Distribution Platform</span>
    
</div> 
@endsection

