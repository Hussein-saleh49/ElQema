<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('front.partials.head')

<body>

    @include('front.partials.navbar')

   @yield("content")
    @include('front.partials.footer')


   @include("front.partials.scripts")

</body>

</html>
