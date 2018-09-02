<?php /*Template name:produkter*/?>
<?php get_header();
if(have_posts()){
	the_post();
}
?>
<div class="productwrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 column">
				<div class="dh-container">
					<div class="img-wrap1" style="background-image:url(<?php the_field('leftimage')?>)"></div>
					<div class="dh-overlay"></div>
				</div>
				<h4><a href="index.html"><?php the_field('left_column_header')?></a></h4>
				<?php the_field('left_column_para')?>
			</div>
			<div class="col-sm column">
				<div class="dh-container">
					<div class="img-wrap2" style="background-image:url(<?php the_field('middleimage')?>"></div>
					<div class="dh-overlay"></div>
				</div>
				<h4><a href="index.html"><?php the_field('left_column_header')?></a></h4>
				<?php the_field('middle_column_para')?>
			</div>
			<div class="col-sm-4 column">
				<div class="dh-container">
					<div class="img-wrap1" style="background-image:url(<?php the_field('rightimage')?>)"></div>
					<div class="dh-overlay"></div>
				</div>
				<h4><a href="index.html"><?php the_field('right_column_header')?></a></h4>
				<?php the_field('right_column_para')?>
			</div>
		</div>
	</div>
</div>
<?php 
}
}
get_footer();?>