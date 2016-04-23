<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" type="text/css" />
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my_menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand"><Brand/></a>
                    </div>
                    <div class="navbar-collapse collapse" id="my_menu">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url();?>index.php/categories/home">Home</a></li>

                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Category<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url();?>index.php/categories/create">Add Category</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/categories/index">View Category</a></li>
                                </ul>
                            </li> 
                           
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-lock"></span> Login</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        </ul>
                    </div>

                </nav>
            </div>

          

            <div class="row">
                <div class="col-md-12" style="height: 35px;background-color: black;">
                    <p style="text-align: center;color: white;margin-top: 5px;">Developed By : Micron-Techno</p>
                </div>
            </div>

        </div>
        <script src="<?php echo base_url();?>bootstrap/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
