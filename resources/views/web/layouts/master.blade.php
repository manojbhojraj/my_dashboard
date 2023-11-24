<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('web.layouts.css')
    @yield('css')
  </head>
  <body>
    <div class="container-scroller">
    @include('web.layouts.sidebar')
    <div class="container-fluid page-body-wrapper">
    @include('web.layouts.header')
    @yield('content')
    </div>
    @include('web.layouts.footer')
    </div>
    @include('web.layouts.scripts')
    @yield('scripts')
  </body>
</html>
