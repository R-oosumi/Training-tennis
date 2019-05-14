<html>
<head>
  <title>@yield('title')</title>
  <style>
  /* 真ん中揃えの方が見やすいと思うから */
  tr th{text-align: center;}
  tr td{text-align: center;}
  </style>
  <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
  @yield('content')
</body>
</html>
