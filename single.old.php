<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php get_header();?>
    <title><?php get_title()?></title>
</head>

<body>
    <?php

    while(have_posts()){
        the_post();
        echo 'apa';
        the_title();
        echo 'banan';
        the_content();
        echo 'träd';
    }

    ?>
</body>
<?php get_footer();?>

</html>