<!DOCTYPE html>
<html lang="en" dir="{{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'rtl' : 'ltr' }}">

@include('front.partials.head')

<body>

    @include('front.partials.navbar')

     @auth('admin')
        <a href="{{ route('admin.index') }}"
            style="
          position: fixed;
          bottom: 20px;
          left: 20px;
          z-index: 999;
          background-color: #007bff;
          color: #fff;
          padding: 12px 20px;
          border-radius: 50px;
          box-shadow: 0 4px 6px rgba(0,0,0,0.3);
          text-decoration: none;
       ">
            Admin Dashboard
        </a>
    @endauth


    @yield('content')
    @include('front.partials.footer')

    <a href="https://wa.me/+201220950626" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
   


    @include('front.partials.scripts')
    @livewireScripts

</body>

</html>
