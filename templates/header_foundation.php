<!DOCTYPE html>
<html lang="en">
	<?php require_once("../includes/config.php"); ?>
	<?php if(!isset($navpos)) $navpos = "none"; ?>
    <head>
        <title> <?php if(isset($title)) echo($title); else echo("Edunet"); ?> </title>
        <link href="../images/favicon.ico" rel="icon"/>
        <link href="../foundation/css/foundation.css" rel="stylesheet" type="text/css"/>
        <link href="../stylesheets/styles.css" rel="stylesheet" type="text/css"/>
        <script src="../foundation/js/vendor/jquery.js"></script>
        <script src="../foundation/js/foundation/foundation.js"></script>
        <link href="../foundation/icons/foundation-icons/foundation-icons.css" rel="stylesheet" type="text/css"/>
	<body>
      <header>
        <div>
          <nav class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
              <li class="name">
                <h1><a href="#">Edunet</a></h1>
              </li>
              <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>
            <section class="top-bar-section">
              <ul class="right">
              <li class="has-form">
                <div class="row collapse">
                  <div class="large-8 small-9 columns"><input type="text" placeholder="Search Edunet"></div>
                  <div class="large-4 small-3 columns"><a href="#" class="alert button expand">Search</a></div>
                </div>
              </li>
              <li> </li>
                <li <?php if($navpos === "home")echo("class=\"active\""); ?>><a href="index.php">Home</a></li>
                <li class="has-dropdown not-click">
                  <a><?php if(isset($_SESSION["name"])) echo($_SESSION["name"]); else echo("Username"); ?></a>
                  <ul class="dropdown">
                    <li <?php if($navpos === "dashboard")echo("class=\"active\""); ?>><a href="#">Dashboard</a></li>
                    <li <?php if($navpos === "profile")echo("class=\"active\""); ?>><a href="#">Profile</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="left">
                <li <?php if($navpos === "courseware")echo("class=\"active\""); ?>><a href="courseware.php">Courseware</a></li>
                <li <?php if($navpos === "developers")echo("class=\"active\""); ?>><a href="#">Developers</a></li>
                <li <?php if($navpos === "discuss")echo("class=\"active\""); ?>><a href="#">Discuss</a></li>
                <li class="has-dropdown not-click">
                  <a href="#">More Features</a>
                  <ul class="dropdown">
                    <li <?php if($navpos === "schools")echo("class=\"active\""); ?>><a href="schools.php">Schools</a></li>
                    <li <?php if($navpos === "events")echo("class=\"active\""); ?>><a href="events.php">Events</a></li>
                  </ul>
                </li>
              </ul>
            </section>
          </nav>
        </div>
      </header>