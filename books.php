<?php
include __DIR__."/Views/header.php";
include __DIR__."/Model/Book.php";
$prod = Book::fetchAll();
?>

<main>
    <div class="container">
        <section>Books</section>
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