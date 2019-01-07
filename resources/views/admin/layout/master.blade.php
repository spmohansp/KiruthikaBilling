<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layout.header')
</head>
<body class="app sidebar-mini rtl">
<!-- Navbar-->
@include('admin.layout.menu')
<!-- Sidebar menu-->
@include('admin.layout.sidemenu')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1>@yield('BreadCrumbsPage')</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg" ></i></li>
            @yield('BreadCrumbs')
        </ul>
    </div>
        @include('admin.layout.error')
        @yield('Content')
</main>
@include('admin.layout.footer')
@include('admin.layout.script')

</body>
</html>
