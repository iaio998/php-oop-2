<?php
include __DIR__ . "/Game.php";
class Product extends Game
{
    private $id;
    private $title;

    function __construct($id, $title)
    {
        $this->id = $id;
        $this->title = $title;

    }
    public function printCard()
    {
        $id = $this->id;
        $title = $this->title;
        include __DIR__ . "/../Views/card.php";
    }
    public static function fetchAll()
    {
        $games = Game::fetchAll();
        $products = [];
        foreach ($games as $item) {
            $products[] = new Product($item[$item->id], $item['name']);
        }

    }
}
?>