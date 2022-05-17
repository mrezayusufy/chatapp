    <meta charset="UTF-8">
    <title>@yield('title') | {{ __("chatapp") }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta content="Responsive Bootstrap 4 Chat App" name="description" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('/assets/images/favicon.ico')}}">
    