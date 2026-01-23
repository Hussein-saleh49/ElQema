 @php
    $locale = LaravelLocalization::getCurrentLocale();
    $dir = $locale === 'ar' ? '-rtl' : '';
@endphp
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>@yield("title")</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset("assets-admin".$dir) }}/css/simplebar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset("assets-admin".$dir) }}/css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset("assets-admin".$dir) }}/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset("assets-admin".$dir) }}/css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="{{ asset("assets-admin".$dir) }}/css/app-dark.css" id="darkTheme">
  </head>