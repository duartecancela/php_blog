<?php

class Post
{

    private $date;
    private $title;
    private $content;
    private $category;

    /**
     * @param null $date
     * @param string $title
     * @param string $content
     * @param string $category
     */
    public function __construct($date, $title, $content, $category)
    {
        $this->date = $date;
        $this->title = $title;
        $this->content = $content;
        $this->category = $category;
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
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

}