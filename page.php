<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title <?php get_title();?>></title>
	<?php get_header();?>
</head>
<body>

	<div id="wrap">
		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>title</h1>
							<p>content</p>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<ul class="side-menu">
								<li>
									<a href="undersida.html">Undersida</a>
								</li>
								<li>
									<a href="undersida2.html">Undersida 2</a>
								</li>
								<li>
									<a href="undersida3.html">Undersida 3</a>
								</li>
								<li>
									<a href="undersida4.html">Undersida 4</a>
								</li>
							</ul>
						</aside>
					</div>
				</div>
			</section>
		</main>
	</div>

	<?php get_footer();?>

</body>
</html>