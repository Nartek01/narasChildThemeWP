<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<title>Title</title>
	<!-- Header -->
	<?php get_header();?>
</head>

<body>

	<div id="wrap">
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1><?php single_cat_title('Visar poster för: ',true)?></h1>
							<?php while(have_posts()){ ?>
							<article>
								<?php the_post();?>
								<img src="<?php the_post_thumbnail();?>">
									<h2 class="title">
									<a href="<?php the_permalink();?>"><?php the_title();?></a>
								</h2>
								<p><?php the_excerpt();?></p>
							</article>
							<?php }?>
							<?php the_posts_pagination()?>
						</div>
					</div>
				</div>
			</section>
		</main>
		<!-- Footer -->
		<?php get_footer();?>
	</div>
</body>

</html>