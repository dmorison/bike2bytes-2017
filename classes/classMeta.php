<?php
error_reporting(-1);
ini_set('error_reporting', E_ALL);

class classMeta
{

	public function buildMeta()
	{

		$html = <<<EOD
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Website of David Morison">
  	<meta name="author" content="David Morison">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Bike2:bytes - David Morison</title>

  	<link rel="author" href="https://plus.google.com/+DaveMorison" />
	<link rel="icon" type="image/png" href="images/favicon.ico" />

	<meta property="og:title" content="Bike2:bytes - David Morison" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.bike2bytes.com/" />
	<meta property="og:description" content="Website for David Morison, London, UK" />
	<meta property="og:image" content="http://www.bike2bytes.com/images/og-image.jpg" />

  	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">

	<link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css' />

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-47887378-1']);
	  _gaq.push(['_setDomainName', 'bike2bytes.com']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>
<body ng-app="bikeBytesApp">
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
EOD;

	return $html;

	}
	
}

?>