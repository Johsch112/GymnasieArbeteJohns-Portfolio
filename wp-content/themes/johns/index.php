<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspiring Brilliance</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="wp-content\themes\johns\style.css">
    <link rel="icon" href="http://localhost:8080/wordpresstest/wp-content/uploads/2025/01/thestar.jpg" type="image/png">
</head>

<body>
    <div class="center" id="cursor">
        <div id="cursor-wrapper"></div>
    </div>
    <header>
        <!-- Elements of the cube -->
        <div class="container center">
            <div class="cube">
                <div class="face top">
                </div>
                <div class="face bottom">
                </div>
                <div class="face left">
                </div>
                <div class="face right">
                </div>
                <div class="face front">
                </div>
                <div class="face back">
                </div>
            </div>
        </div>
        <!-- Styling for the title of the site -->
        <div id="starttext">
            <div id="textanim1">
            </div>
            <h1 id="star">✧</h1>
            <div id="textanim2">
                <h1 id="d">d</h1>
                <h1 class="e">e</h1>
                <h1 id="s">s</h1>
                <h1 class="i">i</h1>
                <h1 id="g">g</h1>
                <h1 id="n">n</h1>
                <h1 class="e">e</h1>
                <h1 class="r">r</h1>
            </div>
        </div>
        <h2 class="center">WEB, DESIGN, UX.</h2>
    </header>
    <!-- Navigation which sends users to certain elements -->
    <nav>
        <div class="sendbuttons">
            <button onclick="SendToWork()">My Work</button>
            <button onclick="SendToAbout()">About</button>
        </div>
    </nav>
    <div id="designbar"></div>
    <!-- Här sker all 3d styling -->
    <div class="perspectivewrapper">
        <div id="perspectiveattempt">
            <div class="center" id="left"></div>
            <div id="middleandbottom">
                <div id="middle">
                    <h2>About</h2>
                    <p>I excel in programming, with a deep understanding of multiple languages, frameworks, and
                        technologies.
                        Whether working with front-end tools like HTML5, CSS3, and JavaScript or delving into back-end
                        systems
                        using Python, PHP, or Node.js, I have a proven ability to build scalable and efficient
                        solutions.
                        <br>
                        <br>
                        My
                        grasp of modern programming paradigms, such as object-oriented programming and functional
                        programming,
                        allows me to write clean, maintainable code that stands the test of time.
                    </p>
                    <br>
                </div>
            </div>
            <div class="center" id="right"></div>
        </div>
        <div class="connector"></div>
        <!-- Shows some of my awards -->
        <section id="accolades">
            <h3>AWARDS</h3>
            <div class="awards">
                <ul>
                    <li>Golden Pixel Award for Best UI/UX Design - 2015 <br></li>
                    <li>CodeCraft Innovator of the Year - 2017 <br></li>
                    <li>Interactive Excellence Award - 2020 <br></li>
                    <li>The CSS Wizard Trophy - 2021 <br></li>
                    <li>Creative Code Artistry Medal - 2021 <br></li>
                </ul>
            </div>
            <div class="container center">
                <div class="cube">
                    <div class="face top"></div>
                    <div class="face bottom"></div>
                    <div class="face left"></div>
                    <div class="face right"></div>
                    <div class="face front"></div>
                    <div class="face back"></div>
                </div>
            </div>
        </section>
    </div>
    <!-- Styling for the horizontal scrolling effect using GSAP -->
    <div class="horizontalscrollwrapper">
        <div class="horizontalscroll">
            <h2>John</h2>
            <h2>Schürer</h2>
            <h2>von</h2>
            <h2>Waldheim</h2>
        </div>
    </div>
    <!-- Another GSAP animation which makes the window element grow on scroll -->
    <div class="windowwrapper center">
        <div class="window center">
            <h3>My experience</h3>
        </div>
    </div>

    <!-- Loop which goes through all my posts on wordpress database -->
    <section id="mywork">
        <!-- <div class="post"> -->
        <!-- Start the Loop. -->
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <div class="post center">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_field('content'); ?></p>
                    <p><?php the_field('megatext'); ?></p>
                    <?php $image = get_field('image'); ?>
                    <?php if ($image != NULL) { ?>
                        <img src="<?php echo $image; ?>">
                    <?php } ?>
                </div>
            <?php endwhile;
        else: ?>

            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </section>
    <!-- Footer containing a button which let's user quickly send a mail to my email, 
     also contains a responsive helper div which removes some half circles on smaller screens -->
    <footer>
        <div class="repsonsivehelper">
            <div class="outerring1"></div>
            <div class="outerring1"></div>
            <div class="outerring1"></div>
            <div class="outerring1"></div>
        </div>
        <div class="outerring1"></div>
        <div class="outerring1"></div>
        <h2 class="center" id="hirebutton"><a href="mailto:john.schurervw@gmail.com">Let's talk!</a></h2>
        <div class="outerring2"></div>
        <div class="outerring2"></div>
        <div class="repsonsivehelper">
            <div class="outerring2"></div>
            <div class="outerring2"></div>
            <div class="outerring2"></div>
            <div class="outerring2"></div>
        </div>
    </footer>
    <!-- Ending design with the star from the title to "close the loop" so to speak -->
    <div id="endingdesign"></div>
    <script src="wp-content\themes\johns\script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
</body>

</html>