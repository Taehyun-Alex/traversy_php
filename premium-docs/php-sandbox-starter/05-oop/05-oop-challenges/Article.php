<?php

class Article {
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content) {
        $this->title;
        $this->content;
    }

    public function publish() {
        $this->published = true;
    }

    public function isPublished() {
        return $this->published;
    }
}

$Article1 = new Article("Archie", "book");
$Article2 = new Article("Pooh", "book");
$Article1->publish();
echo var_dump($Article1->isPublished());
echo var_dump($Article2->isPublished());
