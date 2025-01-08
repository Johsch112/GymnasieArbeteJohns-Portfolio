<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="wp-content\themes\johns\style.css">
    <link rel="icon" href="http://localhost:8080/wordpresstest/wp-content/uploads/2025/01/thestar.jpg" type="image/png">
</head>
<body>

<nav><ul>
    <li><a href="../index.php">HOME</a></li>
</ul></nav>
         <!-- Start the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div>
    <h1><?php the_title(); ?></h1>
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