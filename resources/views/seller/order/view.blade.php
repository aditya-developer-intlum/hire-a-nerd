@extends('layouts.app')
@section('content')

	<main class="main_body _dBody _grayBg">
        <div class="container">
            <!-- Begin: Heading -->
            <div class="_headingDiv">
                <h2 class="_headingTxt">Manage Sales</h2>
            </div>
            <!-- End : Heading -->
            <div class="_dCard _p0">
                <div class="_dCardHeader _borderBtm _p0">
                    <ul class="nav nav-tabs _order-tab">
                      {{--   <li class="active"><a data-toggle="tab" href="#priority-tab" class="active">PRIORITY</a></li> --}}
                    <li class="active"><a data-toggle="tab" href="#new-tab" class="active">NEW</a>
                        @php
                            $count = 0;
                        @endphp
                        @foreach ($orders->sellerOrders as $new)

                                            @if ( $new->is_completed == false &&
                                                $new->is_accepted == false &&
                                                $new->is_rejected == false &&
                                                $new->is_late == false &&
                                                $new->is_delivered == false &&
                                                $new->is_cancelled == false
                                                )

                        <span class="_c-badge">{{ ++$count }}</span>
                                            @endif
                        @endforeach
                    </li>
                    <li><a data-toggle="tab" href="#active-tab">ACTIVE</a>
                         @php
                            $count = 0;
                        @endphp
                        @foreach ($orders->sellerOrders as $new)

                                            @if ( $new->is_completed == false &&
                                                $new->is_accepted == true &&
                                                $new->is_rejected == false &&
                                                $new->is_late == false &&
                                                $new->is_delivered == false &&
                                                $new->is_cancelled == false
                                                )

                        <span class="_c-badge">{{ ++$count }}</span>
                                            @endif
                        @endforeach

                    </li>
                    <li><a data-toggle="tab" href="#late-tab">LATE</a>
                        @php
                            $count = 0;
                        @endphp
                        @foreach ($orders->sellerOrders as $new)

                                            @if ( $new->is_completed == false &&
                                                $new->is_accepted == true &&
                                                $new->is_rejected == false &&
                                                $new->is_late == true &&
                                                $new->is_delivered == false &&
                                                $new->is_cancelled == false
                                                )

                        <span class="_c-badge">{{ ++$count }}</span>
                                            @endif
                        @endforeach

                    </li>
                    <li><a data-toggle="tab" href="#deliverded-tab">DELIVERED</a>
                             @php
                            $count = 0;
                        @endphp
                        @foreach ($orders->sellerOrders as $new)

                                            @if ( 
                                                $new->is_accepted == true &&
                                                $new->is_rejected == false &&
                                                $new->is_delivered == true &&
                                                $new->is_cancelled == false &&
                                                $new->is_completed == false
                                                )

                        <span class="_c-badge">{{ ++$count }}</span>
                                            @endif
                        @endforeach

                    </li>
                    <li><a data-toggle="tab" href="#completed-tab">COMPLETED</a>
                         @php
                            $count = 0;
                        @endphp
                        @foreach ($orders->sellerOrders as $new)

                                            @if ( $new->is_completed == true &&
                                                $new->is_accepted == true &&
                                                $new->is_rejected == false &&
                                                $new->is_delivered == true &&
                                                $new->is_cancelled == false
                                                )

                        <span class="_c-badge">{{ ++$count }}</span>
                                            @endif
                        @endforeach
                    </li>
                    <li><a data-toggle="tab" href="#canceled-tab">CANCELLED</a>
                         @php
                            $count = 0;
                        @endphp
                        @foreach ($orders->sellerOrders as $new)

                                            @if ($new->is_cancelled == true)

                        <span class="_c-badge">{{ ++$count }}</span>
                                            @endif
                        @endforeach
                    </li>
                       {{--  <li><a data-toggle="tab" href="#starred-tab">STARRED</a></li> --}}
                    </ul>
                </div>
                <div>
                    <div class="tab-content _order-tab-content">
                        {{-- <div id="priority-tab" class="tab-pane fade in active show">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">PRIORITY ORDERS</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th>BUYER</th>
                                            <th>SERVICE</th>
                                            <th>DUE ON</th>
                                            <th>TOTAL</th>
                                            <th>NOTE</th>
                                            <th>STATUS</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> --}}
                        <div id="new-tab" class="tab-pane fade in active show">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">NEW ORDERS</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th>BUYER</th>
                                            <th>SERVICE</th>
                                            <th>DUE ON</th>
                                            <th>TOTAL</th>
                                            {{-- <th>NOTE</th> --}}
                                            <th>STATUS</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($orders->sellerOrders as $new)

                                            @if ( $new->is_completed == false &&
                                                $new->is_accepted == false &&
                                                $new->is_rejected == false &&
                                                $new->is_late == false &&
                                                $new->is_delivered == false &&
                                                $new->is_cancelled == false
                                                )
                                            <tr>
                                                <td>{{ $new->user->name ?? '' }}</td>
                                                <td>{{ $new->gig->gig_title ?? '' }}</td>
                                                @php
                                                    $package = "{$new->package}_delivery_time";
                                                    $price = "{$new->package}_price";
                                                    $due = new \Carbon\Carbon($new->created_at);
                                                @endphp
                                                <td>{{ $due->copy()->addDays($new->gig->gigPrice->$package) }}</td>
                                                <td>{{ '$ '.$new->gig->gigPrice->$price ?? '' }}</td>
                                              {{--   <td></td> --}}
                                                <td>
                                            <form action="{{ route('seller.order.status',[$new->id]) }}" method="post" id="new_order{{ $new->id }}">
                                                @csrf

                                                <select name="status" onchange="cancelOrder('{{ $new->id }}',this)" class="form-control">
                                                    <option value="">--status--</option>
                                                    <option value="active">Active</option>
                                                    <option value="cancel">Cancel</option>
                                                </select>
                                            </form>
                                            </td>
                                            </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="active-tab" class="tab-pane fade">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">ACTIVE ORDERS</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th>BUYER</th>
                                            <th>SERVICE</th>
                                            <th>DUE ON</th>
                                            <th>TOTAL</th>
                                         {{--    <th>NOTE</th> --}}
                                            <th>STATUS</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($orders->sellerOrders as $new)

                                            @if ( $new->is_completed == false &&
                                                $new->is_accepted == true &&
                                                $new->is_rejected == false &&
                                                $new->is_late == false &&
                                                $new->is_delivered == false &&
                                                $new->is_cancelled == false
                                                )
                                            <tr>
                                                <td>{{ $new->user->name ?? '' }}</td>
                                                <td>{{ $new->gig->gig_title ?? '' }}</td>
                                                @php
                                                    $package = "{$new->package}_delivery_time";
                                                    $price = "{$new->package}_price";
                                                    $due = new \Carbon\Carbon($new->created_at);
                                                @endphp
                                                <td>{{ $due->copy()->addDays($new->gig->gigPrice->$package) }}</td>
                                                <td>{{ '$ '.$new->gig->gigPrice->$price ?? '' }}</td>
                                              {{--   <td></td> --}}
                                                <td>
                                                    <form action="{{ route('seller.order.status',[$new->id]) }}" method="post" id="new_order{{ $new->id }}">
                                                        @csrf

                                                        <select name="status" onchange="cancelOrder('{{ $new->id }}',this)" class="form-control">
                                                            <option value="">--status--</option>
                                                            <option value="delivered">Delivered</option>
                                                            <option value="cancel">Cancel</option>
                                                        </select>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="late-tab" class="tab-pane fade">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">LATE ORDERS</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th>BUYER</th>
                                            <th>SERVICE</th>
                                            <th>DUE ON</th>
                                            <th>TOTAL</th>
                                         <!--    <th>NOTE</th> -->
                                            <th>STATUS</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($orders->sellerOrders as $new)

                                            @if ($new->is_late == true &&
                                                $new->is_accepted == true &&
                                                $new->is_rejected == false &&
                                                $new->is_delivered == false &&
                                                $new->is_cancelled == false)
                                            <tr>
                                                <td>{{ $new->user->name ?? '' }}</td>
                                                <td>{{ $new->gig->gig_title ?? '' }}</td>
                                                @php
                                                    $package = "{$new->package}_delivery_time";
                                                    $price = "{$new->package}_price";
                                                    $due = new \Carbon\Carbon($new->created_at);
                                                @endphp
                                                <td>{{ $due->copy()->addDays($new->gig->gigPrice->$package) }}</td>
                                                <td>{{ '$ '.$new->gig->gigPrice->$price ?? '' }}</td>
                                              {{--   <td></td> --}}
                                                <td>
                                            <form action="{{ route('seller.order.status',[$new->id]) }}" method="post" id="new_order{{ $new->id }}">
                                                @csrf

                                                <select name="status" onchange="cancelOrder('{{ $new->id }}',this)" class="form-control">
                                                    <option value="">--status--</option>

                                                    <option value="delivered">Delivered</option>
                                                    <option value="cancel">Cancel</option>
                                                </select>
                                            </form>
                                            </td>
                                            </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="deliverded-tab" class="tab-pane fade">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">DELIVERED ORDERS</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th>BUYER</th>
                                            <th>SERVICE</th>
                                            <th>DUE ON</th>
                                            <th>DELIVERED AT</th>
                                            <th>TOTAL</th>
                                        {{--     <th>NOTE</th> --}}
                                          {{--   <th>STATUS</th> --}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($orders->sellerOrders as $new)

                                            @if ( 
                                                $new->is_accepted == true &&
                                                $new->is_rejected == false &&
                                                $new->is_delivered == true &&
                                                $new->is_cancelled == false &&
                                                $new->is_completed == false
                                                )
                                            <tr>
                                                <td>{{ $new->user->name ?? '' }}</td>
                                                <td>{{ $new->gig->gig_title ?? '' }}</td>
                                                @php
                                                    $package = "{$new->package}_delivery_time";
                                                    $price = "{$new->package}_price";
                                                    $due = new \Carbon\Carbon($new->created_at);
                                                @endphp
                                                <td>{{ $due->copy()->addDays($new->gig->gigPrice->$package) }}</td>
                                                <td>{{ $new->delivered_at }}</td>
                                                <td>{{ '$ '.$new->gig->gigPrice->$price ?? '' }}</td>
                                              {{--   <td></td> --}}
                                              {{--   <td>
                                            <form action="{{ route('seller.order.status',[$new->id]) }}" method="post" id="new_order{{ $new->id }}">
                                                @csrf

                                                <select name="status" onchange="recancelOrder('{{ $new->id }}',this)class="form-control">
                                                    <option value="">--status--</option>
                                                    <option value="active">Active</option>
                                                    <option value="delivered">Delivered</option>
                                                    <option value="cancel">Cancel</option>
                                                </select>
                                            </form>
                                            </td> --}}
                                            </tr>
                                            @endif
                                        @endforeach
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
                                            <th>BUYER</th>
                                            <th>SERVICE</th>
                                            <th>DUE ON</th>
                                            <th>DELIVERED AT</th>
                                            <th>TOTAL</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($orders->sellerOrders as $new)

                                            @if ( $new->is_completed == true &&
                                                $new->is_accepted == true &&
                                                $new->is_rejected == false &&
                                                $new->is_delivered == true &&
                                                $new->is_cancelled == false
                                                )
                                            <tr>
                                                <td>{{ $new->user->name ?? '' }}</td>
                                                <td>{{ $new->gig->gig_title ?? '' }}</td>

                                                @php
                                                    $package = "{$new->package}_delivery_time";
                                                    $price = "{$new->package}_price";
                                                    $due = new \Carbon\Carbon($new->created_at);
                                                @endphp

                                                <td>{{ $due->copy()->addDays($new->gig->gigPrice->$package) }}</td>
                                                <td>{{ $new->delivered_at }}</td>
                                                <td>{{ '$ '.$new->gig->gigPrice->$price ?? '' }}</td>
                                              {{--   <td></td> --}}

                                            </tr>
                                            @endif
                                        @endforeach
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
                                            <th>BUYER</th>
                                            <th>SERVICE</th>
                                            <th>DUE ON</th>
                                            <th>TOTAL</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($orders->sellerOrders as $new)

                                            @if ($new->is_cancelled == true)
                                            <tr>
                                                <td>{{ $new->user->name ?? '' }}</td>
                                                <td>{{ $new->gig->gig_title ?? '' }}</td>
                                                @php
                                                    $package = "{$new->package}_delivery_time";
                                                    $price = "{$new->package}_price";
                                                    $due = new \Carbon\Carbon($new->created_at);
                                                @endphp
                                                <td>{{ $due->copy()->addDays($new->gig->gigPrice->$package) }}</td>
                                                <td>{{ '$ '.$new->gig->gigPrice->$price ?? '' }}</td>
                                              {{--   <td></td> --}}

                                            </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {{-- <div id="starred-tab" class="tab-pane fade">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">STARRED</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th>BUYER</th>
                                            <th>SERVICE</th>
                                            <th>DUE ON</th>
                                            <th>TOTAL</th>
                                            <th>NOTE</th>
                                            <th>STATUS</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </main>
    <script>
        function cancelOrder(id,event) {

            if(event.value == 'cancel'){
                Swal.fire({
                    title: 'Reason for Cancel',
                    input: 'textarea',
                    inputAttributes: {
                    autocapitalize: 'off'
                    },
                    showCancelButton: true,
                    confirmButtonText: 'Submit',
                    showLoaderOnConfirm: true,
                }).then((result) => {
                    if(result.value){

                        $.get('{{ url('seller/cancel/order/') }}/'+id,{ region:result.value }, function(data) {
                           window.location.reload();
                        });
                    }else if(result.dismiss == 'cancel'){
                        event.value = "";
                    }else{
                        Swal.fire({
                          type: 'error',
                          title: 'Reason Filed is Required'
                        })
                    }
                })
            }else{
                $(`#new_order${id}`).submit();
            }
            
        }
    </script>
@endsection