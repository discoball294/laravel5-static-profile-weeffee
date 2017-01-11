
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/all.css" rel="stylesheet" type="text/css" media="all" />

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Poppins:100,300,400,600,700" rel="stylesheet" type="text/css">
    <link href="css/font-poppins.css" rel="stylesheet" type="text/css">
</head>
<body class="scroll-assist">
@include('includes.header')
<div class="main-container">
    @yield('content')
    @include('includes.footer')
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/flickr.js"></script>
<script src="js/flexslider.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/masonry.min.js"></script>
<script src="js/twitterfetcher.min.js"></script>
<script src="js/spectragram.min.js"></script>
<script src="js/ytplayer.min.js"></script>
<script src="js/countdown.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>