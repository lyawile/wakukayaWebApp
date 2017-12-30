<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WAKUKAYA WEB APPLICATION</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="<?php echo base_url() ?>public/css/bootstrap.min.css" type="text/css" rel="stylesheet"/> 
        <link href="<?php echo base_url() ?>public/css/custom.css" type="text/css" rel="stylesheet"/> 
        <!--<link href="http://localhost:8080/wakukayaweb/public/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>--> 
        <!--<link href="http://localhost:8080/wakukayaweb/public/open-iconic/font/css/open-iconic.css" type="text/css" rel="stylesheet"/>-->
        <link href="<?php echo base_url() ?>public/font-awesome-4.7.0/css/font-awesome.min.css"/>
        <link href="http://localhost/wakukayawebApp/public/css/custom.css" type="text/css" rel="stylesheet"/> 
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
                    the commands go here
                </div>
                <div class="col-md-9">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="middlename">Middle Name</label>
                                <input type="text" class="form-control" id="middlename" placeholder="Middle Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="surname">Surname(Optional)</label>
                                <input type="text" class="form-control" id="surname" placeholder="Surname">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="gender">Gender</label>
                                <select class="form-control col-md-4" id="gender">
                                    <option>Male       </option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="phonenumber">Phone Number</label>
                                <input type="text" class="form-control" id="phonenumber" placeholder="Phone number">
                            </div>
                             <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email Address">
                            </div>
                            
                        </div>
                        <div class="">
                            <label for="picture">Upload Picture(Optional)</label>
                            <input type="file" class="form-control" id="picture"/>
                        </div>
                        <div style="margin-top: 30px;">
                        <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


</body>
</html>