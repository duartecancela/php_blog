<?php

class Comment
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

    /**
     * @return null
     */
    public function getPostId()
    {
        return $this->post_id;
    }

    /**
     * @param null $post_id
     */
    public function setPostId($post_id)
    {
        $this->post_id = $post_id;
    }

    /**
     * @return null
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param null $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return int
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * @param int $stars
     */
    public function setStars($stars)
    {
        $this->stars = $stars;
    }

}