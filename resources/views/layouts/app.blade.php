<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test-Hanzala</title>
    <link rel="stylesheet" href="css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    </head>
<body>
@include('inc.navbar')
<div class="container">
@include('inc.showcase')
<div class="row" >
<div class="col-md-8 col-lg-8">
@yield('content')

</div>
<div class="col-md-4 col-lg-4">  
@include('inc.sidebar')
</div>
</div>
</div>
<footer id="footer" class="text-center">
<p>Copyright 2019 &copy; Hanzala</p>
</footer>
</body>
</html>