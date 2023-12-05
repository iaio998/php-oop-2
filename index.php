<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Model/Product.php";
$prod = Product::fetchAll();
?>

<main>
    <div class="container">
        <section>Section</section>
        <div class="row justify-content-center">
            <?php foreach ($prod as $item) {
                $item->printCard();
            } ?>
        </div>
    </div>
</main>

<?php
include __DIR__ . "/Views/footer.php";
?>