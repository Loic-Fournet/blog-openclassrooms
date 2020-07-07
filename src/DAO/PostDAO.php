<?php
    namespace Blog\src\DAO;

    class PostDAO extends Database
    {
        public function getPosts()
        {
            $sql = 'SELECT id, title, first_text, content, author, date_post, category FROM post ORDER BY id DESC';
            return $this->createQuery($sql);
        }

        public function getPost($postId)
        {
            $sql = 'SELECT id, title, first_text, content, author, date_post, category FROM post WHERE id = ?';
            return $this->createQuery($sql,[$postId]);
        }
    }