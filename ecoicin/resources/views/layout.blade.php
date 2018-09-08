<!doctype html>
<html>
    <head>
      @include('include/head')
      <title>ICIN</title>
    </head>
    <body>
      @yield('header')

      @yield('main')

      @include('include/footer')

      @include('include/js')

      @yield('script')
    </body>
</html>
