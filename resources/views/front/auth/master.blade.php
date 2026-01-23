<!DOCTYPE html>
<html lang="en" dir="{{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'rtl' : 'ltr' }}">

@include('front.partials.head')

<body>

   
    @yield('content')



    @include('front.partials.scripts')

</body>

</html>
