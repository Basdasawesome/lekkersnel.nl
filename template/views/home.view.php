<?php

include_once '../template/components/header.php';

?>

<?php include_once '../template/components/heroHome.php' ?>

    <div class="mt-16">
        <?php include_once '../template/components/card_medium.php'; ?>
    </div>
    <div class="mt-16">
        <?php include_once '../template/components/card_small.php'; ?>
    </div>
    <div class="mt-16">
        <?php include_once '../template/components/hero.php';
        renderHero("Vind hier alle thema's voor je favoriete gerechten", "../img/hero.png"); ?>
    </div>
    <div class="mt-16">
        <?php include '../template/components/card_small.php' ?>
    </div>
    
<?php include_once '../template/components/footer.php'; ?>
    