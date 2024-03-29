<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.header-script')
</head>
<body>
<div class="header-top">
    <div class="header-top-content">
      <div class="container-fluid px-lg-5">
        @include('partials.top-head')
      </div>
    </div>
  </div>
  <div class="site-header fixed-top">
    <nav class="navbar navbar-expand-xl">
      @include('partials.menu-header')
    </nav>
  </div>
  <section class="news-wrap">
    <div class="container-fluid">
      @yield('content')
    </div>
  </section>
    @include('partials.footer')
    @include('partials.footer-script')
</body>
</html>