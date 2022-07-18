<div>
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Royalties</h5>
            </div>
            <div class="card-body">
                <div id="datatable1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="datatable1_length">
                                <label> Select Period 
                                    <select name="datatable1_length" aria-controls="datatable1" class="form-select form-select-sm" wire:model="sort_period">
                                        <option value="all">All</option>
                                        @foreach ($period as $item)                
                                            <option value="{{$item->period_gained}}">{{$item->period_gained}}</option>
                                        @endforeach
                                    </select> 
                                </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="datatable1_filter" class="dataTables_filter">
                            <label>Total Earnings for Period:
                                <input type="text" class="form-control form-control-sm" value="${{$earnings}} USD" aria-controls="datatable1" disabled>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-sm-12">
                <table id="datatable1" class="display dataTable" style="width: 100%;" role="grid" aria-describedby="datatable1_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 190px;">Period</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 250px;">Release Name</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 350px;">Song name</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 71px;">Revenue</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 71px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
      @foreach ($royalties as $item)
      <tr role="row" class="odd">
        <td class="sorting_1">{{$item->period_gained}}</td>
        <td>{{$item->release_name}}</td>
        <td ><img src="{{asset("images/gpc.png")}}" height="30px" width="30px" style="margin:auto; padding:2px">{{$item->song_name}}</td>
        <td> {{$item->revenue}}</td>
        <td>
            <nav class="navbar navbar-light navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-nav" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    
                    <a href="/" class="nav-link"> <i class="material-icons align-middle">description</i> </a> 
                </li>
                <li class="nav-item">

                    <a href="/" class="nav-link"> <i class="material-icons align-middle">download</i> </a> 
                </li>
            </ul>
        </nav> </div> </div>
        </td>
    </tr>
      @endforeach
    </tbody>
        <tfoot>
            <tr><th rowspan="1" colspan="1">Period</th>
                <th rowspan="1" colspan="1">Release Name</th>
                <th rowspan="1" colspan="1">Song Name</th>
                <th rowspan="1" colspan="1">Revenue</th>
                <th rowspan="1" colspan="1">Action</th>
                </tfoot>
            </table>{{ $royalties->links() }}</div></div>
           
        </div> 
    </div>
    </div> 
</div>