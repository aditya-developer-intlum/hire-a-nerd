@extends('layouts.app')
@section('content')

	<main class="main_body _dBody _grayBg">
        <div class="container">
            <!-- Begin: Heading -->
            <div class="_headingDiv">
                <h2 class="_headingTxt">Manage Service</h2>
            </div>
            <!-- End : Heading -->
            <div class="_dCard _p0">
                <div class="_dCardHeader _borderBtm _p0">
                    <ul class="nav nav-tabs _order-tab">
                        <li class="active"><a data-toggle="tab" href="#active-tab" class="active">Active</a>

                        @unless($gig->where('status',1)->where('is_status',1)->count() == 0)
                        	<span class="_c-badge">
                        		{{ $gig->where('status',1)->where('is_status',1)->count() }}
                        	</span>
                        @endunless
                        </li>
                        <li><a data-toggle="tab" href="#pending-tab" >Pending Approval</a>

						@unless($gig->where('status',1)->where('is_status',0)->count() == 0)
							<span class="_c-badge">
                        		{{ $gig->where('status',1)->where('is_status',0)->count() }}
                        	</span>
                        @endunless

                        </li>

                        <li><a data-toggle="tab" href="#modification">Requires Modification</a>

						@unless($gig->where('status',1)->where('is_status',4)->count() == 0)
							<span class="_c-badge">
                        		{{ $gig->where('status',1)->where('is_status',4)->count() }}
                        	</span>
                        @endunless

                        </li>
                        <li><a data-toggle="tab" href="#draft-tab">Draft</a>

						@unless($gig->where('status',0)->where('is_status',0)->count() == 0)
							<span class="_c-badge">
                        		{{ $gig->where('status',0)->where('is_status',0)->count() }}
                        	</span>
						@endunless
                        </li>
                        <li><a data-toggle="tab" href="#denied-tab">Denied</a>

						@unless($gig->where('status',1)->where('is_status',2)->count() == 0)
							<span class="_c-badge">
                        		{{ $gig->where('status',1)->where('is_status',2)->count() }}
                        	</span>
						@endunless
                        </li>
                        <li><a data-toggle="tab" href="#paused-tab">Paused</a>

						@unless($gig->where('status',1)->where('is_status',3)->count() == 0)
							<span class="_c-badge">
                        		{{ $gig->where('status',1)->where('is_status',3)->count() }}
                        	</span>
                        @endunless

                        </li>
                        <li>
                        </li>
                    </ul>
                        	 <a href="{{ route('gig.index') }}" class="_commonBtn" style="margin-left:84%;margin-top: -5%">Create A New Service</a>

                </div>

                <div>
                    <div class="tab-content _order-tabent">
                        <div id="active-tab" class="tab-pane fade in active show">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">Active Service</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th>Service</th>
                                            <!-- <th>Impressions</th> -->
                                            <th>Clicks</th>
                                            <th>Views</th>
                                            <th>Orders</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                    @foreach($gig as $_gig)

										@if($_gig->status == 1 && $_gig->is_status == 1)
                                            <tr>
                                                <td> {{ $_gig->gig_title ?? '' }} </td>
                                               <!--  <td>Lorem ipsum dolor sit </td> -->
                                                <td>{{ $_gig->clicks }}</td>
                                                <td>{{ $_gig->clicks }}</td>
                                                <td>{{ $_gig->orders()->count() }} </td>
                                                <td>
<select id="action{{ $_gig->id }}" onchange="action('{{ json_encode([
    $_gig->menu->slug,
    $_gig->submenu->slug,
    $_gig->id
    ]) }}',this)" class="form-control action" >
    <option value=""></option>
    <option value="preview">Preview</option>
    <option value="edit">Edit</option>
    <option value="delete">Delete</option>
</select>
                                                </td>

                                            </tr>

                                        @endif

                                    @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="pending-tab" class="tab-pane fade">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">Service Pending Approval</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th>Service</th>
                                           <!--  <th>Impressions</th> -->
                                            <th>Clicks</th>
                                            <th>Views</th>
                                            <th>Orders</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                    @foreach($gig as $_gig)
                                    	@if($_gig->status == 1 && $_gig->is_status == 0)
                                           <tr>
                                                <td> {{ $_gig->gig_title ?? '' }} </td>
                                             <!--    <td>Lorem ipsum dolor sit </td> -->
                                                <td>{{ $_gig->clicks }}</td>
                                                <td>{{ $_gig->clicks }}</td>
                                                <td>{{ $_gig->orders()->count() }} </td>
                                                <td>
                                                    <select id="action{{ $_gig->id }}" onchange="action('{{ json_encode([
    $_gig->menu->slug,
    $_gig->submenu->slug,
    $_gig->id
    ]) }}',this)" class="form-control action" >
    <option value=""></option>
    <option value="preview">Preview</option>
    <option value="edit">Edit</option>
    <option value="delete">Delete</option>
</select>
                                                </td>

                                            </tr>
                                        @endif
                                    @endforeach



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="modification" class="tab-pane fade">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">Service That Require Modifications</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th>Service</th>
                                       <!--      <th>Impressions</th> -->
                                            <th>Clicks</th>
                                            <th>Views</th>
                                            <th>Orders</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
									@foreach($gig as $_gig)
										@if($_gig->status == 1 && $_gig->is_status == 4)
                                           <tr>
                                                <td> {{ $_gig->gig_title ?? '' }} </td>
                                             <!--    <td>Lorem ipsum dolor sit </td> -->
                                                <td>{{ $_gig->clicks }}</td>
                                                <td>{{ $_gig->clicks }}</td>
                                                <td>{{ $_gig->orders()->count() }} </td>
                                                <td>
                                                    <select id="action{{ $_gig->id }}" onchange="action('{{ json_encode([
    $_gig->menu->slug,
    $_gig->submenu->slug,
    $_gig->id
    ]) }}',this)" class="form-control action" >
    <option value=""></option>
    <option value="preview">Preview</option>
    <option value="edit">Edit</option>
    <option value="delete">Delete</option>
</select>
                                                </td>

                                            </tr>
                                         @endif
                                    @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="draft-tab" class="tab-pane fade">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">Draft Service</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th>Service</th>
                                         <!--    <th>Impressions</th> -->
                                            <th>Clicks</th>
                                            <th>Views</th>
                                            <th>Orders</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                    @foreach($gig as $_gig)
										@if($_gig->status == 0)
                                           <tr>
                                                <td> {{ $_gig->gig_title ?? '' }} </td>
                                             <!--    <td>Lorem ipsum dolor sit </td> -->
                                                <td>{{ $_gig->clicks }}</td>
                                                <td>{{ $_gig->clicks }}</td>
                                                <td>{{ $_gig->orders()->count() }} </td>
                                                <td>
                                                    <select id="action{{ $_gig->id }}" onchange="action('{{ json_encode([
    $_gig->menu->slug,
    $_gig->submenu->slug,
    $_gig->id
    ]) }}',this)" class="form-control action" >
    <option value=""></option>
    <option value="preview">Preview</option>
    <option value="edit">Edit</option>
    <option value="delete">Delete</option>
</select>
                                                </td>

                                            </tr>
                                        @endif
                                    @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="denied-tab" class="tab-pane fade">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">Denied Service</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th>Service</th>
                            <!--                 <th>Impressions</th> -->
                                            <th>Clicks</th>
                                            <th>Views</th>
                                            <th>Orders</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                    @foreach($gig as $_gig)
										@if($_gig->status == 1 && $_gig->is_status == 2)
                                           <tr>
                                                <td> {{ $_gig->gig_title ?? '' }} </td>
                                           <!--      <td>Lorem ipsum dolor sit </td> -->
                                                <td>{{ $_gig->clicks }}</td>
                                                <td>{{ $_gig->clicks }}</td>
                                                <td>{{ $_gig->orders()->count() }} </td>
                                                <td>
                                                    <select id="action{{ $_gig->id }}" onchange="action('{{ json_encode([
    $_gig->menu->slug,
    $_gig->submenu->slug,
    $_gig->id
    ]) }}',this)" class="form-control action" >
    <option value=""></option>
    <option value="preview">Preview</option>
    <option value="edit">Edit</option>
    <option value="delete">Delete</option>
</select>
                                                </td>

                                            </tr>
                                        @endif
                                    @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="paused-tab" class="tab-pane fade">
                            <div class="_table-div">
                                <div class="_dCardHeader">
                                    <span class="_dHeading">Paused Service</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  _table">
                                        <thead>
                                        <tr>
                                            <th>Service</th>
                                  <!--           <th>Impressions</th> -->
                                            <th>Clicks</th>
                                            <th>Views</th>
                                            <th>Orders</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                    @foreach($gig as $_gig)
										@if($_gig->status == 1 && $_gig->is_status == 3)
                                           <tr>
                                                <td> {{ $_gig->gig_title ?? '' }} </td>
                                  <!--               <td>Lorem ipsum dolor sit </td> -->
                                                <td>{{ $_gig->clicks }}</td>
                                                <td>{{ $_gig->clicks }}</td>
                                                <td>{{ $_gig->orders()->count() }} </td>
                                                <td>
                                                    <select id="action{{ $_gig->id }}" onchange="action('{{ json_encode([
    $_gig->menu->slug,
    $_gig->submenu->slug,
    $_gig->id
    ]) }}',this)" class="form-control action" >
    <option value=""></option>
    <option value="preview">Preview</option>
    <option value="edit">Edit</option>
    <option value="delete">Delete</option>
</select>
                                                </td>

                                            </tr>
                                        @endif
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
        function action(argument,self) {

            var data = $.parseJSON(argument);
            var value = $(`#action${data[2]}`).val();
            $(`#action${data[2]}`).val("");

            if(value == 'preview'){
                window.open(`{{ url('') }}/${data[0]}/${data[1]}/${data[2]}`,"_blank");
            }
            if(value == 'delete'){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        window.location.href = `{{ url('seller/manage/service') }}/${data[2]}`;

                    }
                });

            }
            if(value == 'edit'){
                window.open(`{{ url('') }}/service/${data[2]}/update`);
            }

        }
    </script>
@endsection
