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
        <link href="<?php echo base_url() ?>public/font-awesome-4.7.0/css/font-awesome.min.css"
              <link href="http://localhost/wakukayawebApp/public/css/custom.css" type="text/css" rel="stylesheet"/> 
    </head>
    <body>
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

        <div class="col-sm-10 offset-1 window">
            <div class="row row-items" style="">
                <div class="col-sm-3 commands">
                    the commands go here
                </div>
                <div class="col-sm-9">
                    <div class="col-sm-12 title">
                        Please supply Your details:
                    </div>
                    <form class="">
                        <div class="form-group">
                            <label class=""> </label>
                            <input type="text" name="firstname" class="form-control" placeholder="Enter First name"/>
                        </div>
                        <div class="form-group">
                            <label class="sr-only">Middle name</label>
                            <input type="text" name="middlename" class="form-control" placeholder="Enter Middle name"/>
                        </div>
                        <div>
                            <label class="sr-only">Surname</label>
                            <input type="text" name="surname" class="form-control" placeholder="Enter Surname"/>
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div>
                            <label class="sr-only">Surname</label>
                            <input type="text" name="surname" class="form-control" placeholder="Enter Phone number"/>
                        </div>
                        <div>
                            <label class="sr-only">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email address"/>
                        </div>
                        <input class="form-control" type="file" name="pic" />
                        <button type="submit" class="btn btn-outline-primary"> Submit  </button>
                        

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


</body>
</html>