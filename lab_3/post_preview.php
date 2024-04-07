<div class="featured__post">
    <img class="roadahead--img" src=<?= $post['featured_img'] ?> alt=<?= $post['author'] ?>>
    <div class="roadahead">
        <p class="cite__featured--1"><?= $post['title'] ?></p>
        <p class="cite__featured--2"><?= $post['subtitle'] ?></p>
        <div class="postby">
            <img class="author__img--featured" src=<?= $post['img_modifier'] ?> alt=<?= $post['author'] ?>>
            <p class="author__featured"><?= $post['author'] ?></p>
            <p class="data__featured"><?= $post['date'] ?></p>
        </div>
    </div>
</div>