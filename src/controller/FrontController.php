<?php

namespace Blog\src\controller;

class FrontController extends controller
{
    public function blog()
    {
        $articles = $this->articleDAO->getArticles();
        return $this->view->render('blog', [
            'articles' => $articles
        ]);
    }

    public function article($articleId)
    {
        $article = $this->articleDAO->getArticle($articleId);
        $comments = $this->commentDAO->getCommentsFromArticle($articleId);
        return $this->view->render('single', [
            'article' => $article,
            'comments' => $comments
        ]);
    }
}