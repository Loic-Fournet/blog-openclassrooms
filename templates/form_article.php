<?php
//Si l'article existe on fait par la route à édit article en lui passans l'identifiant.
$route = isset($article) && $article->getId() ? 'editArticle&articleId='.$article->getId() : 'addArticle';
$title = isset($article) && $article->getTitle() ? htmlspecialchars($article->getTitle()) : '';
$author = isset($article) && $article->getAuthor() ? htmlspecialchars($article->getAuthor()) : '';
$category = isset($article) && $article->getCategory() ? htmlspecialchars($article->getCategory()) : '';
$first_text = isset($article) && $article->getFirstText() ? htmlspecialchars($article->getFirstText()) : '';
$content = isset($article) && $article->getContent() ? htmlspecialchars($article->getContent()) : '';
$picture = isset($article) && $article->getContent() ? htmlspecialchars($article->getPicture()) : '';

?>

<form method="post" action="../public/index.php?<?= $route; ?>">
    <label for="title">Titre</label><br>
    <input type="text" id="title" name="<?= $title;?>"><br>
    <label for="author">Auteur</label><br>
    <input type="text" id="author" name="<?= $author; ?>"><br>
    <label for="author">Category</label><br>
    <input type="text" id="category" name="<?= $category; ?>"><br>
    <label for="title">Châpo</label><br>
    <textarea type="text" id="first_text" name="<?= $first_text; ?>"></textarea><br>
    <label for="content">Contenu</label><br>
    <textarea id="content" name="<?= $content; ?>"></textarea><br>
    <label for="author">Visuel</label><br>
    <input type="text" id="picture" name="<? $picture; ?>"><br>
    <input type="submit" value="Envoyer" id="submit" name="submit">
</form>