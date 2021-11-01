<div>
    {{-- Do your work, then step back. --}}
   

    <div class="panel-body custom-body">


@if($royalties->count()!=0)
    <div class="col-md-12">
            <div class="list-heading-area-no-border">
                <div class="trans-box-head">
                    <div class="heading">
                        {{-- <h2><strong> Royalties </strong></h2> --}}
                    </div>
                    
                </div>

{{-- Enable Edit For Admin user --}}
                @can('isAdmin')

                @if ($status=="edit")


                @if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

                <h3> <strong>Edit Record</strong> </h3> 
                <hr>
               <div class="col-md-8">
                
                 </div>  
                 <div class="col-md-4">
                     <button class="btn btn-primary" wire:click="update({{$record}})">Update </button>
                    <button class="btn btn-danger" wire:click="cancel">Cancel </button> 
                    <hr/>
                </div> 
               
                @foreach ($edit as $item)
                <form action="">
                    @csrf
                    <div class="col-md-6">
                        <label for="release_name">Release Name</label>
                        <input type="text" class="form-control"
                        value="{{$item->release_name}}" name="release" wire:model="release_name">

                    </div>

                    <div class="col-md-6">
                        <label for="song_name">Song Name</label>
                        <input type="text" class="form-control"
                        value="{{$item['song_name']}}" name="song_name" wire:model="song_name">

                    </div>

                    <div class="col-md-6">
                        <label for="platform">Platform</label>
                        <input type="text" class="form-control"
                        value="{{$item->platform}}" name="platform" wire:model="platform">

                    </div>


                    <div class="col-md-6">
                        <label for="period_gained">Period Gained</label>
                        <input type="text" class="form-control"
                        value="{{$item->period_gained}}" name="period_gained" wire:model="period_gained">

                    </div>

                    <div class="col-md-6">
                        <label for="downloads">Downloads</label>
                        <input type="text" class="form-control"
                        value="{{$item->downloads}}" name="downloads" wire:model="downloads">

                    </div>

                    <div class="col-md-6">
                        <label for="total_streams	">Streams</label>
                        <input type="text" class="form-control"
                        value="{{$item->total_streams}}" name="streams" wire:model="streams">

                    </div>

                    <div class="col-md-6">
                        <label for="revenue">Revenue</label>
                        <input type="text" class="form-control"
                        value="{{$item->revenue}}" name="revenue" wire:model="revenue">

                    </div>

                </form>

                @endforeach
                
{{-- End Edit --}}


                @else
                            {{-- Delete Success Message --}}
                                @if(session('success'))
                                <div class="alert alert-danger" role="alert">  
                                    Record Deleted Successfully
                                </div>
                            @endif
                            {{-- End Delete Success Message --}}
                    <div class="table-box">
                        
                        <div id="transtable_wrapper" class="dataTables_wrapper no-footer">
                                <div class="col-md-6" id="">
                                    <label>Display Royalties for:  
                                        <select name="transtable_length" aria-controls="transtable" class="form-control" wire:model="sort_period" style="height:46px">
                                        
                                            <option value=""> Select Period </option>
                                            <option value=""> All</option>  

                                            @foreach($period as $item)

                                                    <option value="{{$item->period_gained}}">{{$item->period_gained}}</option>
                                                    
                                                    @endforeach
                                        </select> </label>
                                </div>
    {{-- Display Total Earnings Only for User --}}
                            @can('isUser')    
                                <div class="col-md-6"><strong> Total Earnings for Period: <input type="text" class="form-control" value= '$ {{$earnings}}' /> </strong> </div>
                            @endcan
                                                                    
                            
                                    <table id="transtable" class="table dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="transtable_info"> 
                            <thead>
                                <tr role="row">
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;">Period</th>
                                    <th class="sorting" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 150px;">Release Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-label="Withdraws: activate to sort column ascending" style="width: 250px;">Song Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 50px;">Streams</th>
                                    <th class="sorting" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-label="Withdraws: activate to sort column ascending" style="width: 50px;">Downloads</th>
                                    <th class="sorting" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 50px;">Revenue</th>
                                    <th class="sorting" tabindex="0" aria-controls="transtable" rowspan="1" colspan="2" aria-label="Date: activate to sort column ascending" style="width: 70px;">Action</th>
                            
                                </tr>
                            </thead>
                            <tbody>


                                
                            @foreach ($royalties as $item)
                                <tr class="odd">
                                    <td><span class="tbdate">{{$item->period_gained}}</td>
                                    <td class="sorting_1"><span><span class="tbtitle">{{$item->release_name}}</td>
                                    <td><img src="{{asset("images/gpc.png")}}" height="30px" width="30px" style="margin:auto; padding:2px">{{$item->song_name}}</td>
                                    <td>{{$item->total_streams}}</td>
                                    <td>{{$item->downloads}}</td>
                                    <td><span class="tbprice">{{$item->revenue}}</td> 
                                    <td><span >
                                        <a class="btn btn-primary" style="display:inline-block !important ; float:left !important; vertical-align:top !important; margin-right:5px" wire:click="edit({{$item->id}})" > Edit </a> 
                                        <a class="btn btn-danger" style="display:inline-block !important ; float:left !important; vertical-align:top !important" wire:click="delete({{$item->id}})"> Delete</a> </td> 
                                </tr>
                            @endforeach
                    
                            
                            {{-- {{ $royalties->links() }} --}}
                        </table>
                        
                        {{ $royalties->links() }}
                        
                        <div class="dataTables_info" id="transtable_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div><div class="dataTables_paginate paging_simple_numbers" id="transtable_paginate"><a class="paginate_button previous disabled" aria-controls="transtable" data-dt-idx="0" tabindex="-1" id="transtable_previous">Previous</a><span><a class="paginate_button current" aria-controls="transtable" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="transtable" data-dt-idx="2" tabindex="-1" id="transtable_next">Next</a></div></div>
                    </div>

                    @endif
                @endcan


                @can('isUser')
                    <div class="table-box">
                        <div id="transtable_wrapper" class="dataTables_wrapper no-footer">
                                <div class="col-md-6" id="">
                                    <label>Display Royalties for:  
                                        <select name="transtable_length" aria-controls="transtable" class="form-control" wire:model="sort_period" style="height:46px">
                                        
                                            <option value=""> Select Period </option>
                                            <option value=""> All</option>  

                                            @foreach($period as $item)

                                                    <option value="{{$item->period_gained}}">{{$item->period_gained}}</option>
                                                    
                                                    @endforeach
                                        </select> </label>
                                </div>

                                <div class="col-md-6"><strong> Total Earnings for Period: <input type="text" class="form-control" value= '$ {{$earnings}}' /> </strong>
                                </div>
                                            
                            
                                    <table id="transtable" class="table dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="transtable_info"> 
                            <thead>
                                <tr role="row">
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;">Period</th>
                                    <th class="sorting" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 150px;">Release Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-label="Withdraws: activate to sort column ascending" style="width: 250px;">Song Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 50px;">Streams</th>
                                    <th class="sorting" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-label="Withdraws: activate to sort column ascending" style="width: 50px;">Downloads</th>
                                    <th class="sorting" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 50px;">Revenue</th>
                            
                                </tr>
                            </thead>
                            <tbody>

                                
                                
                            @foreach ($royalties as $item)
                                <tr class="odd">
                                    <td><span class="tbdate">{{$item->period_gained}}</td>
                                    <td class="sorting_1"><span><span class="tbtitle">{{$item->release_name}}</td>
                                    <td><img src="{{asset("images/gpc.png")}}" height="30px" width="30px" style="margin:auto; padding:2px">{{$item->song_name}}</td>
                                    <td>{{$item->total_streams}}</td>
                                    <td>{{$item->downloads}}</td>
                                    <td><span class="tbprice">{{$item->revenue}}</td> 
                                </tr>
                            @endforeach
                    
                            
                        </table>
                        
                        {{ $royalties->links() }}
                        
                        <div class="dataTables_info" id="transtable_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div><div class="dataTables_paginate paging_simple_numbers" id="transtable_paginate"><a class="paginate_button previous disabled" aria-controls="transtable" data-dt-idx="0" tabindex="-1" id="transtable_previous">Previous</a><span><a class="paginate_button current" aria-controls="transtable" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="transtable" data-dt-idx="2" tabindex="-1" id="transtable_next">Next</a></div></div>
                    </div>
                    
                </div>
                
            </div>
            
            @else 
            
            <div> Cannot populate royalties table. No Record Found. </div>
            @endif 
            @endcan



{{-- Admin --}}

@if ($royalties->count=0)
@can('isAdmin')
    Nothing here; 
@else
    
@endif
<div class="table-box">
    <div id="transtable_wrapper" class="dataTables_wrapper no-footer">
            <div class="col-md-6" id="">
                <label>Display Royalties for:  
                    <select name="transtable_length" aria-controls="transtable" class="form-control" wire:model="sort_period" style="height:46px">
                    
                        <option value=""> Select Period </option>
                        <option value=""> All</option>  

                        @foreach($period as $item)

                                <option value="{{$item->period_gained}}">{{$item->period_gained}}</option>
                                
                                @endforeach
                    </select> </label>
            </div>

            <div class="col-md-6"><strong> User <input type="text" class="form-control" value= '$ {{$earnings}}' /> </strong>
            </div>
                        
        
                <table id="transtable" class="table dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="transtable_info"> 
        <thead>
            <tr role="row">
                <th class="sorting sorting_asc" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;">Period</th>
                <th class="sorting" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 150px;">Release Name</th>
                <th class="sorting" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-label="Withdraws: activate to sort column ascending" style="width: 250px;">Song Name</th>
                <th class="sorting" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 50px;">Streams</th>
                <th class="sorting" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-label="Withdraws: activate to sort column ascending" style="width: 50px;">Downloads</th>
                <th class="sorting" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 50px;">Revenue</th>
                <th class="sorting" tabindex="0" aria-controls="transtable" rowspan="1" colspan="2" aria-label="Date: activate to sort column ascending" style="width: 70px;">Action</th>
        
            </tr>
        </thead>
        <tbody>

            
            
        @foreach ($royalties as $item)
            <tr class="odd">
                <td><span class="tbdate">{{$item->period_gained}}</td>
                <td class="sorting_1"><span><span class="tbtitle">{{$item->release_name}}</td>
                <td><img src="{{asset("images/gpc.png")}}" height="30px" width="30px" style="margin:auto; padding:2px">{{$item->song_name}}</td>
                <td>{{$item->total_streams}}</td>
                <td>{{$item->downloads}}</td>
                <td><span class="tbprice">{{$item->revenue}}</td> 
                <td><span >
                    <a class="btn btn-primary" style="display:inline-block !important ; float:left !important; vertical-align:top !important; margin-right:5px" wire:click="edit({{$item->id}})" > Edit </a> 
                    <a class="btn btn-danger" style="display:inline-block !important ; float:left !important; vertical-align:top !important" wire:click="delete({{$item->id}})"> Delete</a> </td> 
            </tr>
        @endforeach

        
        {{-- {{ $royalties->links() }} --}}
    </table>
    No Record Found. {{$sort_period}} <hr />
    {{ $royalties->links() }}
    
    <div class="dataTables_info" id="transtable_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div><div class="dataTables_paginate paging_simple_numbers" id="transtable_paginate"><a class="paginate_button previous disabled" aria-controls="transtable" data-dt-idx="0" tabindex="-1" id="transtable_previous">Previous</a><span><a class="paginate_button current" aria-controls="transtable" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="transtable" data-dt-idx="2" tabindex="-1" id="transtable_next">Next</a></div></div>
</div>
 
@endcan 
</div>




    
</div>

