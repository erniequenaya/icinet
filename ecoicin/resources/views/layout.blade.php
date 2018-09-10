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

      <div class="error">
        <span>Mensaje de error</span>
      </div>

      <div class="exito">
        <span>Mensaje de exito</span>
      </div>

      <div class="problema">
        <span>Mensaje de problema</span>
      </div>
    </body>
</html>
