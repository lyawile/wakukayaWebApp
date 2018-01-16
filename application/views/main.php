<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WAKUKAYA WEB APPLICATION</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                        <a class="nav-link" href="#">Register <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="col-sm-12">
            <div class="row col-sm-10 offset-1 window">
                <div class="col-md-3 commands">
                    <!--the commands go here-->
                </div>
                <div class="col-md-9">
                    <?php if(isset($message)) echo $message; ?>
                    <?php echo form_open('member/register') ?>
                    <div class="form-row">
                        <?php ?>

                        <div class="form-group col-md-4">
                            <?php
                            $data = form_error('firstname');
                            if (isset($data) && $data !== "") {
                                ?>
                                <?php echo '<label for="firstname" style="color: red;">' . $data . '</label>';
                            } else {
                                ?>
                                <?php echo '<label for="firstname">First Name</label> ';
                            }
                            ?>
                            <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo set_value('firstname'); ?>" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-4">
                            <?php
                            $data1 = form_error('middlename');
                            if (isset($data1) && $data1 !== "") {
                             ?>
                             <?php echo '<label for="firstname" style="color: red;">' . $data1 . '</label>';
                            } else {
                             ?>
                            <?php echo '<label for="firstname">Middle Name</label> ';
                            }
                            ?>
                            <input type="text" class="form-control" id="middlename" name="middlename" value="<?php echo set_value('middlename'); ?>" placeholder="Middle Name">
                        </div>
                        <div class="form-group col-md-4">
                            <?php
                            $data2 = form_error('surname');
                            if (isset($data2) && $data2 !== "") {
                            ?>
                             <?php echo '<label for="surname" style="color: red;">' . $data2 . '</label>';
                            } else {
                            ?>
                            <?php echo '<label for="sur">Surname(Optional)</label> ';
                            }
                            ?>
                            <input type="text" class="form-control" id="surname" name="surname" value="<?php echo set_value('surname'); ?>" placeholder="Surname">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="gender">Gender</label>
                            <select class="form-control col-md-4" id="gender" name="gender">
                                <option value="male">Male       </option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <?php
                            $data = form_error('phonenumber');
                            if (isset($data) && $data !== "") {
                            ?>
                            <?php echo '<label for="firstname" style="color: red;">' . $data . '</label>';
                            } else {
                            ?>
                            <?php echo '<label for="firstname">Phone Number</label> ';
                            }
                            ?>
                            <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo set_value('phonenumber'); ?>" placeholder="Phone number">
                        </div>
                        <div class="form-group col-md-4">
                            <?php
                            $data = form_error('email');
                            if (isset($data) && $data !== "") {
                            ?>
                            <?php echo '<label for="firstname" style="color: red;">' . $data . '</label>';
                            } else {
                            ?>
                            <?php echo '<label for="firstname">Email Address</label> ';
                            }
                            ?>
                            <input type="email" class="form-control" id="email" value="<?php echo set_value('email') ?>" name="email"  placeholder="Email Address">
                        </div>

                    </div>
                    <div class="">
                        <label for="picture">Upload Picture(Optional)</label>
                        <input type="file" class="form-control" id="picture"/>
                    </div>
                    <div style="margin-top: 30px;">
                        <button type="submit" name="register" class="btn btn-primary">Register</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>