<!doctype html>
<html lang="en">
@include('admin.partials.head')

<body class="vertical  dark  ">
    <div class="wrapper">
        @include('admin.partials.navbar')
        @include('admin.partials.sidebar')
       @yield("content")
    </div> 
    @include('admin.partials.scripts')
</body>

</html>
