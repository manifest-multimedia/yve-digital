<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="row">
        <div class="col-md-6">
            <div class="shadow-box-wp">
                <div class="list-heading-area">
                    <div>
                        <h3>Top Downloaded Songs</h3>
                    </div>
                    {{-- <div>
                        <ul class="nav nav-pills">
                            <li><a href=""><small>1HR</small></a></li>
                            <li><a href=""><small>1D</small></a></li>
                            <li class="active"><a href=""><small>1W</small></a></li>
                            <li><a href=""><small>1M</small></a></li>
                            <li><a href=""><small>1Y</small></a></li>
                        </ul>
                    </div> --}}
                </div>
                <div class="list-content">
                    <ul>
                        @foreach ($topdownloads as $item)
                            
                        <li class="list-content-items">
                            <div class="pad-3">
                                  <div class="list-area-container">
                                      <div class="content-img-txt">
                                          <img src="{{$item['cover']}}" alt="" class="img-responsive">
                                      </div>
                                      <div class="text-box">
                                          <p>{{$item['song']}}</p>
                                          <small>By {{$item['artist']}}</small>
                                      </div>
                                  </div>
  
                                  <div class="list-content-dowload">
  
                                      <div class="downloads-icon">
                                          <img src="{{asset('images/dd.png')}}" alt="" class="img-responsive">
                                      </div>
                                      <div>
                                          <p>{{$item['downloads']}} downloads</p>
                                      </div>
                                  </div>
                            </div>
                          </li>

                        @endforeach
                        
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="shadow-box-wp">
                <div class="list-heading-area">
                    <div>
                        <h3>Most Streamed Songs</h3>
                    </div>
                    {{-- <div>
                        <ul class="nav nav-pills">
                            <li><a href=""><small>1HR</small></a></li>
                            <li><a href=""><small>1D</small></a></li>
                            <li class="active"><a href=""><small>1W</small></a></li>
                            <li><a href=""><small>1M</small></a></li>
                            <li><a href=""><small>1Y</small></a></li>
                        </ul>
                    </div> --}}
                </div>
                <div class="list-content">
                    <ul>
                        @foreach ($topdownloads as $item)
                            
                        <li class="list-content-items">
                            <div class="pad-3">
                                  <div class="list-area-container">
                                      <div class="content-img-txt">
                                          <img src="{{$item['cover']}}" alt="" class="img-responsive">
                                      </div>
                                      <div class="text-box">
                                          <p>{{$item['song']}}</p>
                                          <small>By {{$item['artist']}}</small>
                                      </div>
                                  </div>
  
                                  <div class="list-content-dowload">
  
                                      <div class="downloads-icon">
                                          <img src="{{asset('images/dd.png')}}" alt="" class="img-responsive">
                                      </div>
                                      <div>
                                          <p>{{$item['downloads']}} downloads</p>
                                      </div>
                                  </div>
                            </div>
                          </li>

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
