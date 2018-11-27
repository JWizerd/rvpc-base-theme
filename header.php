<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-67898600-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-67898600-2');
  </script>

  <script>
  document.addEventListener( 'wpcf7mailsent', function( event ) {
      ga('send', 'event', 'Form Submission', 'submit');
  }, false );
  </script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>
  <meta name="google-site-verification" content="_8YLA-snQjZ1BBvyUzWadz7x8GxVOepEeXkBZJhCX5I" />

  <!-- Facebook Pixel Code -->
<!--   <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '455262721316928');
    fbq('track', 'PageView');
  </script> -->
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=455262721316928&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
</head>
<body class="<?php body_class(); ?>">
  <?php get_template_part('alerts/header'); ?>  
  <?php // get_template_part('header/header-main'); ?>
