<!DOCTYPE html>
<html>
<head>
    <title>filpped web page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- iphone meta -->
    <meta name="viewport" content="user-scalable=0, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- //iphone meta -->
    <link
      href="https://fonts.googleapis.com/css?family=Lobster+Two"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Arvo"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}" />
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/style.css') }}" />

    @livewireStyles
</head>
<body>



    @include('layouts.inc.user.navbar')

    @include('layouts.inc.user.mainpage')

    @include('layouts.inc.user.footer')


    <script src="{{ asset('user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>

    @livewireStyles
</body>
</html>
