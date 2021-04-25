<?php
    require_once("templates/header.php");

    if(isset($_GET["id"])){
        $postId = $_GET["id"];
        $currentPost;

        foreach ($posts as $post) {
            if($post["id"] == $postId){
                $currentPost = $post;
                break;
            }
        }
    }
?>
    
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost["title"]; ?></h1>
        <p id="post-description"><?= $currentPost["description"]; ?></p>
        <div class="img-container"><img src="<?= $BASE_URL; ?>/img/<?= $currentPost["img"]; ?>" alt="<?= $currentPost["description"] ?>"></div>
        <p class="post-content">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore tenetur quaerat eum incidunt totam ipsum quasi? Quis blanditiis eos odit ab doloribus tempora ut quod sapiente incidunt natus. Minima, ratione!
            Dolore magnam odio officia! Consectetur eveniet accusamus explicabo, omnis saepe suscipit et vero quaerat, possimus tenetur non laboriosam dicta corporis id provident architecto, porro repellat unde reiciendis dolore animi laudantium.
            Illum perferendis temporibus officia a quo tenetur laudantium ratione. Ex quaerat, et minus, ipsum tempore ab, facilis accusantium nesciunt fugit consequuntur voluptatum quasi eligendi neque labore dolorem nihil temporibus! Consectetur.
            Nostrum tempore ipsam sed aliquid eius laboriosam dolorem dicta quisquam cupiditate, id numquam explicabo veniam, ipsa, perferendis hic mollitia officiis inventore veritatis blanditiis enim magnam itaque dignissimos corrupti animi? Distinctio.
            Voluptates pariatur, illum, sapiente qui veritatis explicabo aliquam aut quisquam a vel reiciendis. Delectus, excepturi dignissimos. Minima, eveniet aliquam aperiam ratione velit veniam error quasi dicta deleniti et culpa iste!
            Qui ex a voluptates modi atque magnam aliquam debitis. Facilis quos voluptatibus beatae nisi nobis quaerat, corrupti rerum aspernatur quam sint ab repellat blanditiis perferendis reiciendis quasi necessitatibus recusandae quis.
            Eligendi, eveniet pariatur quaerat itaque nostrum quasi nihil id architecto vitae, aut illo voluptates quam, accusantium eius quas quod? Ullam, beatae reiciendis cumque voluptatem quia laboriosam libero quo quisquam illum.
            Quo provident veritatis quisquam facere atque soluta veniam voluptatibus adipisci fuga laboriosam ipsam, esse, reprehenderit odio iste ex iusto! Perferendis rem porro facere aperiam. Animi sed beatae reiciendis architecto consequuntur!
            Sed facilis sit praesentium tempore accusamus? Odio excepturi similique rem deserunt officiis nam nihil. Suscipit alias cumque earum atque quibusdam nisi autem excepturi consectetur rem quae, ipsam nam! Sint, est?
            Quod, consequatur. Cupiditate harum qui facilis delectus? Quibusdam nostrum sed saepe minima autem inventore cupiditate, corporis eveniet animi consectetur, porro nam maiores distinctio optio aliquam ab blanditiis eaque reiciendis amet.
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tags-list">
            <?php foreach ($post["tags"] as $tag) : ?>
               <li> <a href="#"><?= $tag ?></a></li>
            <?php endforeach;?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
               <li> <a href="#"><?= $category ?></a></li>
            <?php endforeach;?>
        </ul>
    </aside>
</main>


<?php
    require_once("templates/footer.php");
?>