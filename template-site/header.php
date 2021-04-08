<?php
$mainFolder = "/testergb";

function share($type)
{
  $url = "";

  if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $http = "https://";
  } else {
    $http = "http://";
  }

  if ($type == "share") {
    $url = $http . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  } else if ($type == "site") {
    $url = $http . $_SERVER['HTTP_HOST'];
  }
  return $url;
}
?>

<!doctype html>
<html class="no-js" lang="pt-br">

<head>

  <?php include "meta-tags.php"; ?>

  <link type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

  <link type="text/css" href="<?php echo $mainFolder; ?>/includes/css/app.min.css" rel="stylesheet">
</head>

<body>