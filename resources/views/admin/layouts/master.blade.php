<!DOCTYPE html>
<html lang="en">

<head>
    
<!-- META -->
@include('admin.layouts.include.meta')
<!-- CSS -->
@include('admin.layouts.include.css')

</head>

<body class="layout-boxed enable-secondaryNav">

    @include('admin.layouts.include.loader')
    @include('admin.layouts.include.topbar')

    <div class="main-container" id="container">
        @include('admin.layouts.include.search')
        @include('admin.layouts.include.navbar')
        <div id="content" class="main-content">
            @yield('content')
        </div>
    </div>
@include('admin.layouts.include.scripts')    
</body>
</html>