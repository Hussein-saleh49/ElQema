<!doctype html>
<html lang="en">
@include('admin.auth.partials.head')

<body class="vertical  {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'light rtl' : '' }}  ">
    @yield('content')
    @include('admin.auth.partials.scripts')
</body>

</html>
</body>

</html>
