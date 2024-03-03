<?php extract($config) ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title><?=$title?></title>
 <link rel="stylesheet" href="<?=VIEW_SETTINGS['BOOTSTRAP_CSS']?>">
 <link rel="stylesheet" href="<?=VIEW_SETTINGS['GLOBAL_CSS']?>">
 <?php if ($css): ?>
  <link rel="stylesheet" href="<?=$css?>">
 <?php endif ?>
 <script defer src="<?=VIEW_SETTINGS['BOOTSTRAP_JS']?>"></script>
 <?php if ($js): ?>
  <script defer type="module" src="<?=$js?>"></script>
  <?php endif ?>
</head>
<body>
 
