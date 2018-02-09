<!DOCTYPE html>
<html lang="en">

<head>

<?php wp_head(); ?>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php wp_title(''); ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" src="https://use.typekit.net/mfp1zig.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.3/js/all.js"></script>
  <style>
  @import url("https://use.typekit.net/mfp1zig.css");
  </style>

  <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="/wp-content/themes/seed-theme-18/js/isotope.js"></script>
  <script src="/wp-content/themes/seed-theme-18/js/base.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-40911536-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-40911536-1');
  </script>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="/wp-content/themes/seed-theme-18/style.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="wp-content/themes/seed-theme-18/images/favicon.png">

</head>
<body>

  <!-- Navigation Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div class="nav">
    <div class="container">
    <a href="/"><img class="nav-logo" alt="Seed Academy Logo" title="Seed Publicity Logo" src="/wp-content/themes/seed-theme-18/images/logo.png" width="100" height="auto" ></a>
      <ul class="navbar-list">
        <li class="navbar-item"><a href="/about">Our Team</a></li>
        <li class="navbar-item"><a href="/services">Our Services</a></li>
        <li class="navbar-item"><a href="/case-studies">Our Work</a></li>
        <li class="navbar-button"><a href="mailto:hello@seedpublicity.co.uk" class="button button-primary">contact us</a><li>
      </ul>
      <div class="button_container" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
    <div class="overlay" id="overlay">
      <nav class="overlay-menu">
        <ul>
          <li><a href="/about">Our Team</a></li>
          <li><a href="/services">Our Services</a></li>
          <li><a href="/case-studies">Our Work</a></li>
          <li><a href="mailto:hello@seedpublicity.co.uk" class="button button-primary">contact us</a></li>
        </ul>
      </nav>
    </div>
    </div>
  </div>
