<?php

class Comment extends Database
{
    public function getCommentsFromArticle($articleId)
    {
        $sql = 'SELECT id, author, content, date_comment FROM comment WHERE post_id = ? ORDER BY date_comment DESC';
        return $this->createQuery($sql, [$articleId]);
    }
}