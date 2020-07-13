
  <div class="container post-pictures" style="background-image: url(../public/img/image-blogue.png)"/>
  </div>
  <div class="container middel-container">
    <div class="row">
       <article class="col">
           <p>dans <i> <?= htmlspecialchars($post->getCategory());?></i> par <?= htmlspecialchars($post->getAuthor());?>  le <?= htmlspecialchars($post->getDatePost());?></i></p>
           <h2> <?= htmlspecialchars($post->getTitle());?></h2>
           <p><?= htmlspecialchars($post->getFirstText());?><p>
           <p><?= htmlspecialchars($post->getContent());?><p>
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
            <form class="form-site" name="" method="post" action="index.php" role="form">
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
                  foreach($comment as $comment)
                  {
                      ?>
                      <article class="comment">
                          </p>Par <strong><?= htmlspecialchars($comment->getAuthor());?></strong> le <i><?= htmlspecialchars($comment->getDateComment());?></i></p>
                          <p><?= htmlspecialchars($comment->getContent());?></p>
                      </article>
                      <?php
                  }
              ?>
          </div>
      </div>
  </div>
