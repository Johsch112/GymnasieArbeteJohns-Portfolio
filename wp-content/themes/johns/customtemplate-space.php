<?php
/*
 * Template Name: Space
 * Template Post Type: post
 */
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>SPACE template</h1>
<nav><ul>
    <li><a href="../index.php">HOME</a></li>
</ul></nav>
         <!-- Start the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <p><?php the_field('megatext'); ?></p>

    </div>
<?php endwhile; else : ?>
<?php endif; ?>


</body>
</html>