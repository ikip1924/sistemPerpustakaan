<!DOCTYPE html>
<html lang="en">
<head>
  @include('frontend.templates.partials.head')
</head>
<body>
    {{-- navigation --}}
   @include('frontend.templates.partials.navbar')
    {{-- content--}}
    <div class="container">
      @yield('content')
    </div>


     <!-- Compiled and minified JavaScript -->
  @include('frontend.templates.partials.scripts')
  @include('frontend.templates.partials.toast')
</body>
</html>