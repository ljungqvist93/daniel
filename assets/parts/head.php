<?php include 'color.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<?php if(empty($post)): ?>
			<title>Cyberlad</title>
		<?php endif; ?>

		<link rel="stylesheet" href="https://cyberlad.com/lazyframz/style.css" type="text/css" />
		<?php if(!empty($subpage)): ?>
			<link rel="stylesheet" href="../assets/style/style.css" type="text/css" />
		<?php endif; ?>
		<link rel="stylesheet" href="assets/style/style.css" type="text/css" />
    	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    	<script src="https://kit.fontawesome.com/1c430c8111.js" crossorigin="anonymous"></script>
    	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,900|Roboto+Slab:400,900&display=swap" rel="stylesheet" />
    	<link rel="icon" href="assets/media/favicon.png" type="image/gif" sizes="16x16">

    	<meta data-n-head="true" name="viewport" content="width=device-width, initial-scale=1"/>

    	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-90622404-5"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-90622404-5');
		</script>


	    <?php if(empty($post)): ?>
			</head>
		<?php endif; ?>

		<?php if(!empty($post)): ?>
			<?php include 'posthead.php'; ?>
		<?php endif; ?>

		<?php include 'colorIncluder.php'; ?>