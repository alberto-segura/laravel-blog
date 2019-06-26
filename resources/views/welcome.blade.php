<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('includes.head')
  </head>
  <body>
    <header class="row">
      @include('includes.header')
    </header>

    <div id="main" class="row full-height">
      @yield('content')
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>
  </body>
</html>
