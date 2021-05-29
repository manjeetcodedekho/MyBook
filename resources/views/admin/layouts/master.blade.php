@include('admin.layouts.navbar')

@include('admin.layouts.sidebar')
<br>
<div id="layoutSidenav_content"><br>
    <main>
        @yield('content')
    </main>
        @include('admin.layouts.footer')