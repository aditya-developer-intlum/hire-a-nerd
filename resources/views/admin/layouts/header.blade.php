  <!-- end::Head -->

  <!-- begin::Body -->
  <body class="kt-app__aside--left kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->

    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
      <div class="kt-header-mobile__logo">
        <a href="{{ url('admin/dashboard') }}">
          <img alt="Logo" src="{{ asset('public/storage/images/logo.png') }}" />
        </a>
      </div>
      <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
      </div>
    </div>

    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

      

        <!-- end:: Aside -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

          <!-- begin:: Header -->
          <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

            <!-- begin:: Header Menu -->
          
            <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
              <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
                
              </div>
            </div>

            <!-- end:: Header Menu -->

            <!-- begin:: Header Topbar -->
            <div class="kt-header__topbar">

              <!--begin: User Bar -->
              <div class="kt-header__topbar-item kt-header__topbar-item--user">
                    <div class="kt-header__topbar-user">
                    
                    <div class="onoffswitch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" {{ $setting->is_cookie_enabled?'checked':'' }}>
                        <label class="onoffswitch-label" for="myonoffswitch">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                    
                    </div>
                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">

                  <div class="kt-header__topbar-user">
                    <span class="kt-header__topbar-username kt-hidden-mobile">{{ Auth::user()->name }}</span>
                    <img class="kt-hidden" alt="Pic" src="{{ asset('public/storage/admin') }}/assets/media/users/300_25.jpg" />

                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                    <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">{{ Auth::user()->name[0] }}</span>
                  </div>
                </div>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

                  <!--begin: Head -->
                  <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(./assets/media/misc/bg-1.jpg)">
                    <div class="kt-user-card__avatar">
                      <img class="kt-hidden" alt="Pic" src="{{ asset('public/storage/admin') }}/assets/media/users/300_25.jpg" />

                      <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                      <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">
                        {{ Auth::user()->name[0] }}
                      </span>
                    </div>
                    <div class="kt-user-card__name">
                    {{ Auth::user()->name }}
                    </div>
                   <!--  <div class="kt-user-card__badge">
                     <span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>
                   </div> -->
                  </div>

                  <!--end: Head -->

                  <!--begin: Navigation -->
                  <div class="kt-notification">
                
                    <a href="{{ url('admin/download-email-list') }}" class="kt-notification__item">
                      <div class="kt-notification__item-icon">
                        <i class="flaticon2-cardiogram kt-font-warning"></i>
                      </div>
                      <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title kt-font-bold">
                          Export All Email List
                        </div>
                        
                      </div>
                    </a>
                    <div class="kt-notification__custom kt-space-between">
                      <a href="javascript:;" onclick="document.getElementById('logout').submit()"  class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
                      
                      <form action="{{ route('admin.logout') }}" id="logout" method="post">
                        @csrf
                      </form>
                    </div>
                  </div>

                  <!--end: Navigation -->
                </div>
              </div>

              <!--end: User Bar -->
            </div>

            <!-- end:: Header Topbar -->
          </div>

          <!-- end:: Header -->
          <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
@push('scripts')
<script>
    $("#myonoffswitch").change(function(){
        if($(this).prop('checked') == true){
            
            $.post('{{ route('setting.cookie') }}', {
                _token: '{{ csrf_token() }}',
                cookie_status:1
            });

        }else{
            
            $.post('{{ route('setting.cookie') }}', {
                _token: '{{ csrf_token() }}',
                cookie_status:0
            });
        }
    })
</script>

@endpush