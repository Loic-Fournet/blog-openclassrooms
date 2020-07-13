<?php
namespace Blog\src\DAO;
use Blog\src\model\Post;

class PostDAO extends DAO
{
    private function buildObject($row)
    {
        $post = new Post();
        $post->setId($row['id']);
        $post->setTitle($row['title']);
        $post->setFirstText($row['first_text']);
        $post->setContent($row['content']);
        $post->setAuthor($row['author']);
        $post->setDatePost($row['date_post']);
        $post->setPicture($row['picture']);
        $post->setCategory($row['category']);
        return $post;
    }

    public function getPosts()
    {
        $sql = 'SELECT id , title , first_text , content, author, date_post, picture, category FROM post ORDER BY id DESC';
        $result = $this->createQuery($sql);
        $posts = [];
        foreach ($result as $row)
        {
            $postId = $row['id'];
            $posts[$postId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $posts;
    }

    public function getPost($postId)
    {
        $sql = 'SELECT id , title , first_text , content , author , date_post , picture , category  FROM Post WHERE id = ?';
        $result = $this->createQuery($sql, [$postId]);
        $post = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($post);
    }
}