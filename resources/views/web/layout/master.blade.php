<!DOCTYPE html>
<html>
    <head>
        @include('web.includes.head')
    </head>
<body data-plugin-page-transition>
    <div class="body">
        @include('web.includes.navbar')
            @yield('content')
        @include('web.includes.footer')
    </div>
    @include('web.includes.script')
</body>
</html>