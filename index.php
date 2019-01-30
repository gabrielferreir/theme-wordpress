<!doctype html>
<html lang="pt-br" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Theme</title>

    <?php wp_head(); ?>
</head>
<body>

<header>
    <h2>Bem Vindo</h2>
    <?php do_action('my_action'); ?>
    <button onclick="">My Action</button>
</header>


<?php wp_footer(); ?>

</body>
</html>