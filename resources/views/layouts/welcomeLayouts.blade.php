<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel - Vue</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <script src="{{ asset('js/app.js') }}" defer></script>
  
</head>
<body class="layout-fixed layout-navbar-fixed sidebar-mini text-sm layout-footer-fixed">
  <div id="helloWorld">                                                               
    @yield('helloWorld')
  </div>

</body>
</html>