
  <div class="container post-pictures" style="background-image: url(../public/img/image-blogue.png)"/>
  </div>
  <div class="container middel-container">
    <div class="row">
       <article class="col">
           <p>dans <i> <?= htmlspecialchars($article->getCategory());?></i> par <?= htmlspecialchars($article->getAuthor());?>  le <?= htmlspecialchars($article->getDateArticle());?></i></p>
           <h2> <?= htmlspecialchars($article->getTitle());?></h2>
           <p><?= htmlspecialchars($article->getFirstText());?><p>
           <p><?= htmlspecialchars($article->getContent());?><p>
       </article>
    </div>
    <div class="row">
      <div class="col">
        <p>
          <br/><a class="next-blog-post" data-toggle="collapse" href="#collapseComment" role="button" aria-expanded="false" aria-controls="collapseComment">Écrire un commentaire</a>
        </p>
        <div class="clear"></div>
        <div class="collapse collapse-comment" id="collapseComment">
          <div class="card card-body container-post-comment">
            <p>Vous pouvez écrire un commentaire en remplissant les champs suivant.<br/> Votre courriel ne sera pas publié.</p>
            <form class="form-site" name="" method="post" action="single.php" role="form">
              <input type="text" class="input" name="name-oost-comment"  placeholder="Nom" required>
              <input type="text" class="input" name="email-post-comment"  placeholder="Courriel" required>
              <textarea class="input" name="message-post-comment"  placeholder="Message" required></textarea>
              <button class="valid-form-site">Envoyer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
      <div class="row">
          <div class="col comment-list">
              <h4 class="head-title">Derniers commentaires</h4>
              <?php
                  foreach($comments as $comment)
                  {
                      ?>
                      <article class="comment">
                          <p>Par <strong><?= htmlspecialchars($comment->getAuthor());?></strong> le <i><?= htmlspecialchars($comment->getDateComment());?></i></p>
                          <p><?= htmlspecialchars($comment->getContent());?></p>
                      </article>
                      <?php
                  }
              ?>
          </div>
      </div>
  </div>
