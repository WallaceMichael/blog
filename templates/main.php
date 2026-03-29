<main>
    <div id="title-container">
        <h1>Blog gata verde</h1>
        <p>O seu blog de programação</p>
    </div>
    <div id="posts-container">
        <?php foreach ($posts as $post): ?>
            <div class="post-box">
                <img src="img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                <div class="tags-container">
                    <?php foreach ($post['tags'] as $tag): ?>
                        <a href="#"><?= $tag ?></a>
                    <?php endforeach; ?>
                </div>
                <h2 class="post-title">
                    <a href="post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                </h2>
                <p class="post-description"><?= $post['description'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>