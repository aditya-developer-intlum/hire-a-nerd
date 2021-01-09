@include('admin.layouts.header-links')
@include('admin.layouts.header')
<style>
	a { color: inherit; } 
</style>
@include('admin.layouts.side')
@yield('contents')
@include('admin.layouts.footer')
