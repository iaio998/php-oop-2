<?php
include __DIR__."/Product.php";
include __DIR__."/../Traits/DrawCard.php";
class Game extends Product {

    use DrawCard;

    public function __construct($id, $title, $quantity, $price) {
        parent::__construct($price, $quantity, $id, $title);

    }
    public function formatCard() {
        $prefix = "https://cdn.cloudflare.steamstatic.com/steam/apps/";
        $suffix = "/header.jpg";
        $elements = [

            'id' => $this->id,
            'title' => $this->title,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'img' => $prefix.$this->id.$suffix,
        ];
        return $elements;
    }
    public static function fetchAll() {
        $gamesString = file_get_contents(__DIR__.'/steam_db.json');
        $gamesList = json_decode($gamesString, true);
        $games = [];
        foreach($gamesList as $item) {
            $quantity = rand(0, 100);
            $price = rand(10, 100);
            $games[] = new Game($item['appid'], $item['name'], $quantity, $price);
        }
        return $games;
    }
}

?>