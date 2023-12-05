<?php
class Product
{
    private $id;
    private $title;
    private $image;

    function __construct($id, $title, $image)
    {
        $this->id = $id;
        $this->title = $title;
        $this->image = $image;
    }

}
?>