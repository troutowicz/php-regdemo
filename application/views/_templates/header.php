<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Registration Demo">
    <meta name="author" content="Tim Routowicz">
    <link rel="icon" href="<?php echo URL; ?>public/img/favicon.ico">

    <!-- CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="navbar-brand">Registration Demo</span>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php echo $active === 'register' ? 'active' : '' ?>"><a href="<?php echo URL; ?>">Register</a></li>
            <li class="<?php echo $active === 'admin' ? 'active' : '' ?>"><a href="<?php echo URL; ?>admin">Admin Panel</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">
