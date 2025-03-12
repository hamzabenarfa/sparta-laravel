<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="initial-scale=1,width=device-width,maximum-scale=2,minimum-scale=0.5,user-scalable=1"/>
    <meta name="HandheldFriendly" content="true"/>

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title') - {{ settings('app_name') }}</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('web/img/favicon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('web/img/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('web/img/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('web/img/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('web/img/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('web/img/favicon.png') }}">

    <!-- FONTS & ICONS -->
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.15.0/css/all.css" rel="stylesheet" type="text/css">

    <!-- DEFAULT CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    @yield('styles')

    <!-- CUSTOM CSS -->
    <link href="{{ asset('web/css/style.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body class="en">
    @include('frontend.zeus.layouts.navbar')

    <div id="app">
        @yield('content')
    </div>


    @include('frontend.zeus.layouts.footer')

    <!-- LOADER -->
    <div id="loader" class="show fullscreen">
        <img src="{{ asset('web/img/logo.png') }}" alt="Logo" class="logo"/>
    </div>

    <!-- MODALS -->
    @if(!auth()->check())
        
        @include('frontend.zeus.modals.unauthenticated')
        @include('frontend.zeus.modals.error-login')
        @include('frontend.zeus.modals.login')
        @include('frontend.zeus.modals.register')
        
        
        
    @endif
    
    @include('frontend.zeus.modals.limits')

    @if(request()->is('/') || request()->is('play') || request()->is('games/search') || strpos(request()->path(), 'category') !== false)
        @include('frontend.zeus.modals.providers')
    @endif

    <!-- SCRIPTS -->
    <script src="{{ asset('frontend/Default/js/jquery-3.4.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')

    <script src="{{ asset('web/vendor/validate/jquery.validate.js') }}"></script>
    <script src="{{ asset('web/vendor/validate/additional-methods.js') }}"></script>
    <script src="{{ asset('web/vendor/validate/messages_es.js') }}"></script>
    <script src="{{ asset('web/js/validate.js') }}"></script>
    <script src="{{ asset('web/js/custom.js') }}"></script>

    <script type="text/javascript">
        $(document).on('click', '.dropdown-container-level .dropdown-level', function() {
            $(this).next('.dropdown-menu-level').slideToggle();
        });

        // Show unauthenticated modal
        function unauthenticated() {
            var unauthenticatedModal = document.getElementById('unauthenticatedModal');
            var modal = new bootstrap.Modal(unauthenticatedModal);
            modal.show();
        }
    </script>

    @if(request()->has('error') && request('error') == 'login')
    <script type="text/javascript">
        var errorLoginModal = document.getElementById('errorLoginModal');
        var modal = new bootstrap.Modal(errorLoginModal);
        modal.show();
    </script>
    @endif
</body>
</html>
