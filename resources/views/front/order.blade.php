@extends('layouts.app')
@section('title','| Orders')
@section('content')

	<main class="main_body _dBody _grayBg">
        <div class="container">
            <!-- Begin: Heading -->
            <div class="_headingDiv">
                <h2 class="_headingTxt">Manage Orders</h2>
            </div>
            <!-- End : Heading -->
            <div class="_dCard _p0">
                <div class="_dCardHeader _borderBtm _p0">
                    <ul class="nav nav-tabs _order-tab">
                      {{--   <li class="active"><a data-toggle="tab" href="#priority-tab" class="active">PRIORITY</a></li> --}}
                    <li><a data-toggle="tab" href="#active-tab" class="active">ACTIVE</a>
                    </li>
                   <!--  <li class="active"><a data-toggle="tab" href="#new-tab">AWAITING MY REVIEW</a>
                     
                   </li> -->
                    
                    <li><a data-toggle="tab" href="#deliverded-tab">DELIVERED</a>
                    </li>
                    <li><a data-toggle="tab" href="#completed-tab">COMPLETED</a>
                    </li>
                    <li><a data-toggle="tab" href="#canceled-tab">CANCELLED</a>
                    </li>
                    <li><a data-toggle="tab" href="#all-tab">ALL</a>
                    </li>
                    </ul>
                </div>
                <div>
                    <div class="tab-content _order-tab-content">
                     
                          <div id="active-tab" class="tab-pane fade in active show">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">ACTIVE ORDERS</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>

                                            <th width="40%">SERVICE</th>
                                            <th width="15%">ORDER DATE</th>
                                            <th width="15%">DUE ON</th>
                                            <th width="15%">TOTAL</th>
                                            <th width="15%">STATUS</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @forelse ($active as $listing)
                                            
                                            <tr>
                                               
                                                <td>
                                                   
<img src="{{ asset("public/storage/{$listing->gig->gig_photo_one }") }} " alt="" width="10%">
<a href="{{ url("{$listing->gig->menu->slug}/{$listing->gig->submenu->slug}/{$listing->gig->id}") }}" target="_blank">
    {{ $listing->gig->gig_title ?? '' }}
</a>
    
                                                </td>
                                                <td>{{ date('d M Y',strtotime($listing->created_at ?? '')) }}</td>
                                                <td>{{ date('d M Y',strtotime($listing->due_date ?? '')) }}</td>
                                                <td>${{ $listing->total_price ?? '' }}</td>
                                                <td>
                                                    <a href="" class="btn btn-danger">Cancel</a>
                                                </td>
                                            </tr>
                                        @empty
                                        <tr><td colspan="5">No active orders to show</td></tr>    
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {{-- <div id="new-tab" class="tab-pane fade">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">ORDERS AWAITING REVIEW</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th width="40%">SERVICE</th>
                                            <th width="15%">ORDER DATE</th>
                                            <th width="15%">DUE ON</th>
                                            <th width="15%">TOTAL</th>
                                            <th width="15%">STATUS</th>
                                        </tr>
                                        </thead>
                                     @foreach ($order_listings as $listing)
                                            <tr>
                                               
                                                <td>
                                                   
<img src="{{ asset("public/storage/{$listing->gig->gig_photo_one }") }} " alt="" width="10%">
<a href="{{ url("{$listing->gig->menu->slug}/{$listing->gig->submenu->slug}/{$listing->gig->id}") }}" target="_blank">
    {{ $listing->gig->gig_title ?? '' }}
</a>
    
                                                </td>
                                                <td>{{ date('d M Y',strtotime($listing->created_at ?? '')) }}</td>
                                                <td>{{ date('d M Y',strtotime($listing->due_date ?? '')) }}</td>
                                                <td>${{ $listing->total_price ?? '' }}</td>
                                                <td>
                                                     <a href="" class="btn btn-primary">Review</a>
                                                </td>
                                            </tr>
                                        @endforeach   
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> --}}
                      
                        
                        <div id="deliverded-tab" class="tab-pane fade">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">DELIVERED ORDERS</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th width="40%">SERVICE</th>
                                            <th width="15%">ORDER DATE</th>
                                            <th width="15%">DUE ON</th>
                                            <th width="15%">TOTAL</th>
                                            <th width="15%">STATUS</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse ($delivered as $listing)
                                              
                                            <tr>
                                               
                                                <td>
                                                   
<img src="{{ asset("public/storage/{$listing->gig->gig_photo_one }") }} " alt="" width="10%">
<a href="{{ url("{$listing->gig->menu->slug}/{$listing->gig->submenu->slug}/{$listing->gig->id}") }}" target="_blank">
    {{ $listing->gig->gig_title ?? '' }}
</a>
    
                                                </td>
                                                <td>{{ date('d M Y',strtotime($listing->created_at ?? '')) }}</td>
                                                <td>{{ date('d M Y',strtotime($listing->due_date ?? '')) }}</td>
                                                <td>${{ $listing->total_price ?? '' }}</td>
                                                <td>
                                                    <a href="" class="btn btn-primary">Review</a>
                                                </td>
                                            </tr>
                                        @empty

                                        <tr><td colspan="5">No delivered orders to show</td></tr>    
                                        @endforelse   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="completed-tab" class="tab-pane fade">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">COMPLETED ORDERS</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th width="40%">SERVICE</th>
                                            <th width="15%">ORDER DATE</th>
                                            <th width="15%">DUE ON</th>
                                            <th width="15%">TOTAL</th>
                                            <th width="15%">STATUS</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($completed as $listing)
                                            <tr>
                                               
                                                <td>
                                                   
<img src="{{ asset("public/storage/{$listing->gig->gig_photo_one }") }} " alt="" width="10%">
<a href="{{ url("{$listing->gig->menu->slug}/{$listing->gig->submenu->slug}/{$listing->gig->id}") }}" target="_blank">
    {{ $listing->gig->gig_title ?? '' }}
</a>
    
                                                </td>
                                                <td>{{ date('d M Y',strtotime($listing->created_at ?? '')) }}</td>
                                                <td>{{ date('d M Y',strtotime($listing->due_date ?? '')) }}</td>
                                                <td>${{ $listing->total_price ?? '' }}</td>
                                                <td>
                                                    <a href="" class="btn btn-success">Order Again</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr><td colspan="5">No completed orders to show</td></tr>    
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="canceled-tab" class="tab-pane fade">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">CANCELLED ORDERS</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th width="40%">SERVICE</th>
                                            <th width="15%">ORDER DATE</th>
                                            <th width="15%">DUE ON</th>
                                            <th width="15%">TOTAL</th>
                                            <th width="15%">STATUS</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($cancelled as $listing)
                                                
                                            <tr>
                                               
                                                <td>
                                                   
<img src="{{ asset("public/storage/{$listing->gig->gig_photo_one }") }} " alt="" width="10%">
<a href="{{ url("{$listing->gig->menu->slug}/{$listing->gig->submenu->slug}/{$listing->gig->id}") }}" target="_blank">
    {{ $listing->gig->gig_title ?? '' }}
</a>
    
                                                </td>
                                                <td>{{ date('d M Y',strtotime($listing->created_at ?? '')) }}</td>
                                                <td>{{ date('d M Y',strtotime($listing->due_date ?? '')) }}</td>
                                                <td>${{ $listing->total_price ?? '' }}</td>
                                                <td>
                                                    <a href="" class="btn btn-success">Order Again</a>
                                                </td>
                                            </tr>
                                        @empty
                                             <tr><td colspan="5">No completed cancelled to show</td></tr>            

                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="all-tab" class="tab-pane fade">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">ALL ORDERS</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th width="40%">SERVICE</th>
                                            <th width="15%">ORDER DATE</th>
                                            <th width="15%">DUE ON</th>
                                            <th width="15%">TOTAL</th>
                                            <th width="15%">STATUS</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($all as $listing)
                                            <tr>
                                               
                                                <td>
                                                   
<img src="{{ asset("public/storage/{$listing->gig->gig_photo_one }") }} " alt="" width="10%">
<a href="{{ url("{$listing->gig->menu->slug}/{$listing->gig->submenu->slug}/{$listing->gig->id}") }}" target="_blank">
    {{ $listing->gig->gig_title ?? '' }}
</a>
    
                                                </td>
                                                <td>{{ date('d M Y',strtotime($listing->created_at ?? '')) }}</td>
                                                <td>{{ date('d M Y',strtotime($listing->due_date ?? '')) }}</td>
                                                <td>${{ $listing->total_price ?? '' }}</td>
                                                <td>
                                                    <a href="" class="btn btn-success">Order Again</a>
                                                </td>
                                            </tr>
                                        @empty
                                             <tr><td colspan="5">No orders to show</td></tr>    
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>

            </div>
        </div>
    </main>
    <script>
    </script>
@endsection