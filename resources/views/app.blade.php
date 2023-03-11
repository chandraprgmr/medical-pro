<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite([
      'resources/js/app.js',
      'resources/vendor/jquery/jquery.min.js',
      'resources/vendor/bootstrap/js/bootstrap.bundle.min.js',
      'resources/vendor/jquery-easing/jquery.easing.min.js',
      'resources/js/sb-admin-2.min.js',
      'resources/vendor/chart.js/Chart.min.js',
      'resources/js/demo/chart-area-demo.js',
      'resources/js/demo/chart-pie-demo.js',
    ])
    @inertiaHead
  </head>
  <body>
    @inertia
  </body id="page-top">
</html>