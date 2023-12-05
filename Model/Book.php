<?php
include __DIR__ . "/Product.php";
class Book extends Product
{
    // public $prefix = "https://cdn.cloudflare.steamstatic.com/steam/apps/";
    // public $suffix = "/header.jpg";
    // protected $id;
    protected $img;
    public function __construct($id, $title, $quantity, $price, $img)
    {
        parent::__construct($price, $quantity, $id, $title);
        $this->img = $img;
    }
    public function printCard()
    {
        $id = $this->id;
        $title = $this->title;
        $quantity = $this->quantity;
        $price = $this->price;
        $img = $this->img;
        include __DIR__ . "/../Views/card.php";
    }

    public static function fetchAll()
    {
        $booksString = file_get_contents(__DIR__ . '/books_db.json');
        $booksList = json_decode($booksString, true);
        $books = [];
        foreach ($booksList as $item) {
            $quantity = rand(0, 100);
            $price = rand(10, 100);
            $books[] = new Book($item['_id'], $item['title'], $quantity, $price, $item['thumbnailUrl']);
        }
        return $books;
    }
}
?>