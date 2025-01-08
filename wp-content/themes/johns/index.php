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
        <div class="container">
            <!-- <img src="http://localhost:8080/wordpresstest/wp-content/uploads/2025/01/black-and-white-triangle-png-12-1.png" alt=""> -->

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



            <!-- <div class="cube">

                <div class="face top">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <div class="face bottom">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <div class="face left">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <div class="face right">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>

                <div class="face front">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>

                <div class="face back">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>

            </div> -->
            <!-- <img src="http://localhost:8080/wordpresstest/wp-content/uploads/2025/01/black-and-white-triangle-png-12.png" alt=""> -->
        </div>


        <div id="starttext">
            <div id="textanim1">
                <h1 id="c">C</h1>
                <h1 class="r">r</h1>
                <h1 class="e">e</h1>
                <h1 id="a">a</h1>
                <h1 id="t">t</h1>
                <h1 class="i">i</h1>
                <h1 id="v">v</h1>
                <h1 class="e">e</h1>
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

    <div id="perspectiveattempt">
        <div id="left"></div>
        <div id="middle">
            <h2>About</h2>
            <h2>I excel in programming, with a deep understanding of multiple languages, frameworks, and technologies.
                Whether working with front-end tools like HTML5, CSS3, and JavaScript or delving into back-end systems
                using Python, PHP, or Node.js, I have a proven ability to build scalable and efficient solutions.
                <br>
                <br>
                My
                grasp of modern programming paradigms, such as object-oriented programming and functional programming,
                allows me to write clean, maintainable code that stands the test of time.
            </h2>
        </div>
        <div id="right"></div>
    </div>

    <!-- <div id="designbar2"></div> -->


    <section id="accolades">
        <h2 class="award">My accolades</h2>
        <p class="award">I won best website</p>
        <p class="award">I won best website</p>
        <p class="award">I won best website</p>
        <p class="award">I won best website</p>
        <p class="award">I won best website</p>
        <p class="award">I won best website</p>
        <p class="award">I won best website</p>
    </section>



    <div class="spacemaker"></div>

    <div class="windowwrapper">
        <div class="window">
        </div>
    </div>

    <div class="spacemaker"></div>


    <section id="mywork">
        <h2>POSTS</h2>

        <div class="post">
            <!-- Start the Loop. -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_field('content'); ?></p>

                        <?php $image = get_field('image'); ?>
                        <img id="arrowsvg" src="wp-content\themes\johns\img\reshot-icon-arrow-upward-V2XFR4EU7Z.svg" alt="">
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
    </section>

    <div class="square"></div>

    <div id="endingdesign"></div>




    <footer>FOOTER</footer>


    <script src="wp-content\themes\johns\script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
</body>

</html>