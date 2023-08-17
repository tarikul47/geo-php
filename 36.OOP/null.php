<?php

/**
 * Null safe operator 
 */
class Post
{
    public function __construct(private int $id)
    {
    }

    public function getTitle()
    {
        return "Post Title {$this->id}";
    }
}

function getPost(int $id)
{
    return new Post($id);
}

$post = getPost(40);
echo $post->getTitle();
