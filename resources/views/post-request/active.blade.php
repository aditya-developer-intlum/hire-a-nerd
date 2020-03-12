@extends('layouts.app')
@section('title','| Post Request')
@section('content')

	<main class="main_body _dBody _grayBg">
        <div class="container">
            <!-- Begin: Heading -->
            <div class="_headingDiv">
                <h2 class="_headingTxt">Manage Requests</h2>
            </div>
            <!-- End : Heading -->
            <div class="_dCard _p0">
                <div class="_dCardHeader _borderBtm _p0">
                    <ul class="nav nav-tabs _order-tab">
                        <li class="active"><a data-toggle="tab" href="#priority-tab" class="active">Active</a></li>
                        <li><a data-toggle="tab" href="#new-tab" >Paused</a></li>
                        <li><a data-toggle="tab" href="#active-tab">Pending</a></li>
                       <li><a data-toggle="tab" href="#late-tab">Unapproved</a></li>
                      
                    </ul>                                   
                </div>
                <div>                                                                                                                                              
                    <div class="tab-content _order-tab-content">
                        <div id="priority-tab" class="tab-pane fade in active show">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">Active Request</span>                                    
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Request</th>
                                            <th>Offers</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($requests->where('status',0) as $request)
                                                <tr>
                                                    <td>{{ $request->created_at->format('M,d,Y') }} </td>
                                                    <td>
                                                        <div class="_info-dfesc">{{ $request->description ?? '' }} </div>
                                                <div class="_info-div">
                                                    <span class="_info-line">Delivery Time - {{ $request->deliver_time>1?sprintf("%s days",$request->deliver_time ?? 1):sprintf("%s day",$request->deliver_time) ?? 1}}</span>
                                                    <span class="_info-line">Budget - <span>${{ $request->budget ?? ''}}</span></span>
                                                </div>
                                                    </td>
                                                    <td><a href="" class="btn btn-primary">0 Review Offers</a></td>
                                                    <td>
                                                        <select id="postRequestAction" class="form-control" data-id="{{ $request->id ?? '' }}">
                                                            <option value=""></option>
                                                            <option value="delete">Delete</option>
                                                            <option value="paused">Paused</option>
                                                        </select>
                                                </td>
                                                </tr>    
                                            @endforeach
                                                                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="new-tab" class="tab-pane fade">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">Paused Request</span>                                    
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Request</th>
                                            <th>Offers</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody> 
                                            @foreach ($requests->where('status',1) as $request)
                                                <tr>
                                                    <td>{{ $request->created_at->format('M,d,Y') }} </td>
                                                    <td>{{ $request->description ?? '' }} </td>
                                                    <td><span class="_txtRed">8.05.2019</span></td>
                                                    <td>
                                                        <select id="postRequestAction" class="form-control" data-id="{{ $request->id ?? '' }}">
                                                            <option value=""></option>
                                                            <option value="delete">Delete</option>
                                                             <option value="paused">Active</option>
                                                            
                                                        </select>
                                                </td>
                                                </tr>    
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="active-tab" class="tab-pane fade">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">Pending Request</span>                                    
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Request</th>
                                            <th>Offers</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($requests->where('status',2) as $request)
                                                <tr>
                                                    <td>{{ $request->created_at->format('M,d,Y') }} </td>
                                                    <td>
                                                        <div class="_info-dfesc">{{ $request->description ?? '' }} </div>
                                                <div class="_info-div">
                                                    <span class="_info-line">Delivery Time - {{ $request->deliver_time>1?sprintf("%s days",$request->deliver_time ?? 1):sprintf("%s day",$request->deliver_time) ?? 1}}</span>
                                                    <span class="_info-line">Budget - <span>${{ $request->budget ?? ''}}</span></span>
                                                </div>
                                                    </td>
                                                    <td><a href="" class="btn btn-primary">0 Review Offers</a></td>
                                                    <td>
                                                        <select id="postRequestAction" class="form-control" data-id="{{ $request->id ?? '' }}">
                                                            <option value=""></option>
                                                            <option value="delete">Delete</option>
                                                        </select>
                                                </td>
                                                </tr>    
                                            @endforeach
                                                                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="late-tab" class="tab-pane fade">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">Unapproved Request</span>                                    
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Request</th>
                                            <th>Offers</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($requests->where('status',3) as $request)
                                                <tr>
                                                    <td>{{ $request->created_at->format('M,d,Y') }} </td>
                                                    <td>
                                                        <div class="_info-dfesc">{{ $request->description ?? '' }} </div>
                                                <div class="_info-div">
                                                    <span class="_info-line">Delivery Time - {{ $request->deliver_time>1?sprintf("%s days",$request->deliver_time ?? 1):sprintf("%s day",$request->deliver_time) ?? 1}}</span>
                                                    <span class="_info-line">Budget - <span>${{ $request->budget ?? ''}}</span></span>
                                                </div>
                                                    </td>
                                                    <td><a href="" class="btn btn-primary">0 Review Offers</a></td>
                                                    <td>
                                                        <select id="postRequestAction" class="form-control" data-id="{{ $request->id ?? '' }}">
                                                            <option value=""></option>
                                                            <option value="delete">Delete</option>
                                                        </select>
                                                </td>
                                                </tr>    
                                            @endforeach
                                                                                        
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
        $(document).ready(function(){
            $("#postRequestAction").change(function(){
                //alert("helloe");
                let id = $(this).data('id');
                let status = this.value;
                $.post('{{ route('post.request.status') }}', {status: status ,id:id,_token:"{{ csrf_token() }}"}, function(data, textStatus, xhr) {

                    window.location.reload();
            });
            
        });


            /*optional stuff to do after success */
        });
    </script>
@endsection