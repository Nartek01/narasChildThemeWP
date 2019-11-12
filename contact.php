<?php 
/* 
Template Name: contact
*/
?>

<!DOCTYPE html>
<html dir="ltr" lang="sv">

<head>
	<meta charset="utf-8">
	<title></title>
	<meta content="initial-scale=1, width=device-width" name="viewport">
	<?php get_header();?>
</head>

<body>
	<main>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-8 col-md-offset-2">
						<h1>Kontakt</h1>
						<form>
							<label>Namn</label>
							<input type="text" />
							<label>E-post</label>
							<input type="email" />
							<label>Meddelande</label>
							<textarea></textarea>
							<input type="submit" value="Skicka" />
						</form>
					</div>
				</div>
			</div>
		</section>
	</main>
</body>
<?php get_footer();?>
</html>