<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - Professional Web Developer</title>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @vite('resources/css/app.css')
</head>
<body>
  @include('components.includes.header')
  <div class="bg-gray-100 min-h-screen">
    
        @yield('content')
  </div>
  
  @include('components.includes.footer')
</body>
</html>