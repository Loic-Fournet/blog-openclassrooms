
    <div class="container middel-container">
        <div class="row">
            <div class="col">
                <a href="../public/index.php?route=addArticle">Nouvel article</a><br/><br/>
            </div>
        </div>
        <div class="row">
            <?= $this->session->show('add_article'); ?>
            <?php
                foreach ($articles as $article)
                {
                    ?>
                    <article class="col blog-post">
                        <img src="../public/img/image-blogue.png" alt="image-blogue"/>
                        <h3><?= htmlspecialchars($article->getTitle());?></h3>
                        <p><?= htmlspecialchars($article->getFirstText());?></p>
                        <a class="next-blog-post" href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getid());?>">Lire la suite</a>
                    </article>
                    <?php
                }
            ?>
        </div>
    </div>

