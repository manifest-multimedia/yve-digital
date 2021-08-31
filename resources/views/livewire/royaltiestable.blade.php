<div>
    {{-- Do your work, then step back. --}}



@if($royalties->count()!=0)
    <div class="col-md-12">
        <div class="shadow-box-wp">
            <div class="list-heading-area-no-border">
                <div class="trans-box-head">
                    <div class="heading">
                        <h2><strong> Royalties </strong></h2>
                    </div>
                    <!-- <div class="trans">
                        <p><a href="#">See All Transactions</a></p>
                    </div> -->
                </div>

                <div class="table-box">
                    <div id="transtable_wrapper" class="dataTables_wrapper no-footer">
                            {{-- <div class="dataTables_length" id="transtable_length">
                                <label>Show <select name="transtable_length" aria-controls="transtable" class="">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label>
                                        </div>
                                         --}}
                            <div id="transtable_filter" class="dataTables_filter">
                                <label>Search:<input type="search" class="" placeholder="" aria-controls="transtable"></label></div>
                             
                                <table id="transtable" class="table dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="transtable_info"> 
                        <thead>
                            <tr role="row">
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="transtable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px;">Date</th>
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
                
                       
                            
                            {{-- </tr><tr class="even">
                                <td class="sorting_1"><span><img src="../images/gpc.png"><span class="tbtitle"> Google Play</span></span></td>
                                <td><span class="tbdate">Jan 7,2020(07:45 GMT)</span></td>
                                <td><span class="tbprice">$ 14,000</span></td>
                           
                        </tbody> --}}

                        {{ $royalties->links() }}
                    </table>
                    
                    {{ $royalties->links() }}
                    
                    <div class="dataTables_info" id="transtable_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div><div class="dataTables_paginate paging_simple_numbers" id="transtable_paginate"><a class="paginate_button previous disabled" aria-controls="transtable" data-dt-idx="0" tabindex="-1" id="transtable_previous">Previous</a><span><a class="paginate_button current" aria-controls="transtable" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="transtable" data-dt-idx="2" tabindex="-1" id="transtable_next">Next</a></div></div>
                </div>
            </div>
        </div>
    </div>

@else <div> Cannot populate royalties table. No Record Found. </div>
    @endif 





    
</div>

