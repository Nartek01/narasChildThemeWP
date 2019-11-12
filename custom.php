<?php 
/* 
Template Name: apa
*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title <?php get_title();?>></title>
	<?php get_header();?>
</head>
<body>
	<?php while(have_posts()){?>
		<?php the_post();?>
	<div id="wrap">
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1><?php the_title(); ?></h1>
							<p><?php the_content(); ?></p>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
	<?php }?>

	<?php get_footer();?>

</body>
</html>