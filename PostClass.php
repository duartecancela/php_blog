<?php

class PostClass
{
    private $date = null;
    private $title = "";
    private $content = "";
    private $category = "";

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

}