<?php
$titulo_site = "Teste RGBA";
$descricao = "";
$imagem = share('site') . "/includes/imgs/logo.png";
$tags = '';
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo html_entity_decode($titulo_site); ?></title>
<meta property="og:title" content="<?php echo html_entity_decode($titulo_site); ?>" />
<meta property="og:description" content="<?php echo html_entity_decode($descricao); ?>" />
<meta property="og:image" content="<?php echo $imagem; ?>" />
<meta property="og:locale" content="pt_BR">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo share('share') ?>">
<meta property="og:site_name" content="<?php echo html_entity_decode($titulo_site); ?>">
<meta property="og:image:secure_url" content="<?php echo $imagem; ?>">
<meta property="og:image:alt" content="<?php echo html_entity_decode($titulo_site); ?>">
<meta property="og:image:type" content="image/png">
<meta name="title" content="<?php echo html_entity_decode($titulo_site); ?>" />
<meta name="description" content="<?php echo html_entity_decode($descricao); ?>" />
<meta name="format-detection" content="telephone=no">
<link rel="icon" type="image/png" href="" sizes="32x32" />
<link rel="icon" type="image/png" href="" sizes="16x16" />
<meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1, minimum-scale=1" />
<meta name="apple-mobile-web-app-capable" content="yes" />