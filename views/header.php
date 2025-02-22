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
            <a class="navbar-brand" href="<?php echo SITE_URL?>"><img
                    src="<?php echo SITE_URL . '/public/images/legend-coffee-logo.png'; ?>"
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
                  <?php
                        $totalQty = 0;
                     if(!empty($_SESSION["cart_items"])){
                        foreach ($_SESSION["cart_items"] as $itemKey => $itemVal) {
                          $totalQty  += $itemVal["quantity"];
                        }
                        }
                  ?>
                        <li class="nav-item">
                            <a href="<?php echo SITE_URL ?>/shopping-cart/viewCart"
                               class="nav-link navbar-link-2 waves-effect">

                                <i class="fas fa-shopping-cart pl-0"></i>
                                <span class="red cart-total"><?php echo $totalQty ?></span>

                            </a>
                        </li>
                        <?php
                        if (isset($_SESSION['userData']['cusAccID'])) {
                            $link = 'Welcome, ' . $_SESSION['userData']['firstName'];
                            ?>
                            <li class="nav-item textwelcome"><?php echo $link; ?></li>
                            <li class="nav-item">
                                <a class="nav-link login-link" href="<?php echo SITE_URL ?>/my-account"><i
                                        class="fas fa-user" title="My Account"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link login-link" href="<?php echo SITE_URL ?>/log-out"><i
                                        class="fas fa-sign-out-alt" title="Sign Out"></i></a>
                            </li>
                            <?php
                        } else{


                        ?>
                        <li class="nav-item"><a class="nav-link login-link" href="<?php echo SITE_URL ?>/sign-in">Sign In</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="content">
		
	