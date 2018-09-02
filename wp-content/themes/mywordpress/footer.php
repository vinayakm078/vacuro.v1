<!-- bottom section -->
      <div class="bottom">
           <div class="container">
              <div class="row">
                 <div class="col-lg-2 col-sm-3">
                    <?php dynamic_sidebar('footer-widget-area-4');?>
                   <!--  <h4>Usefull Links</h4>
                    <ul class="usefulllinks">
                      <li><img class="pdflogo" src="<?php// echo get_bloginfo('template_directory');?>/images/pdf.png">Holder - Faresedler</li>
                      <li><img class="pdflogo" src="<?php //echo get_bloginfo('template_directory');?>/images/pdf.png"><a href="pdf/DocWrap_produkt2a.pdf" target="_blank">Holder - Transport dokumenterr</a></li>
                    </ul> -->
                 </div>
                 <div class="col-lg-3 col-sm-3">
                   <?php dynamic_sidebar('footer-widget-area-1' );?>       
                 </div>
                  <div class="col-lg-3 col-sm-3">
                    <?php dynamic_sidebar('footer-widget-area-3')?>
                  </div>
                  <div class="col-lg-3 col-sm-3 addre">
                   <?php dynamic_sidebar('footer-widget-area-2' );?>      
                </div>
              </div>
          </div>    
      </div>
      <!-- bottom section end -->
      <div class="bottom-footer">
        <nav class="navbar navbar-default">
           <!--<div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
              <ul class="nav navbar-nav">
         <!--    <li><a href="index.html">Vacuro </a></li>
                <li><a href="om_oss.html">Om-oss</a></li>
                <li><a href="produkter.html">Producter</a></li>
                <li><a href="rareranser.html">Rereranser</a></li>
                <li><a href="kontact.html">Konkatakt</a></li>
                <li><a href="#">IPR</a></li>  -->
                <?php wp_nav_menu( array('menu'=> 'footer','menu_class' => 'nav navbar-nav')); ?>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><?php echo get_theme_mod('bottom_right_section_headline') ?></a></li>
              </ul>
                <div class="bottom-arrow">
                  <a  class="arro" href="#">
                   <i class="fa fa-chevron-up"></i>
                  </a>          
                </div>
              </div>
          </div>
        </nav>
      </div>
      <!-- 
       <script src="jscript/jquery-2.0.0.min.js"></script>

       <script type="text/javascript"  src="jscript/bootstrap.min.js"></script>

      <script type="text/javascript" src="jscript/vacuro.js"></script> -->
      <?php wp_footer(); ?>
      </body>
      </html>
