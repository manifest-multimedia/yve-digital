    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    <div class="col-xl-4">
        <div class="card widget widget-stats">
            <div class="card-body">
                <div class="widget-stats-container d-flex">
                    <div class="widget-stats-icon widget-stats-icon-{{$color}}">
                        <i class="material-icons-outlined">{{$icon}}</i>
                    </div>
                    <div class="widget-stats-content flex-fill">
                        <span class="widget-stats-title">{{$title}}</span>
                        <span class="widget-stats-amount">{{$value}}</span>
                        <span class="widget-stats-info">{{$description}}</span>
                    </div>
                  
                   @if($type=='percentage')
                    <div class="widget-stats-indicator widget-stats-indicator-negative align-self-start">
                        <i class="material-icons">keyboard_arrow_down</i> {{$percentage}}
                    </div>
                    @endif 
                </div>
            </div>
        </div>
    </div>