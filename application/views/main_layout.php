<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WAKUKAYA WEB APPLICATION</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<link href="../../public/css/bootstrap3.3.7.min.css" rel="stylesheet" type="text/css"/>-->
        <link href="<?php echo base_url() ?>public/css/bootstrap.min.css" type="text/css" rel="stylesheet"/> 
        <link href="<?php echo base_url() ?>public/css/custom.css" type="text/css" rel="stylesheet"/> 
    </head>
    <body>
        <?php
        $size = 8;
        ?>

        <div class="container-fluid">
            <div class="row main-top">
                <div class="col-sm-4 logo">
                    <nav class="navbar-brand"  >
                        <a class="applyW" href="">WAKUKAYA</a>
                    </nav> 
                </div>
                <div class="col-sm-8 user-panel-links">
                    <ul>
                        <li class="applyW"><span class="fa fa-user"></span> </li>
                        <li class="applyW">Hello Hassan Lyawile <span class="applyW">|</span></li>
                        <li class="applyY"><a href="">Settings</a> <span class="applyW">|</span></li>
                        <li class="applyY"><a href="">Logout</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <?php echo anchor('member/home', 'Register', 'class="nav-link"'); ?>
                    </li>
                    <li class="nav-item">
                        <?php echo anchor('member/dashboard', 'Dashboard', 'class="nav-link"'); ?>
                    </li>
                </ul>
            </div>
        </nav>

        <?php $this->load->view($content); ?>

    </body>
</html>