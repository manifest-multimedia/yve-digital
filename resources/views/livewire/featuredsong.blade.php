<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

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
                                @if (!is_null($featuredChannel) && !empty($featuredChannel))
                                    <img src="{{asset($featuredChannel)}}" class="img-fluid">   
                                @else
                                    
                                @endif
                            </div>
                        </div>
                        <div class="tracks">
                            <div>
                                <p class="track_cat">{{strtoupper($releaseType)}}</p>
                                <h2 class="track_name">{{$releaseTitle}}</h2>
                                <p class="singer"><span>By </span><span> {{$artistName}}</span></p>
                                <p class="track_time">{{$releaseDate}}</p>
                            </div>
                            <div>
                                @if (!is_null($featuredImage) && !empty($featuredImage))
                                    <img src="{{asset('storage/'.$featuredImage)}}" alt="Featured Image" width=156 height=197 style="object-fit: cover;">
                                @else
                                    
                                @endif
                            </div>
                        </div>
                        <div class="time-line">
                            <div>
                                <p class="time-line-heading">Last Week <span class="red-drop"><i class="glyphicon glyphicon-triangle-bottom "></i> 0%</span></p>
                                <h3 class="time-line-subheading">0 plays</h3>
                            </div>
                            <div>
                                <p class="time-line-heading">Last Week <span class="white-top"><i class="glyphicon glyphicon-triangle-top "></i> 0%</span></p>
                                <h3 class="time-line-subheading">0 plays</h3>
                            </div>							
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    
</div>
