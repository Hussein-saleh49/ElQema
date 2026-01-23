<!DOCTYPE html>
<html lang="en" dir="{{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'rtl' : 'ltr' }}">

@include('front.partials.head')

<body>

    @include('front.partials.navbar')

    @yield('content')
    @include('front.partials.footer')

    <a href="https://wa.me/201006830403" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>


    @include('front.partials.scripts')

</body>

</html>
