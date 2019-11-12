<?php get_header();?>

<div id="wrap">

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
				<?php the_widget(outWidgetsInit);?>
				</div>
			</form>
		</div>
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="city"> 
								<div class="text">
									<h1>Hej och välkommen!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<?php get_footer();?>
    </div>