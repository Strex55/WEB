<?php
$posts = [
    [
        'id' => 1,
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'img_modifier' => 'static/images/vogels.jpg',
        'featured_img' => 'static/images/road_ahead.jpg',
        'author' => 'Mat Wogels',
        'date' => 'September 25, 2015'

    ],
    [
        'id' => 2,
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'img_modifier' => 'static/images/wong.jpg',
        'featured_img' => 'static/images/fromtopdown.jpg',
        'author' => 'William Wong',
        'date' => 'September 25, 2015'
    ],
];

$postRecent = [
    [
        'id' => 1,
        'title' => 'Still Standing Tall',
        'subtitle' => 'Life begins at the end of your comfort zone.',
        'img_modifier' => 'static/images/wong.jpg',
        'recent_img' => 'static/images/standingtall.jpg',
        'author' => 'William Wong',
        'date' => '9/25/2015',
    ],
    [
        'id' => 2,
        'title' => 'Sunny Side Up',
        'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
        'img_modifier' => 'static/images/vogels.jpg',
        'recent_img' => 'static/images/sunnyside.jpg',
        'author' => 'Mat Vogels',
        'date' => '9/25/2015',
    ],
    [
        'id' => 3,
        'title' => 'Water Falls',
        'subtitle' => 'We travel not to escape life, but for life not to escape us.',
        'img_modifier' => 'static/images/vogels.jpg',
        'recent_img' => 'static/images/waterfalls.jpg',
        'author' => 'Mat Vogels',
        'date' => '9/25/2015',
    ],
    [
        'id' => 4,
        'title' => 'Through the Mist',
        'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
        'img_modifier' => 'static/images/wong.jpg',
        'recent_img' => 'static/images/mist.jpg',
        'author' => 'William Wong',
        'date' => '9/25/2015',
    ],
    [
        'id' => 5,
        'title' => 'Awaken Early',
        'subtitle' => 'Not all those who wander are lost.',
        'img_modifier' => 'static/images/vogels.jpg',
        'recent_img' => 'static/images/awaken.jpg',
        'author' => 'Mat Vogels',
        'date' => '9/25/2015',
    ],
    [
        'id' => 6,
        'title' => 'Try it Always',
        'subtitle' => 'The world is a book, and those who do not travel read only one page.',
        'img_modifier' => 'static/images/vogels.jpg',
        'recent_img' => 'static/images/tryitalways.jpg',
        'author' => 'Mat Vogels',
        'date' => '9/25/2015',
    ]
]
    ?>

<!DOCTYPE html>
<!-- <html lang="en"> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let`s do it together</title>
    <link rel="stylesheet" href="/static/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
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

                </article>
            </div>
        </section>
        <section class="most__recent">
            <div class="container">
                <p class="most__recent--title">Most Recent</p>

                <?php
                foreach ($postRecent as $post) {
                    include 'post_recent.php';
                }
                ?>

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