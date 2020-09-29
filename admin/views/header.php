<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Legend Coffee & Tea</title>
	<link rel="stylesheet" href="<?php echo SITE_URL ?>/public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL?>/public/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL ?>/admin/public/css/admin-style.css">

</head>
<body>
	<div class="header">
		<div class="menu">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="<?php echo SITE_URL ?>/admin"><img src="<?php echo SITE_URL ?>/admin/public/images/legend-coffee-logo.png" class="img-fluid navbar-img" /></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                      <li class="nav-item active">
                          <a class="nav-link" href="<?php echo SITE_URL ?>/admin">Add New Product <span
                                  class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="<?php echo SITE_URL ?>/admin/manage-products">Manage
                              Products</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="<?php echo SITE_URL ?>/admin/manage-users">Manage
                              Users</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="<?php echo SITE_URL ?>/admin/form-submissions">Form
                              Submissions</a>
                      </li>
                  </ul>
              </div>
                <div>
                    <ul class="navbar-nav loginbar">
                        <li><a class="login-link" href="<?php
                                if(isset($_SESSION['user']))
                                    echo SITE_URL.'/admin/form-login/logout';
                                else
                                    echo SITE_URL.'/admin/form-login/login';
                            ?>"><?php
                                if(isset($_SESSION['user']))
                                    echo 'Logout';
                                else
                                    echo 'Login';
                                ?></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
	<div class="content">
		
	