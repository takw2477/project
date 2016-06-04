<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <?php
        session_start();
        if (!isset($_SESSION['type'])) {
            ?>
            <meta http-equiv="refresh" content="0; url=http://localhost/engineerfast/index.php">
            <?php
        }
        ?>
        <meta charset="UTF-8">
        <script src="../assets/jquery-1.12.3.js" ></script>
        <script src="../assets/bootstrap-3.3.6-dist/js/bootstrap.js" ></script>
        <link href="../assets/bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet" >
        <link href="css/web.scss" rel="stylesheet" >
        <title>FastEngineer</title>
        

    </head>
    <body style="background-color: #EEEEEE;">

        <div class="row Header" style="text-align: center;" >
            <h1 style="padding: 5px;" id="headder">Welcome</h1>
        </div>
<nav class="navbar navbar-default navbar-static-top nav-web" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <div class="row" >
                        <div class="col-lg-8 col-md-8 col-sm-8" >
                            <ul class="nav navbar-nav">
                                <li><a href="index.php?controllers=SiteController&views=project" class="<?php if($_GET['views']=="project"){ echo 'tab-focus';}else{echo 'tab-web';} ?>" style="margin: 2px;margin-bottom: 0px;margin-top: 0px;"><span>Project</span></a></li>
                               <!-- <li><a href="index.php?controllers=SiteController&views=listproject" class="<?php if($_GET['views']=="listproject"){ echo 'tab-focus';}else{echo 'tab-web';} ?>" style="margin: 2px;margin-bottom: 0px;margin-top: 0px;"><span >Listproject</span></a></li>  -->
                                <li><a href="index.php?controllers=SiteController&views=balancesheet" class="<?php if($_GET['views']=="balancesheet"){ echo 'tab-focus';}else{echo 'tab-web';} ?>" style="margin: 2px;margin-bottom: 0px;margin-top: 0px;"><span >Balance Sheet</span></a></li>
                                <li class="tab-web dropdown">
                                    <a   class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><span >Other</span>
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu ">
                                        <li><a  class="<?php if($_GET['views']=="listcustomer"){ echo 'tab-focus';}else{echo 'tab-web';} ?>" href="index.php?controllers=DetailController&views=listcustomer">Customer</a></li>
                                        <li><a  class="<?php if($_GET['views']=="listsupplier"){ echo 'tab-focus';}else{echo 'tab-web';} ?>" href="index.php?controllers=DetailController&views=listsupplier">Supplier</a></li>
                                        
                                        
                                        <?php if ($_SESSION['type']==0){ ?>
                                        <li><a  class="<?php if($_GET['views']=="listuser"){ echo 'tab-focus';}else{echo 'tab-web';} ?>" href="index.php?controllers=UserController&views=listuser">Manager User</a></li>
                                        <?php } ?>
                                        
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4" >
                            <ul class="nav navbar-nav" style="float: right;">
                               
                            <li class="tab-web dropdown">
                                    <a style="margin: 2px;margin-bottom: 0px;margin-top: 0px;" class=" dropdown-toggle" data-toggle="dropdown" href="#"><span>นาย xxxxx   xxxxxxxx</span>
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                       
                                        <li>  <a href="index.php?controllers=UserController&views=changepass" >เปลียนพาสเวร์ด</a></li>
                                         <li>  <a href="index.php?controllers=UserController&views=logout" >Log out</a></li>
                                    </ul>
                                </li>
                            
                            
                            </ul>
                        </div>
                    </div>
                    <?php ?>
                </div>
            </div>
        </nav>


        
        <?php
        error_reporting(E_ALL);
        require_once '../config/db.php';
        require_once '../config/web.php';
        $web = new web();
        $regex = "/^[\w]+[\w]$/";
        $name = isset($_GET['controllers']) ? $_GET['controllers'] : "SiteController";
        if (preg_match($regex, $name)) {
            $name = $web->checkController($name);

            if ($name == "error") {
                $name = "../views/error.php";
                include $controllers;
                die;
            }
        } else {
            $name = "../views/error.php";
            include $controllers;
            die;
        }
        $page = "../controllers/" . $name . '/' . $name . '.php';
        include_once $page;

        /* set Class Controller  */
       
        switch ($name) {
            case 'SiteController':
                $controller = new SiteController();
                break;
            case 'UserController':
                $controllers = new UserController();
                break;  
            case 'DetailController':
                 $controllers = new DetailController();
                break;
            case 'ReportController':
                 $controllers = new ReportController();
                break;
            
            default :
                $controller = new SiteController();
                break;
        }
        $pag = isset($_GET['views']) ? $_GET['views'] : "index";

        if (preg_match($regex, $pag)) {
            $view = $web->checkPage($pag, $name);
        } else {
            $name = "../views/error.php";
            require $name;
            die;
        }
        include_once $view;
        ?>
    </body>
</html>
