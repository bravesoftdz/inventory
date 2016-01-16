<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>Bootstrap 101 Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="assets/bower/bower_components/bootstrap-material-design/dist/css/bootstrap-material-design.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
        queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page
        via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
</head>
<body>
    <nav class="navbar material_navbar material_navbar_danger">
        <div class="container-fluid">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand material_navbar_brand" href="#">Brand</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav material_navbar_nav">
                <li class="active"><a href="#" class="material_navbar_nav_item">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#" class="material_navbar_nav_item">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu material_dropdown_menu" role="menu">
                    <li><a href="#" class="material_dropdown_menu_link">Action</a></li>
                    <li><a href="#" class="material_dropdown_menu_link">Another action</a></li>
                    <li><a href="#" class="material_dropdown_menu_link">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="material_dropdown_menu_link">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="material_dropdown_menu_link">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left material_navbar_form" role="search">
                <div class="form-group materail_input_block">
                  <input type="text"  class="form-control materail_input"  placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default material_btn material_btn_sm">Submit</button>
                </form>
              <ul class="nav navbar-nav navbar-right material_navbar_nav">
                <li><a href="#" class="material_navbar_nav_item">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu material_dropdown_menu" role="menu">
                    <li><a href="#" class="material_dropdown_menu_link">Action</a></li>
                    <li><a href="#" class="material_dropdown_menu_link">Another action</a></li>
                    <li><a href="#" class="material_dropdown_menu_link">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="material_dropdown_menu_link">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
        </div>
    </nav>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/bower/bower_components/jquery/dist/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files
    as needed -->
    <script src="assets/bower/bower_components/bootstrap-material-design/dist/js/material.min.js"></script>
</body>
</html>