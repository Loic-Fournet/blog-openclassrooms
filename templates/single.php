<?php
require '../vendor/autoload.php';
use Blog\src\DAO\PostDAO;
use Blog\src\DAO\CommentDAO;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

    <?php
    $post = new PostDAO();
    $posts = $post->getPosts($_GET['postId']);
    $post = $posts->fetch()
    ?>

  <title>Loic Fournet -  <?= htmlspecialchars($post->title);?></title>

  <!-- Bootstrap core CSS -->
  <link href="../public/css/bootstrap.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link rel="stylesheet" href="https://use.typekit.net/gqr7yue.css">


  <!-- Custom styles for this template -->
  <link href="../public/css/loicfournet.css" rel="stylesheet">

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body>
<div id="sideNavigation" class="sidenav">
  <nav>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul>
      <li><a href="blog.php">Accueil</a></li>
        <li><a href="#">Parcours</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
</div>
<div class="topnav">
  <a href="#" onclick="openNav()">
    <svg width="25" height="25" id="icoOpen">
      <path d="M0,5 30,5" stroke="#000" stroke-width="2"/>
      <path d="M0,14 30,14" stroke="#000" stroke-width="2"/>
      <path d="M0,23 30,23" stroke="#000" stroke-width="2"/>
    </svg>
  </a>
</div>
<div id="main">
  <div class="container-fluid">
    <header class="header-post">
      <a href="#" class="brand"><img src="../public/img/logo-site.png" arial-role="image" alt="Loïc Fournet"/></a>
    </header>
  </div>
  <div class="container post-pictures" style="background-image: url(../public/img/image-blogue.png)"/>
  </div>
  <div class="container middel-container">
    <div class="row">
       <article class="col">
           <p>dans <i> <?= htmlspecialchars($post->category);?></i> par <?= htmlspecialchars($post->author);?>  le <?= htmlspecialchars($post->date_post);?></i></p>
           <h2> <?= htmlspecialchars($post->title);?></h2>
           <p><?= htmlspecialchars($post->first_text);?> <p>
           <p><?= htmlspecialchars($post->content);?> <p>
           <?php
            $posts->closeCursor();
           ?>
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
                  $comment = new CommentDAO();
                  $comments = $comment->getCommentsFromPost($_GET['postId']);
                  while($comment = $comments->fetch())
                  {
                      ?>
                      <article class="comment">
                          </p>Par <strong><?= htmlspecialchars($comment->author);?></strong> le <i><?= htmlspecialchars($comment->date_comment);?></i></p>
                          <p><?= htmlspecialchars($comment->content);?></p>
                      </article>
                      <?php
                  }
                  $comments->closeCursor();
              ?>
          </div>
      </div>
  </div>
  <div class="container-fluid footer-container">
    <footer>
      <div class="footer-motif">
        <div class="container social-container">
          <ul>
            <li><a class="fa fa-facebook-f" href="https://www.facebook.com/Loïc-Fournet-Direction-Artistique-Développement-146429086041959"></a></li>
            <li><a class="fa fa-instagram" href="https://www.instagram.com/fournetloic"></a></li>
            <li><a class="fa fa-linkedin" href="https://www.linkedin.com/in/loic-fournet"></a></li>
          </ul>
        </div>
      </div>
      <div class="orange-container">
          <p>À propos de conseil en communication, de site Internet, de branding, d'e-commerce, d'édition, et de développement.</p>
          <a href="Mentions-legales.html">Mentions Légales</a>
      </div>
    </footer>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../public/js/bootstrap.js"></script>
<script>
  function openNav() {
    document.getElementById("sideNavigation").style.width = "350px";
    document.getElementById("main").style.marginLeft = "-350px";
  }
  function closeNav() {
    document.getElementById("sideNavigation").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }
</script>

</body>
</html>
