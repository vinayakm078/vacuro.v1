<?php /*Template Name"OmOSS"*/?>
<?php getheader();?>
if (have_posts()){
while(have_posts()){
the_post(); 
?>
<div class="aboutus">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<?php the_content();?>
			</div>
			<div class="col-lg-3">
			</div>
		</div>
	</div>
</div>
<div class="test" id="test_ajax">
</div>
<?php
}
}
get_footer();?>