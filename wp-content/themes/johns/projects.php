<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="wp-content\themes\johns\style.css">
</head>

<body>
    <nav>
        <div class="progress-bar"></div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="/wordpresstest/about">About</a></li>
            <li><a href="/wordpresstest/about">knapp</a></li>
        </ul>

    </nav>

    <div id="cursor">
        <div id="cursor-wrapper"></div>
    </div>

    <header>
    </header>

    <div id="post">
        <!-- Start the Loop. -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <p><?php the_field('content'); ?></p>

                    <?php $image = get_field('image'); ?>
                    <?php if ($image != NULL) { ?>
                        <img src="<?php echo $image; ?>">
                    <?php } ?>
                </div>
            <?php endwhile;
        else : ?>
    </div>

    <!-- The very first "if" tested to see if there were any Posts to -->
    <!-- display.  This "else" part tells what do if there weren't any. -->
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>


    <!-- REALLY stop The Loop. -->
<?php endif; ?>


<footer>FOOTER</footer>
<script src="wp-content\themes\johns\script.js"></script>
</body>

</html>