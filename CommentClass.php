<?php

class CommentClass
{
    private $post_id = null;
    private $date = null;
    private $content = "";
    private $stars = 0;

    /**
     * @param null $date
     * @param string $content
     * @param int $stars
     */
    public function __construct($post_id, $date, $content, $stars)
    {
        $this->post_id = $post_id;
        $this->date = $date;
        $this->content = $content;
        $this->stars = $stars;
    }

}