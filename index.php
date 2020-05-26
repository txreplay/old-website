<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Valentin Commenge - Web Designer &amp; Web Developer</title>
	<link href='http://fonts.googleapis.com/css?family=Raleway:100,300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/reset.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/portfolio.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
	<?php include('pages/header.php'); ?>

	<?php include('pages/portfolio.php'); ?>

	<?php include('pages/about.php'); ?>

	<?php include('pages/contact.php'); ?>

	<?php include('pages/footer.php'); ?>

<script type="text/javascript" src="assets/js/vendor/jquery-v2.1.0.min.js"></script>
<script src="assets/js/vendor/foundation.min.js"></script>
<script src="assets/js/portfolio.js"></script>	
<script src="assets/js/lazyload.js"></script>
<script src="assets/js/least.js"></script>
<script>
    $(document).ready(function(){
        $('#gallery').least();
        $('.layer').delay('5000').fadeIn();
        $('.close').on(
            'click', 
            function(event) {
                event.preventDefault();
                $('.layer').fadeOut();
            }
        );
	});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47295321-1', 'txreplay.fr');
  ga('send', 'pageview');

</script>
</body>
</html>