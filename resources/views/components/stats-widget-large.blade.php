    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <div class="card widget widget-stats-large">
        <div class="row">
            <div class="col-xl-8">
                <div class="widget-stats-large-chart-container">
                    <div class="card-header">
                        <h5 class="card-title">
                            {{$title}}
                            <span class="badge badge-light badge-style-light">
                                {{-- {{$period}} --}}
                            </span></h5>
                    </div>
                    <div class="card-body">
                        <div id="performance-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="widget-stats-large-info-container">
                    <div class="card-header">
                        <h5 class="card-title">
                            Channels
                            <span class="badge badge-info badge-style-light">Updated 5 min ago</span></h5>
                    </div>
                    <div class="card-body">
                        <p class="card-description">
                            {{$summary}}
                        </p>
                        <ul class="list-group list-group-flush">
                               {{$slot}}     
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>