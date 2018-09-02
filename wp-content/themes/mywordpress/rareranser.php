                              <?php /* Template Name: referenser */ ?>
                              <?php get_header(); ?>
                               <?php
                               if(have_posts()):
                                  while(have_posts()): the_post(); ?>
                                  <div class="col-lg-12">
                                  <div class="slide">
                        <div id="myCarousel"  class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                      <li data-target="#myCarousel" data-slide-to="3"></li>        
                       </ol> 
                  <div class="carousel-inner">
                     <div class="item active">
                       <div  class="slideimage" style="background-image:url(<?php the_field('img7')?>)"> 
                          <div class="caption"> 
                          <h2>DB SCHENKER</h2>
                          </div>
                        </div> 
                     </div>
                      <div class="item">
                         <div  class="slideimage" style="background-image:url(<?php the_field('img7')?>)"> 
                           <div class="caption">   
                            <h2>BY BOAT</h2>
                          </div>
                        </div> 
                        </div>
                      <div class="item">
                        <div  class="slideimage" style="background-image:url(<?php the_field('img7')?>)"> 
                          <div class="caption">
                          <h2>BY TRAIN</h2>
                          </div>
                        </div> 
                     </div>
                      <div class="item">
                        <div  class="slideimage" style="background-image:url(<?php the_field('img7')?>)"> 
                          <div class="caption">
                           <h2>TRUE FLEXIBILITY</h2>
                          </div>
                        </div>
                        </div> 
                     </div>              
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="leftarrow "><i class="fas fa-caret-left"></i></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <div class="rightarrow">
                          <div class="rightarrow"><i class="fas fa-caret-right"></i></div>
                        </div>
                      <span class="sr-only">Next</span>
                    </a>
                 </div> 
          </div>
                                        <div class="warning">
                                           <div class="row">
                                            <div class="col-lg-3 col-sm-3">
                                              <h3><?php the_field('leftheader')?></h3>
                                              <p><?php the_field('lefttext')?></p>
                                              </div>
                                              <div class="col-lg-9">
                                                <span class="smallarrows"><span class="rightangle"><i class="fas fa-angle-left"></i></span>
                                                <span class="leftangle"><i class="fas fa-angle-right"></i></span></span>
                                              <div class="slides_images">
                                                <img  class="img-responsive triangle" src="<?php  the_field('img1')?>">
                                                <img  class="img-responsive triangle" src="<?php  the_field('img2')?>">
                                                <img  class="img-responsive triangle" src="<?php  the_field('img3')?>">
                                                <img  class="img-responsive triangle" src="<?php  the_field('img4')?>">
                                                <img  class="img-responsive triangle" src="<?php  the_field('img5')?>">           
                                              </div>
                                              </div>
                                            </div>
                                            <?php endwhile; 
                                              endif;
                                            ?>
                                        <?php get_footer();?>