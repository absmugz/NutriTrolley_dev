<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>




        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
        <?php foreach ($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>
        <style type='text/css'>
            body
            {
                font-family: Arial;
                font-size: 14px;
             
                padding-bottom: 40px;
            }


            .sidebar-nav {
                padding: 9px 0;
            }
            a {
                color: blue;
                text-decoration: none;
                font-size: 14px;
            }
            a:hover
            {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
      <div class="container-fluid">  
        <div class="navbar navbar-inverse">
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".subnav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <a class="brand" href="#">NutriTrolley</a>
                  <div class="nav-collapse subnav-collapse">
                    <ul class="nav">
                      <li class="active"><a href="#">Home</a></li>
                      <li><a href='<?php echo site_url('examples/recipe_management') ?>'>Recipes</a></li>
                      <li><a href='<?php echo site_url('examples/recipe_category_management') ?>'>Recipe Categories</a></li>
                      
                    </ul>
                    <ul class="nav pull-right">
 
                      <li class="divider-vertical"></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php print $this->session->userdata('username'); ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li> <a href="#">  <i class="icon-user"></i>  Profile</a></li>
             
                          <li class="divider"></li>
                          <li><a href="<?php echo site_url('admin/user/logout');?>">  <i class="icon-off"></i>  Log Out</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div><!-- /navbar -->
      </div>
       


        <div class="container">

            <?php echo $output; ?>

        </div> <!-- /container -->


    </body>
</html>
