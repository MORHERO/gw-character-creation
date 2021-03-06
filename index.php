<!DOCTYPE html>
<html>
<head>
	<title>CHARACTER CREATION</title>
	<meta charset="utf-8">
	<?php
		include 'templates/styles.php';
	?>
</head>
<body>
	<?php
		include 'templates/header.php';
		include 'templates/navigation.php';
	?>

	<main>
		<div class="inner">
			<div class="main-flex">

				<div class="master-slider-wrapper">

					<div module="master-slider">
						<?php
							include 'modules/slides/0_intro.php';
							include 'modules/slides/1_base.php';
							include 'modules/slides/2_attributes.php';
						?>
					</div>

				</div>

			</div>
		</div>
	</main>
	
	<?php
		include 'templates/footer.php';
		include 'templates/scripts.php';
	?>
</body>
</html>