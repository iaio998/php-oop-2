<?php
class Game
{
    // public $prefix = "https://cdn.cloudflare.steamstatic.com/steam/apps/";

    // public $suffix = "/header.jpg";
    private $id;
    private $title;
    function __construct($id, $title)
    {
        $this->id = $id;
        $this->title = $title;

    }

    public static function fetchAll()
    {
        $gamesString = file_get_contents(__DIR__ . '/steam_db.json');
        $gamesList = json_decode($gamesString, true);
        $games = [];
        foreach ($gamesList as $item) {
            $games[] = new Game($item['appid'], $item['name']);
        }
        return $games;
    }
}


?>