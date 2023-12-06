<?php
include __DIR__."/Views/header.php";
include __DIR__."/Model/Game.php";
$prod = Game::fetchAll();
?>

<main>
    <div class="container">
        <section>Games</section>
        <div class="row justify-content-center">
            <?php foreach($prod as $item) {
                $item->printCard($item->formatCard());
            } ?>
        </div>
    </div>
</main>

<?php
include __DIR__."/Views/footer.php";
?>