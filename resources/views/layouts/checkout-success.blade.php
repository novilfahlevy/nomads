<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @include('includes.style')
  <link rel="stylesheet" href="{{ url('frontend/styles/success-checkout.css') }}">
</head>
<body>
  @include('includes.navbar-alternate')
  @yield('content')
  @include('includes.script')
</body>
</html>