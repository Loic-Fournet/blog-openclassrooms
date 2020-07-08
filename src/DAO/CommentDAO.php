<?php
    namespace Blog\src\DAO;
    class CommentDAO extends DAO
    {
        public function getCommentsFromPost($postId)
        {
            $sql = 'SELECT id, author, content, date_comment FROM comment WHERE post_id = ? ORDER BY date_comment DESC';
            return $this->createQuery($sql, [$postId]);
        }
    }
