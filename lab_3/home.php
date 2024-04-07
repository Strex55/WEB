<?php
$posts = [
    [
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'img_modifier' => 'static/images/vogels.jpg',
        'featured_img' => 'static/images/road_ahead.jpg',
        'author' => 'Mat Wogels',
        'date' => 'September 25, 2015'

    ],
    [
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'img_modifier' => 'static/images/wong.jpg',
        'featured_img' => 'static/images/fromtopdown.jpg',
        'author' => 'William Wong',
        'date' => 'September 25, 2015'
    ],
];
?>
<!DOCTYPE html>
<!-- <html lang="en"> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let`s do it together</title>
    <link rel="stylesheet" href="/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="container">
            <nav class="nav__top">
                <a href="#" class="logo">Escape.</a>
                <ul class="nav__ul">
                    <li><a href="#">HOME</a></li>
                    <li> <a href="#">CATEGORIES</a></li>
                    <li> <a href="#">ABOUT</a></li>
                    <li> <a href="#">CONTACT</a></li>
                </ul>
            </nav>
        </div>

    </header>
    <main>
        <section class="main__post">
            <div class="container">
                <h1 class="cite__main">Let`s do it together</h1>
                <h2 class="cite__second">We travel the world in search of stories. Come along for the ride.</h2>
                <button class="cite__third">View Latest Posts</button>
            </div>
        </section>
        <section>
            <div class="container">
                <nav class="nav__main">
                    <ul class="nav__ul">
                        <li><a href="#">Nature</a></li>
                        <li><a href="#">Photography</a></li>
                        <li><a href="#">Relaxation</a></li>
                        <li><a href="">Vacation</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Adventure</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section class="featured__posts">
            <div class="container">
                <p class="featured__posts--title">Featured Posts</p>
                <article class="featured">
                    <?php
                    foreach ($posts as $post) {
                        include 'post_preview.php';
                    }
                    ?>

                    <!-- <div class="featured__post">
                        <img class="roadahead--img" src="images/road_ahead.jpg" alt="roadahead">
                        <div class="roadahead">
                            <p class="cite__featured--1">The Road Ahead</p>
                            <p class="cite__featured--2">The road ahead might be paved - it might not be.</p>
                            <div class="postby">
                                <img class="author__img--featured" src="images/vogels.jpg" alt="vogels">
                                <p class="author__featured">Mat Wogels</p>
                                <p class="data__featured">September 25, 2015</p>
                            </div>
                        </div>
                    </div>
                    <div class="featured__post">
                        <img class="fromtopdown__img" src="images/fromtopdown.jpg" alt="fromtopdown">
                        <div class="fromtopdown">
                            <a class="adventure" href="#">ADVENTURE</a>
                            <p class="cite__featured--1">From Top Down</p>
                            <p class="cite__featured--2">Once a year, go someplace you’ve never been before.</p>
                            <div class="postby">
                                <img class="author__img--featured" src="images/wong.jpg" alt="wong">
                                <p class="author__featured">William Wong</p>
                                <p class="data__featured">September 25, 2015</p>
                            </div>
                        </div>
                    </div> -->
                </article>
            </div>
        </section>

        <section class="most__recent">
            <div class="container">
                <p class="most__recent--title">Most Recent</p>
                <article class="recent">
                    <div class="recent__post">
                        <img class="recent__img" src="images/standingtall.jpg" alt="standingtall">
                        <p class="cite__recent--1">Still Standing Tall</p>
                        <p class="cite__recent--2">Life begins at the end of your comfort zone.</p>
                        <div class="recent__footer">
                            <img class="author__img" src="images/wong.jpg" alt="wong">
                            <p class="author__recent">William Wong</p>
                            <p class="data__recent">9/25/2015</p>
                        </div>
                    </div>
                    <div class="recent__post">
                        <img class="recent__img" src="images/sunnyside.jpg" alt="sunnyside">
                        <p class="cite__recent--1">Sunny Side Up</p>
                        <p class="cite__recent--2">No place is ever as bad as they tell you it’s going to be.</p>
                        <div class="recent__footer">
                            <img class="author__img" src="images/vogels.jpg" alt="vogels">
                            <p class="author__recent">Mat Wogels</p>
                            <p class="data__recent">9/25/2015</p>
                        </div>
                    </div>
                    <div class="recent__post">
                        <img class="recent__img" src="images/waterfalls.jpg" alt="waterfalls">
                        <p class="cite__recent--1">Water Falls</p>
                        <p class="cite__recent--2">We travel not to escape life, but for life not to escape us.</p>
                        <div class="recent__footer">
                            <img class="author__img" src="images/vogels.jpg" alt="vogels">
                            <p class="author__recent">Mat Wogels</p>
                            <p class="data__recent">9/25/2015</p>
                        </div>
                    </div>
                    <div class="recent__post">
                        <img class="recent__img" src="images/mist.jpg" alt="mist">

                        <p class="cite__recent--1">Through the Mist</p>
                        <p class="cite__recent--2">Travel makes you see what a tiny place you occupy in the world.</p>
                        <div class="recent__footer">
                            <img class="author__img" src="images/wong.jpg" alt="wong">
                            <p class="author__recent">William Wong</p>
                            <p class="data__recent">9/25/2015</p>
                        </div>
                    </div>
                    <div class="recent__post">
                        <img class="recent__img" src="images/awaken.jpg" alt="awaken">
                        <p class="cite__recent--1">Awaken Early</p>
                        <p class="cite__recent--2">Not all those who wander are lost.</p>
                        <div class="recent__footer">
                            <img class="author__img" src="images/vogels.jpg" alt="vogels">
                            <p class="author__recent">Mat Wogels</p>
                            <p class="data__recent">9/25/2015</p>
                        </div>
                    </div>
                    <div class="recent__post">
                        <img src="images/tryitalways.jpg" alt="tryitalways">
                        <p class="cite__recent--1">Try it always</p>
                        <p class="cite__recent--2">The world is a book, and those who do not travel read only one page.
                        </p>
                        <div class="recent__footer">
                            <img class="author__img" src="images    /vogels.jpg" alt="vogels">
                            <p class="author__recent">Mat Wogels</p>
                            <p class="data__recent">9/25/2015</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <footer class="footer">
        <section class="nav__bottom--bg">
            <div class="container">
                <nav class="nav__bottom">
                    <a href="#" class="logo">Escape.</a>
                    <ul class="nav__ul">
                        <li><a href="#">HOME</a></li>
                        <li> <a href="#">CATEGORIES</a></li>
                        <li> <a href="#">ABOUT</a></li>
                        <li> <a href="#">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </footer>
</body>

</html>