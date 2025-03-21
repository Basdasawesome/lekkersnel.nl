<?php

include_once '../template/components/header.php';

// $i = 0;
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
        renderHero("Vind jouw ideale smaakthema!", "https://images.pexels.com/photos/3756523/pexels-photo-3756523.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"); ?>
    </div>
    <div class="mt-16">
        <?php include '../template/components/card_small.php' ?>
    </div>
    
<?php include_once '../template/components/footer.php'; ?>
    