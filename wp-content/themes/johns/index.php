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

    <div id="cursor">
        <div id="cursor-wrapper"></div>
    </div>

    <header>
        <!-- Kubens element -->
        <div class="container">
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

        <div id="starttext">
            <div id="textanim1">
            </div>
            <h1 id="star">✧</h1>
            <div id="textanim2">
                <h1 id=" d">d</h1>
                <h1 class="e">e</h1>
                <h1 id="s">s</h1>
                <h1 class="i">i</h1>
                <h1 id="g">g</h1>
                <h1 id="n">n</h1>
                <h1 class="e">e</h1>
                <h1 class="r">r</h1>
            </div>
        </div>
        <h2 id="webdesignux">WEB, DESIGN, UX.</h2>

    </header>

    <nav>
        <div class="progress-bar"></div>
        <ul>
            <!--ska stå php innan och efter echo get_home_url();-->
            <!-- <li><a href="/wordpresstest/about">About</a></li> -->
            <button onclick="SendToWork()">My Work</button>
            <button onclick="SendToAbout()">About</button>
        </ul>

    </nav>
    <div id="designbar"></div>
    <div class="perspectivewrapper">
        <div id="perspectiveattempt">
            <div id="left">🍔</div>
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
            <div id="right">🍔</div>
        </div>
        <div class="connector"></div>
        <section id="accolades">
            <div class="awards">
                <ul>
                    <!-- <h2>Golden Pixel Award for Best UI/UX Design - 2015</h2>
        <br>
        <h2>CodeCraft Innovator of the Year - 2017</h2>
        <br>
        <h2>Interactive Excellence Award - 2020</h2>
        <br>
        <h2>The CSS Wizard Trophy - 2021</h2>
        <br>
        <h2>Creative Code Artistry Medal - 2021</h2> -->

                    <li>Golden Pixel Award for Best UI/UX Design - 2015</li>
                    <br>
                    <li>CodeCraft Innovator of the Year - 2017</li>
                    <br>
                    <li>Interactive Excellence Award - 2020</li>
                    <br>
                    <li>The CSS Wizard Trophy - 2021</li>
                    <br>
                    <li>Creative Code Artistry Medal - 2021</li>

                </ul>
            </div>

            <div class="container">
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
        </section>
    </div>
    <!-- <div id="designbar2"></div> -->


    <!-- <section id="accolades">
        <div class="awards">
    <ul>
        <li>Golden Pixel Award for Best UI/UX Design - 2015</li>
        <br>
        <li>CodeCraft Innovator of the Year - 2017</li>
        <br>
        <li>Interactive Excellence Award - 2020</li>
        <br>
        <li>The CSS Wizard Trophy - 2021</li>
        <br>
        <li>Creative Code Artistry Medal - 2021</li>
        
    </ul>
        </div>
        
        <div class="container">
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
    </section> -->








    <div class="horizontalscrollwrapper">

        <div class="horizontalscroll">
            <h2>John Schürer</h2>
            <h2>Expedient</h2>
            <h2>Expedient</h2>
            <h2>Expedient</h2>
        </div>

    </div>


    <div class="spacemaker"></div>

    <div class="windowwrapper">
        <div class="window">
        </div>
    </div>

    <div class="spacemaker"></div>


    <section id="mywork">
        <h2>POSTS</h2>

        <!-- <div class="post"> -->
        <!-- Start the Loop. -->
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <div class="post">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_field('content'); ?></p>
                    <p><?php the_field('megatext'); ?></p>
                    <?php $image = get_field('image'); ?>


                    <!-- <img id="arrowsvg" src="wp-content\themes\johns\img\reshot-icon-arrow-upward-V2XFR4EU7Z.svg" alt=""> -->
                    <?php if ($image != NULL) { ?>
                        <img src="<?php echo $image; ?>">
                    <?php } ?>

                </div>
            <?php endwhile;
        else: ?>
            <!-- </div> -->

            <!-- The very first "if" tested to see if there were any Posts to -->
            <!-- display.  This "else" part tells what do if there weren't any. -->
            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>


            <!-- REALLY stop The Loop. -->
        <?php endif; ?>
    </section>





    <footer>
        <div class="repsonsivehelper">
            <div class="outerring1"></div>
            <div class="outerring1"></div>
            <div class="outerring1"></div>
            <div class="outerring1"></div>
        </div>
        <div class="outerring1"></div>
        <div class="outerring1"></div>
        <button>
            <h2 id="hirebutton"><a href="mailto:john.schurervw@gmail.com">Let's talk!</a></h2>
        </button>
        <div class="outerring2"></div>
        <div class="outerring2"></div>
        <div class="repsonsivehelper">
            <div class="outerring2"></div>
            <div class="outerring2"></div>
            <div class="outerring2"></div>
            <div class="outerring2"></div>
        </div>
    </footer>

    <div id="endingdesign"></div>

    <script src="wp-content\themes\johns\script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
</body>

</html>