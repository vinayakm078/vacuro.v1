                <?php /* Template Name: kontact */ ?>
                <?php get_header(); 
                ?>
                <div class="col-lg-12">
                   <div id="mapsection"> 
                    <?php the_field('mapsection');?>
                   </div>
                </div>
                <div class="contact">
                    <div class=container>
                        <div class="row">
                            <div class="col-lg-9">
                               <h3><?php the_field('leftcolumnheader');?></h3>
                                <?php the_field('leftcolumnpara');?>
                                <form class="myform" name="registration">
                                    <label for="name"><?php the_field('name_form')?></label>
                                    <input type="text" name="name" id="name" placeholder="Navn">
                                    <label for="email"><?php the_field('email_form')?></label>
                                    <input type="text" name="email" id="email" placeholder="Email">
                                    <label for="data"><?php the_field('melding_form')?></label>
                                    <textarea class ="inputspecial" name="data" id="data" placeholder="Melding"></textarea>
                                    <br>
                                   <button>Slett</button>
                                   <button>Send</button>
                                </form>
                            </div>
                            <div class="col-lg-3">
                                <h4><?php the_field('rightheader')?></h4>
                                <ul class="addresse">
                                 <?php the_field('righttext')?>
                              </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                get_footer();?>
