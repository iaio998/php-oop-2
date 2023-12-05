<?php
class Product
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
        $gamesString = file_get_contents(__DIR__ . '/steam_db.json');
        $gamesList = json_decode($gamesString, true);
        $games = [];
        foreach ($gamesList as $item) {
            $games[] = new Product($item['appid'], $item['name']);
        }
        return $games;
    }
}
?>