<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Miix Interiors | Vancouver BC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Meta descriptions can be any length, but Google generally truncates snippets ~300 characters (this limit increased in December 2017). It's best to keep meta descriptions long enough that they're sufficiently descriptive, so we recommend descriptions between 50–300 characters">
  <?php wp_head() ?>
</head>
<body>
<div class="navbar-fixed">
  <nav id="main-nav">
    <div class="nav-wrapper">
      <div class="container">
        <a href="#!" class="brand-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/miix_logo_white.png" alt="Miix Interiors Brand">
        </a>
      <a href="#" data-activates="mobile" class="button-collapse btn-floating btn-large scale-transition"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#introduction">Home</a></li>
        <li><a href="#introduction">Team</a></li>
        <li><a href="#introduction">Showcase</a></li>
        <li><a href="#introduction">Contact</a></li>
      </ul>
      <ul class="side-nav" id="mobile">
        <li class="mobile-menu-image">
        </li>
        <li><a href="sass.html">Home</a></li>
        <li><a href="badges.html">Team</a></li>
        <li><a href="collapsible.html">Showcase</a></li>
        <li><a href="mobile.html">Contact</a></li>
      </ul>

      </div>
    </div>
  </nav>
</div>