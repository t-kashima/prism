<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <?php if (isset($title)) { ?>
        <title><?php echo $title; ?> - PukiWiki</title>
    <?php } else { ?>
        <title>PukiWiki</title>
    <?php } ?>
    <link rel="stylesheet" href="<?php echo url_for('public/css/screen.css') ?>" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo url_for('public/css/style.css') ?>" type="text/css" media="screen, projection" />
  </head>
  <body>
    <?php echo $content ?>
  </body>
</html>
