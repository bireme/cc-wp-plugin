<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php _e('VHL Network Directory', 'cc'); ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo CC_PLUGIN_URL; ?>template/css/style.css">
	<link rel="stylesheet" href="<?php echo CC_PLUGIN_URL; ?>template/css/accessibility.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,900" rel="stylesheet">

    <?php if ($cc_config['google_analytics_code'] != ''): ?>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', '<?php echo $cc_config['google_analytics_code'] ?>']);
      _gaq.push(['_setCookiePath', '/<?php echo $cc_plugin_slug ?>']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <?php endif; ?>

</head>
<body>

<!-- Topo -->
<section id="barAcessibilidade">
	<div class="container">
		<div class="row">
			<div class="col-md-6" id="acessibilidadeTutorial">
				<a href="#main_container" tabindex="1">Conteúdo Principal <span class="hiddenMobile">1</span></a>
				<a href="#nav" tabindex="2">Menu <span class="hiddenMobile">2</span></a>
				<a href="#fieldSearch" tabindex="3" id="accessibilitySearch">Busca <span class="hiddenMobile">3</span></a>
				<a href="#footer" tabindex="4">Rodapé <span class="hiddenMobile">4</span></a>
			</div>
			<div class="col-md-6" id="acessibilidadeFontes">
				<a href="#!" id="fontPlus"  tabindex="5">+A</a> |
				<a href="#!" id="fontNormal"  tabindex="6">A</a> |
				<a href="#!" id="fontLess"  tabindex="7">-A</a> |
				<a href="#!" id="contraste"  tabindex="8"><i class="fas fa-adjust"></i> Alto Contraste</a> <!--|
				<a href="#" id="acessibilidade" class="" tabindex="9" href="docAcessibilidade.php"><i class="fas fa-wheelchair"></i> Accessiblity</a-->
			</div>
		</div>
	</div>
</section>	<!-- Topo -->

<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-3" id="logo">
				<a href="index.php"><img src="http://logos.bireme.org/img/pt/bvs_color.svg" alt="" class="img-fluid imgBlack" ></a>
			</div>
			<div class="col-md-9">
				<div id="titleMain" class="float-left">
					<div class="titleMain1"><?php _e('VHL Network Directory', 'cc'); ?></div>
				</div>
				<div class="lang">
					<ul>
						<li><a href="" class="active">português</a></li>
						<li><a href="">español</a></li>
						<li><a href="">english</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
				<div class="headerSearch" >
					<form action="<?php echo real_site_url($cc_plugin_slug); ?>/search">
                        <input type="hidden" name="lang" id="lang" value="<?php echo $lang; ?>">
						<div class="row">
							<div class="col-md-10 inputBoxSearch">
								<input type="text" name="q" id="fieldSearch" placeholder="<?php _e('Search', 'cc'); ?>">
								<a id="speakBtn" href="#"><i class="fas fa-microphone-alt"></i></a>
							</div>
							<div class="col-md-2 btnBoxSearch">
								<button type="submit">
									<i class="fas fa-search"></i>
									<span class="textBTSearch"><?php _e('Search', 'cc'); ?></span>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</header>
