<?php

namespace RetrievePost;

use PostQuery\PostQuery;

class RetrievePost extends PostQuery
{
    public $Posts;

    public function __construct($Posts)
    {
        $this->Posts = $Posts;
    }

    public function collectPost()
    {
        $getPost = new PostQuery($this->Posts);

        $getPost->getPost();
    }
}
