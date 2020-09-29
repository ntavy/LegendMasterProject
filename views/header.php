<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Legend Coffee & Tea</title>
    <link rel="stylesheet" href="<?php echo SITE_URL ?>/public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL?>/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL?>/public/fontawesome/css/all.css">

</head>
<body>
<div class="header">
    <div class="menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img
                    src="<?php echo dirname($_SERVER['PHP_SELF']) . '/public/images/legend-coffee-logo.png'; ?>"
                    class="img-fluid navbar-img"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
<!--                    <li class="nav-item active">-->
<!--                        <a class="nav-link" href="--><?php //echo dirname($_SERVER['PHP_SELF']) ?><!--">Home <span-->
<!--                                class="sr-only">(current)</span></a>-->
<!--                    </li>-->
                    <li class="nav-item <?php echo $data["activeMenu"]=='shopping'? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo SITE_URL; ?>/shopping">Shopping<span
                                    class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php echo $data["activeMenu"]=="about-us"? 'active' : '' ?>">
                        <a class="nav-link" href="<?php echo SITE_URL; ?>/about-us">About Us</a>
                    </li>
                    <li class="nav-item <?php echo $data["activeMenu"]=="contact-us"? 'active' : '' ?>">
                        <a class="nav-link" href="<?php echo SITE_URL; ?>/contact-us">Contact Us</a>
                    </li>

                </ul>
              </div>
                <div>
                    <ul class="navbar-nav loginbar">
                        <li class="nav-item">
                            <a href="<?php echo SITE_URL?>/shopping-cart/viewCart" class="nav-link navbar-link-2 waves-effect">

                                <i class="fas fa-shopping-cart pl-0"></i> <?php if(isset($_SESSION["cart_items"])) {
                                    ?>
                                    <span class="red cart-total"><?php echo sizeof($_SESSION["cart_items"])?></span>
                                <?php
                                } ?>
                            </a>
                        </li>
                        <?php
                        if (isset($data['userArray'])) {
                            $link = 'Welcome {Name} <a class="nav-link login-link" href="' .  SITE_URL . '/log-out">Log Out</a>';
                        } else {
                            $link = '<a class="nav-link login-link" href="' . SITE_URL . '/sign-in">Sign In</a>';
                        }

                        echo '<li class="nav-item">' . $link . '</li>';

                        ?>                        <!--			  		<li>|</li>-->
                        <!--			  		<li><a class="login-link" href="">Sign up</a></li>-->
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="content">
		
	