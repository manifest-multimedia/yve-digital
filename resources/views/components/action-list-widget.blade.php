    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <div class="card widget widget-action-list">
        <div class="card-body">
            <div class="widget-action-list-container">
                <ul class="list-unstyled d-flex no-m">
                    <li class="widget-action-list-item">
                        @foreach ($data as $item)
                        
                        <a href="{{$item->url}}">
                            <span class="widget-action-list-item-icon">
                                <i class="material-icons text-{{$item->type}}">{{$item->icon}}</i>
                            </span>
                            <span class="widget-action-list-item-title">
                                {{$item->name}}
                            </span>
                        </a>
                        @endforeach
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>