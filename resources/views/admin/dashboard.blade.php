@extends('admin.layouts.app')
  @section('title','Dashboard')
@section('contents')
 <base href="{{ asset('public/storage/admin/') }}/">
            <!-- begin:: Content -->
            <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

              <!--Begin::Dashboard 1-->

           

              <!--Begin::Section-->
              <div class="row">
                <!-- <div class="col-xl-8">
                
                  begin:: Widgets/Best Sellers
                  <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                      <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                          Best Sellers
                        </h3>
                      </div>
                      <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#kt_widget5_tab1_content" role="tab">
                              Latest
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab2_content" role="tab">
                              Month
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab3_content" role="tab">
                              All time
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="kt-portlet__body">
                      <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget5_tab1_content" aria-expanded="true">
                          <div class="kt-widget5">
                            <div class="kt-widget5__item">
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__pic">
                                  <img class="kt-widget7__img" src="./assets/media//products/product27.jpg" alt="">
                                </div>
                                <div class="kt-widget5__section">
                                  <a href="#" class="kt-widget5__title">
                                    Great Logo Designn
                                  </a>
                                  <p class="kt-widget5__desc">
                                    Metronic admin themes.
                                  </p>
                                  <div class="kt-widget5__info">
                                    <span>Author:</span>
                                    <span class="kt-font-info">Keenthemes</span>
                                    <span>Released:</span>
                                    <span class="kt-font-info">23.08.17</span>
                                  </div>
                                </div>
                              </div>
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">19,200</span>
                                  <span class="kt-widget5__sales">sales</span>
                                </div>
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">1046</span>
                                  <span class="kt-widget5__votes">votes</span>
                                </div>
                              </div>
                            </div>
                            <div class="kt-widget5__item">
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__pic">
                                  <img class="kt-widget7__img" src="./assets/media//products/product22.jpg" alt="">
                                </div>
                                <div class="kt-widget5__section">
                                  <a href="#" class="kt-widget5__title">
                                    Branding Mockup
                                  </a>
                                  <p class="kt-widget5__desc">
                                    Metronic bootstrap themes.
                                  </p>
                                  <div class="kt-widget5__info">
                                    <span>Author:</span>
                                    <span class="kt-font-info">Fly themes</span>
                                    <span>Released:</span>
                                    <span class="kt-font-info">23.08.17</span>
                                  </div>
                                </div>
                              </div>
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">24,583</span>
                                  <span class="kt-widget5__sales">sales</span>
                                </div>
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">3809</span>
                                  <span class="kt-widget5__votes">votes</span>
                                </div>
                              </div>
                            </div>
                            <div class="kt-widget5__item">
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__pic">
                                  <img class="kt-widget7__img" src="./assets/media//products/product15.jpg" alt="">
                                </div>
                                <div class="kt-widget5__section">
                                  <a href="#" class="kt-widget5__title">
                                    Awesome Mobile App
                                  </a>
                                  <p class="kt-widget5__desc">
                                    Metronic admin themes.Lorem Ipsum Amet
                                  </p>
                                  <div class="kt-widget5__info">
                                    <span>Author:</span>
                                    <span class="kt-font-info">Fly themes</span>
                                    <span>Released:</span>
                                    <span class="kt-font-info">23.08.17</span>
                                  </div>
                                </div>
                              </div>
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">210,054</span>
                                  <span class="kt-widget5__sales">sales</span>
                                </div>
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">1103</span>
                                  <span class="kt-widget5__votes">votes</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="kt_widget5_tab2_content">
                          <div class="kt-widget5">
                            <div class="kt-widget5__item">
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__pic">
                                  <img class="kt-widget7__img" src="./assets/media//products/product10.jpg" alt="">
                                </div>
                                <div class="kt-widget5__section">
                                  <a href="#" class="kt-widget5__title">
                                    Branding Mockup
                                  </a>
                                  <p class="kt-widget5__desc">
                                    Metronic bootstrap themes.
                                  </p>
                                  <div class="kt-widget5__info">
                                    <span>Author:</span>
                                    <span class="kt-font-info">Fly themes</span>
                                    <span>Released:</span>
                                    <span class="kt-font-info">23.08.17</span>
                                  </div>
                                </div>
                              </div>
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">24,583</span>
                                  <span class="kt-widget5__sales">sales</span>
                                </div>
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">3809</span>
                                  <span class="kt-widget5__votes">votes</span>
                                </div>
                              </div>
                            </div>
                            <div class="kt-widget5__item">
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__pic">
                                  <img class="kt-widget7__img" src="./assets/media//products/product11.jpg" alt="">
                                </div>
                                <div class="kt-widget5__section">
                                  <a href="#" class="kt-widget5__title">
                                    Awesome Mobile App
                                  </a>
                                  <p class="kt-widget5__desc">
                                    Metronic admin themes.Lorem Ipsum Amet
                                  </p>
                                  <div class="kt-widget5__info">
                                    <span>Author:</span>
                                    <span class="kt-font-info">Fly themes</span>
                                    <span>Released:</span>
                                    <span class="kt-font-info">23.08.17</span>
                                  </div>
                                </div>
                              </div>
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">210,054</span>
                                  <span class="kt-widget5__sales">sales</span>
                                </div>
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">1103</span>
                                  <span class="kt-widget5__votes">votes</span>
                                </div>
                              </div>
                            </div>
                            <div class="kt-widget5__item">
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__pic">
                                  <img class="kt-widget7__img" src="./assets/media//products/product6.jpg" alt="">
                                </div>
                                <div class="kt-widget5__section">
                                  <a href="#" class="kt-widget5__title">
                                    Great Logo Designn
                                  </a>
                                  <p class="kt-widget5__desc">
                                    Metronic admin themes.
                                  </p>
                                  <div class="kt-widget5__info">
                                    <span>Author:</span>
                                    <span class="kt-font-info">Keenthemes</span>
                                    <span>Released:</span>
                                    <span class="kt-font-info">23.08.17</span>
                                  </div>
                                </div>
                              </div>
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">19,200</span>
                                  <span class="kt-widget5__sales">sales</span>
                                </div>
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">1046</span>
                                  <span class="kt-widget5__votes">votes</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="kt_widget5_tab3_content">
                          <div class="kt-widget5">
                            <div class="kt-widget5__item">
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__pic">
                                  <img class="kt-widget7__img" src="./assets/media//products/product11.jpg" alt="">
                                </div>
                                <div class="kt-widget5__section">
                                  <a href="#" class="kt-widget5__title">
                                    Awesome Mobile App
                                  </a>
                                  <p class="kt-widget5__desc">
                                    Metronic admin themes.Lorem Ipsum Amet
                                  </p>
                                  <div class="kt-widget5__info">
                                    <span>Author:</span>
                                    <span class="kt-font-info">Fly themes</span>
                                    <span>Released:</span>
                                    <span class="kt-font-info">23.08.17</span>
                                  </div>
                                </div>
                              </div>
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">210,054</span>
                                  <span class="kt-widget5__sales">sales</span>
                                </div>
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">1103</span>
                                  <span class="kt-widget5__votes">votes</span>
                                </div>
                              </div>
                            </div>
                            <div class="kt-widget5__item">
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__pic">
                                  <img class="kt-widget7__img" src="./assets/media//products/product6.jpg" alt="">
                                </div>
                                <div class="kt-widget5__section">
                                  <a href="#" class="kt-widget5__title">
                                    Great Logo Designn
                                  </a>
                                  <p class="kt-widget5__desc">
                                    Metronic admin themes.
                                  </p>
                                  <div class="kt-widget5__info">
                                    <span>Author:</span>
                                    <span class="kt-font-info">Keenthemes</span>
                                    <span>Released:</span>
                                    <span class="kt-font-info">23.08.17</span>
                                  </div>
                                </div>
                              </div>
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">19,200</span>
                                  <span class="kt-widget5__sales">sales</span>
                                </div>
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">1046</span>
                                  <span class="kt-widget5__votes">votes</span>
                                </div>
                              </div>
                            </div>
                            <div class="kt-widget5__item">
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__pic">
                                  <img class="kt-widget7__img" src="./assets/media//products/product10.jpg" alt="">
                                </div>
                                <div class="kt-widget5__section">
                                  <a href="#" class="kt-widget5__title">
                                    Branding Mockup
                                  </a>
                                  <p class="kt-widget5__desc">
                                    Metronic bootstrap themes.
                                  </p>
                                  <div class="kt-widget5__info">
                                    <span>Author:</span>
                                    <span class="kt-font-info">Fly themes</span>
                                    <span>Released:</span>
                                    <span class="kt-font-info">23.08.17</span>
                                  </div>
                                </div>
                              </div>
                              <div class="kt-widget5__content">
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">24,583</span>
                                  <span class="kt-widget5__sales">sales</span>
                                </div>
                                <div class="kt-widget5__stats">
                                  <span class="kt-widget5__number">3809</span>
                                  <span class="kt-widget5__votes">votes</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  end:: Widgets/Best Sellers
                </div> -->
                <div class="col-xl-12">

                  <!--begin:: Widgets/New Users-->
                  <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                      <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                          New Users
                        </h3>
                      </div>
                      <!-- <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content" role="tab">
                              Today
                            </a>
                          </li>
                         
                        </ul>
                      </div> -->
                    </div>
                    <div class="kt-portlet__body">
                      <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget4_tab1_content">
                          <div class="kt-widget4">
                        @foreach($users as $user)
                            <div class="kt-widget4__item">
                              <div class="kt-widget4__pic kt-widget4__pic--pic">
                                @php
                                  $img = 'public/storage/'.$user->userDetail->avatar
                                @endphp
                                <img src="{{ asset($img) }}" alt="">
                              </div>
                              <div class="kt-widget4__info">
                                <a href="{{ url("admin/user/{$user->id}") }}" class="kt-widget4__username">
                                  {{ $user->name }}
                                </a>
                                <!-- <p class="kt-widget4__text">
                                  Visual Designer,Google Inc
                                </p> -->
                              </div>
                            <a href="">{{ date('d M Y',strtotime($user->created_at)) }}</a>
                            </div>
                        @endforeach

                            
                            
                            
                            
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>

                  <!--end:: Widgets/New Users-->
                </div>
              </div>

              <!--End::Section-->

              <!--Begin::Section-->
              <!-- <div class="row">
                <div class="col-xl-4">
              
                  begin:: Widgets/Daily Sales
                  <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-widget14">
                      <div class="kt-widget14__header kt-margin-b-30">
                        <h3 class="kt-widget14__title">
                          Daily Sales
                        </h3>
                        <span class="kt-widget14__desc">
                          Check out each collumn for more details
                        </span>
                      </div>
                      <div class="kt-widget14__chart" style="height:120px;">
                        <canvas id="kt_chart_daily_sales"></canvas>
                      </div>
                    </div>
                  </div>
              
                  end:: Widgets/Daily Sales
                </div>
                <div class="col-xl-4">
              
                  begin:: Widgets/Profit Share
                  <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-widget14">
                      <div class="kt-widget14__header">
                        <h3 class="kt-widget14__title">
                          Profit Share
                        </h3>
                        <span class="kt-widget14__desc">
                          Profit Share between customers
                        </span>
                      </div>
                      <div class="kt-widget14__content">
                        <div class="kt-widget14__chart">
                          <div class="kt-widget14__stat">45</div>
                          <canvas id="kt_chart_profit_share" style="height: 140px; width: 140px;"></canvas>
                        </div>
                        <div class="kt-widget14__legends">
                          <div class="kt-widget14__legend">
                            <span class="kt-widget14__bullet kt-bg-success"></span>
                            <span class="kt-widget14__stats">37% Sport Tickets</span>
                          </div>
                          <div class="kt-widget14__legend">
                            <span class="kt-widget14__bullet kt-bg-warning"></span>
                            <span class="kt-widget14__stats">47% Business Events</span>
                          </div>
                          <div class="kt-widget14__legend">
                            <span class="kt-widget14__bullet kt-bg-brand"></span>
                            <span class="kt-widget14__stats">19% Others</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              
                  end:: Widgets/Profit Share
                </div>
                <div class="col-xl-4">
              
                  begin:: Widgets/Revenue Change
                  <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-widget14">
                      <div class="kt-widget14__header">
                        <h3 class="kt-widget14__title">
                          Revenue Change
                        </h3>
                        <span class="kt-widget14__desc">
                          Revenue change breakdown by cities
                        </span>
                      </div>
                      <div class="kt-widget14__content">
                        <div class="kt-widget14__chart">
                          <div id="kt_chart_revenue_change" style="height: 150px; width: 150px;"></div>
                        </div>
                        <div class="kt-widget14__legends">
                          <div class="kt-widget14__legend">
                            <span class="kt-widget14__bullet kt-bg-success"></span>
                            <span class="kt-widget14__stats">+10% New York</span>
                          </div>
                          <div class="kt-widget14__legend">
                            <span class="kt-widget14__bullet kt-bg-warning"></span>
                            <span class="kt-widget14__stats">-7% London</span>
                          </div>
                          <div class="kt-widget14__legend">
                            <span class="kt-widget14__bullet kt-bg-brand"></span>
                            <span class="kt-widget14__stats">+20% California</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              
                  end:: Widgets/Revenue Change
                </div>
              </div> -->

              <!--End::Section-->

              <!--Begin::Section-->
              {{-- <div class="row">
                
              
                <div class="col-xl-12">

                  <!--begin:: Widgets/Support Tickets -->
                  <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                      <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                          Support Tickets
                        </h3>
                      </div>
                      <div class="kt-portlet__head-toolbar">
                        <div class="dropdown dropdown-inline">
                          <button type="button" class="btn btn-clean btn-sm btn-icon-md btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-more-1"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

                            <!--begin::Nav-->
                            <ul class="kt-nav">
                              <li class="kt-nav__head">
                                Export Options
                                <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                              </li>
                              <li class="kt-nav__separator"></li>
                              <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                  <i class="kt-nav__link-icon flaticon2-drop"></i>
                                  <span class="kt-nav__link-text">Activity</span>
                                </a>
                              </li>
                              <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                  <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                  <span class="kt-nav__link-text">FAQ</span>
                                </a>
                              </li>
                              <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                  <i class="kt-nav__link-icon flaticon2-link"></i>
                                  <span class="kt-nav__link-text">Settings</span>
                                </a>
                              </li>
                              <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                  <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                  <span class="kt-nav__link-text">Support</span>
                                  <span class="kt-nav__link-badge">
                                    <span class="kt-badge kt-badge--success">5</span>
                                  </span>
                                </a>
                              </li>
                              <li class="kt-nav__separator"></li>
                              <li class="kt-nav__foot">
                                <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                              </li>
                            </ul>

                            <!--end::Nav-->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="kt-portlet__body">
                      <div class="kt-widget3">
                        <div class="kt-widget3__item">
                          <div class="kt-widget3__header">
                            <div class="kt-widget3__user-img">
                              <img class="kt-widget3__img" src="./assets/media/users/user1.jpg" alt="">
                            </div>
                            <div class="kt-widget3__info">
                              <a href="#" class="kt-widget3__username">
                                Melania Trump
                              </a><br>
                              <span class="kt-widget3__time">
                                2 day ago
                              </span>
                            </div>
                            <span class="kt-widget3__status kt-font-info">
                              Pending
                            </span>
                          </div>
                          <div class="kt-widget3__body">
                            <p class="kt-widget3__text">
                              Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
                            </p>
                          </div>
                        </div>
                        <div class="kt-widget3__item">
                          <div class="kt-widget3__header">
                            <div class="kt-widget3__user-img">
                              <img class="kt-widget3__img" src="./assets/media/users/user4.jpg" alt="">
                            </div>
                            <div class="kt-widget3__info">
                              <a href="#" class="kt-widget3__username">
                                Lebron King James
                              </a><br>
                              <span class="kt-widget3__time">
                                1 day ago
                              </span>
                            </div>
                            <span class="kt-widget3__status kt-font-brand">
                              Open
                            </span>
                          </div>
                          <div class="kt-widget3__body">
                            <p class="kt-widget3__text">
                              Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.
                            </p>
                          </div>
                        </div>
                        <div class="kt-widget3__item">
                          <div class="kt-widget3__header">
                            <div class="kt-widget3__user-img">
                              <img class="kt-widget3__img" src="./assets/media/users/user5.jpg" alt="">
                            </div>
                            <div class="kt-widget3__info">
                              <a href="#" class="kt-widget3__username">
                                Deb Gibson
                              </a><br>
                              <span class="kt-widget3__time">
                                3 weeks ago
                              </span>
                            </div>
                            <span class="kt-widget3__status kt-font-success">
                              Closed
                            </span>
                          </div>
                          <div class="kt-widget3__body">
                            <p class="kt-widget3__text">
                              Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!--end:: Widgets/Support Tickets -->
                </div>
              </div> --}}

              <!--End::Section-->

              <!--End::Dashboard 1-->
            </div>

            <!-- end:: Content -->
          </div>
        </a></div>
@endsection