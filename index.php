<!doctype html>
<html lang="fr">

<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Site de Lilian Soler</title>
	<link rel="stylesheet" type="text/css" href="https://didelo.fr/css/index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php include("php/script.php"); ?>
</head>

<body>
	<div class='tout'>
		<?php include("php/newHeader.php"); ?>
		<?php include("php/section.php"); ?>
		<?php include("php/user_nbr_live.php"); ?>
		<p><a style='color:white;' href="https://paypal.me/LilianSoler?locale.x=fr_FR">Soutenir le créateur</a>
		<p>
	</div>
	<?php include("php/newSocial.php"); ?>

	<!-- 728x90_btf  Leader board-->
	<ins data-zone="234867" class="byadthink"></ins>
	<script type="text/javascript" async src="//ad.adxcore.com/adjs_r.php?async&what=zone:234867&inf=no"></script>



	<p id="php"><?php include("php/ip.php"); ?></p>
	<script>
		setInterval('load_messages()', 1500);

		function load_messages() {
			$('#message').load('Php/footer.php');
		}
	</script>
</body>

</html>