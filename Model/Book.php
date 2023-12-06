<?php
include __DIR__."/Product.php";
include __DIR__."/../Traits/DrawCard.php";
class Book extends Product {
    use DrawCard;
    protected $img;
    public function __construct($id, $title, $quantity, $price, $img) {
        parent::__construct($price, $quantity, $id, $title);
        $this->img = $img;
    }
    public function formatCard() {
        $elements = [
            'id' => $this->id,
            'title' => $this->title,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'img' => $this->img,
        ];
        return $elements;
    }
    public static function fetchAll() {
        $booksString = file_get_contents(__DIR__.'/books_db.json');
        $booksList = json_decode($booksString, true);
        $books = [];
        foreach($booksList as $item) {
            $quantity = rand(0, 100);
            $price = rand(10, 100);
            $books[] = new Book($item['_id'], $item['title'], $quantity, $price, $item['thumbnailUrl']);
        }
        return $books;
    }
}
?>