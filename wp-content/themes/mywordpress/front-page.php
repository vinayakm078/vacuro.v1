                   <?php get_header(); ?>
                     <?php
                     if(have_posts()):
                        while(have_posts()):the_post();?>
                    <div class="banner">
                        <?php the_post_thumbnail();?>
                    </div>
                    <div class="warning">
                          <div class="container padding">
                            <div class="row">
                              <div class="col-lg-2 col-sm-2">
                                    <img  class="img-responsive triangle" src="<?php  the_field('left_col')?>">
                              </div>
                                <div class="col-lg-8 col-sm-8">
                                 <h3 class="center"><?php the_field('heading') ?></h3>
                                 <h2 class="center"><?php the_field('sub-heading') ?></h2>
                                </div>
                              <div class="col-lg-2 col-sm-2">
                                      <img  class="img-responsive triangle" src="<?php  the_field('right_col')?>">
                              </div>  
                            </div>
                            <div class="row">
                              <div class="col-lg-6 col-sm-6">
                                <div class="para-right">
                                  <div class="para">
                                    <h3 class="greentext">
                                      <?php the_field('leftcolumnTitle')?></h3>
                                      <?php the_field('leftcolumntext')?>
                                  </div>
                              </div>
                              </div>
                                 <div class="col-lg-6 col-sm-6">
                                   <div class="para">
                                        <h3 class="greentext">
                                          <?php the_field('rightcolumntitle') ?></h3>
                                        <?php the_field('rightcolumntext')?>
                                </div>
                              </div>
                            </div>
                            <hr>    
                          </div>
                    </div>
                    		<?php endwhile; 
                    	        endif;
                    		?>
                    <?php get_footer();?>