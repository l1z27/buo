<?php 
include('includes/all.php');
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head itemscope itemtype="http://schema.org/WebPage">
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=0">
<meta itemprop="name" property="og:site_name" content="Bottoms Up Organics" />
<meta property="og:type" content="website" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7ZD99F838L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7ZD99F838L');
</script>
<?php 
include('includes/seo.php');
?>

<link rel="icon" href="/assets/img/favicon.ico" type="image/x-icon" />
<link rel="icon" href="/assets/img/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="/assets/img/logo.png"/>
<meta property="og:image" content="/assets/img/logo.png" />

<link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">

<link href="/assets/style/main.css" rel="stylesheet">

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

</head> 
<body class="pg-<?= trim($_SERVER['REQUEST_URI'], '/'); ?> <?= (trim($_SERVER['REQUEST_URI'], '/') == "login?act=signup") ? "pg-login pg-signup" : "" ?>">