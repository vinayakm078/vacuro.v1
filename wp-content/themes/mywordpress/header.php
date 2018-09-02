<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php bloginfo('name')?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <div class="border">
  <div class="arrow-down"></div>
  <div class="sitelogo">
     <div class="container">
             <div class="row">
             	<div class="col-lg-9">
               <a class="navbar-brand mybrand" href="index.html">
                  <img class="img-responsive" alt="Brand" src="<?php echo get_theme_mod('themeslug_logo'); ?>">
               </a>
               </div> 
             <div class="col-lg-3">
          	 <a class="flag" href="index.html">
                <img class="img-circle" alt="Brand" src="<?php echo get_bloginfo('template_directory');?>/images/flag.png">
             </a>
          </div>
      </div>
    </div>
  </div> 
 </div>   
<br>
<!-- navbar Section start -->
            <div class="navigator">
              <nav class="navbar navbar-default">
                <div class="container">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>  
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggsling -->
                  <div class="menusection">
                  <div class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <?php wp_nav_menu( array('menu'=> 'header')); ?>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                 </div>
                </div>
              </nav>
            </div>
