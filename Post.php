<?php

class Post
{

    private $date;
    private $title;
    private $content;
    private $category_id;

    /**
     * @param null $date
     * @param string $title
     * @param string $content
     * @param string $category_id
     */
    public function __construct($date, $title, $content, $category_id)
    {
        $this->date = $date;
        $this->title = $title;
        $this->content = $content;
        $this->category_id = $category_id;
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * @return string
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param string $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

}