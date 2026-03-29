<?php
include_once("templates/header.php");
include_once("data/posts.php");
include_once("data/categories.php");


if (!empty($_GET['id'])) {

    $postId = $_GET['id'];
    $atualPost = [];

    foreach ($posts as $post) {

        if ($post['id'] == $postId) {
            $atualPost = $post;
        }
    }
}

?>


<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $atualPost['title'] ?></h1>
        <p id="post-description"><?= $atualPost['description'] ?></p>

        <div class="img-container">
            <img src="img/<?= $atualPost['img'] ?>" alt="<?= $atualPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem recusandae quia animi, impedit quisquam dicta optio pariatur. Doloremque tempora suscipit nobis qui quisquam dolor obcaecati laborum harum? Optio, ad consectetur.
            Soluta officiis tenetur porro rem eos saepe omnis nisi optio illo consequatur assumenda quam nihil iure tempore est maiores aliquam iusto modi, magnam consequuntur, nesciunt, repudiandae natus cumque odit. Autem?
            Excepturi eveniet dicta pariatur unde delectus eligendi consequatur amet error repellendus debitis, tenetur veniam atque dolores odio eaque quibusdam, illo corrupti sapiente quisquam! Quasi necessitatibus ab eligendi fugiat vel accusantium.
            Officiis harum placeat corporis obcaecati perspiciatis nisi quas aut eos explicabo, cum numquam quo laboriosam reiciendis! Soluta ut excepturi cumque facilis, dicta, magni vero enim architecto sapiente, voluptatem officia at?
            Exercitationem eius, quo expedita nihil eum voluptatibus ipsam ad inventore adipisci eveniet, ea, odit perspiciatis ullam ducimus! Rem, earum corporis molestias reprehenderit vel modi dignissimos eligendi, fuga inventore, ipsum unde!
        </p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem recusandae quia animi, impedit quisquam dicta optio pariatur. Doloremque tempora suscipit nobis qui quisquam dolor obcaecati laborum harum? Optio, ad consectetur.
            Soluta officiis tenetur porro rem eos saepe omnis nisi optio illo consequatur assumenda quam nihil iure tempore est maiores aliquam iusto modi, magnam consequuntur, nesciunt, repudiandae natus cumque odit. Autem?
            Excepturi eveniet dicta pariatur unde delectus eligendi consequatur amet error repellendus debitis, tenetur veniam atque dolores odio eaque quibusdam, illo corrupti sapiente quisquam! Quasi necessitatibus ab eligendi fugiat vel accusantium.
            Officiis harum placeat corporis obcaecati perspiciatis nisi quas aut eos explicabo, cum numquam quo laboriosam reiciendis! Soluta ut excepturi cumque facilis, dicta, magni vero enim architecto sapiente, voluptatem officia at?
            Exercitationem eius, quo expedita nihil eum voluptatibus ipsam ad inventore adipisci eveniet, ea, odit perspiciatis ullam ducimus! Rem, earum corporis molestias reprehenderit vel modi dignissimos eligendi, fuga inventore, ipsum unde!
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul class="tag-list">
            <?php foreach ($atualPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul class="categories-list">
            <?php foreach ($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>















<?php include_once("templates/footer.php"); ?>