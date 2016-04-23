<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Category</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" type="text/css" />
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
                            <li><a href="<?php echo base_url(); ?>index.php/categories/home">Home</a></li>

                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Category<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>index.php/categories/create">Add Category</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/categories/index">View Category</a></li>
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
                <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>index.php/categories/update_category" method="post">
                    <div class="col-md-offset-3 col-md-6 col-md-offset-3" style="height: 350px;background-color: #ebebeb;">
                        <div class="row">
                            <h3 align="center">Update Category Form</h3><hr>
                        </div>
                        <div class="form-group">
                            <label for="category_code" class="control-label col-md-5">Category Code</label>
                            <div class="col-md-6">
                                <input type="text" name="category_code" class="form-control" id="category_code" required="" value="<?php echo $category_info->category_code;
; ?>"/>
                                <input type="hidden" name="category_id" class="form-control" value="<?php echo $category_info->id;
; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category_name" class="control-label col-md-5">Category Name</label>
                            <div class="col-md-6">
                                <input type="text" name="category_name" class="form-control" id="category_name" required="" value="<?php echo $category_info->category_name; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="quantity" class="control-label col-md-5">Quantity</label>
                            <div class="col-md-6">
                                <input type="number" name="quantity" class="form-control" id="quantity" required="" value="<?php echo $category_info->quantity; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-6 col-md-4">
                                <input type="submit" name="btn" class="btn btn-primary" value="Update Category" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-offset-4 col-md-4" style="color:green;"></label>
                        </div>
                    </div>
                </form>
            </div><br>

            <div class="row">
                <div class="col-md-12" style="height: 35px;background-color: black;">
                    <p style="text-align: center;color: white;margin-top: 5px;">Developed By : Micron-Techno</p>
                </div>
            </div>

        </div>
        <script src="<?php echo base_url(); ?>bootstrap/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
