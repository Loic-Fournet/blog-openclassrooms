
    <div class="container middel-container">
        <div class="row">
            <?php
                foreach ($posts as $post)
                {
                    ?>
                    <article class="col blog-post">
                        <img src="../public/img/image-blogue.png" alt="image-blogue"/>
                        <h3><?= htmlspecialchars($post->getTitle());?></h3>
                        <p><?= htmlspecialchars($post->getFirstText());?></p>
                        <a class="next-blog-post" href="../public/index.php?route=post&postId=<?= htmlspecialchars($post->getid());?>">Lire la suite</a>
                    </article>
                    <?php
                }
            ?>
        </div>
    </div>

