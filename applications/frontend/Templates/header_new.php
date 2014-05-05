<?php 
$title_site = $this->app->globalization->getCommonResource("header","title_site"); 

$menu_about_text = $this->app->globalization->getCommonResource("menu","menu_about_text"); 
$menu_resume_text = $this->app->globalization->getCommonResource("menu","menu_resume_text"); 
$menu_contact_text = $this->app->globalization->getCommonResource("menu","menu_contact_text"); 
$menu_blog_text = $this->app->globalization->getCommonResource("menu","menu_blog_text"); 

?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="Web/images/favicon.ico">

    <title><?php echo $title_site; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="Web/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="Web/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Web/css/theme.css" rel="stylesheet">
    <link href="Web/css/offcanvasmenu.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style id="holderjs-style" type="text/css"></style></head>

  <body role="document" style="">
    <!-- Fixed navbar -->
    <nav class="menu slide-menu-left">
        <ul>
            <li><button class="close-menu">&laquo;</button></li>
            <li><a href="about"><?php echo $menu_about_text; ?></a></li>
            <li><a href="resume"><?php echo $menu_resume_text; ?></a></li>
            <li><a href="contact"><?php echo $menu_contact_text; ?></a></li>
            <li><a href="http://jeremielitzler.net/Blog/"><?php echo $menu_blog_text; ?></a></li>
        </ul>
    </nav><!-- /slide menu left -->
    <button type="button" class="navbar-toggle"></button>