<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<nav><ul>
    <li><a href="../index.php">HOME</a></li>
</ul></nav>
         <!-- Start the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div>
    <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
    <p><?php the_field('content'); ?></p>

    <?php $image = get_field('image'); ?>
    <?php if ($image != NULL) { ?>
        <img src="<?php echo $image; ?>">
    <?php } ?>
    <p><?php the_field('megatext'); ?></p>

    </div>
<?php endwhile; else : ?>
<?php endif; ?>
</body>
</html>