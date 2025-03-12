<?php

require_once __DIR__ . '/../../src/helpers/auth.php';
checkAuth();

include_once '../template/components/header.php';
echo $_SESSION['user_id'] . PHP_EOL;
echo $_SESSION['username'];
// extract($data);
// var_dump($database, $favorieten);
$i = 0;
?>

<?php include '../template/components/hero.php'; ?>

    <div class="mt-16">
        <?php include_once '../template/components/card_medium.php'; ?>
    </div>
    <div class="mt-16">
        <?php include_once '../template/components/card_small.php'; ?>
    </div>
    <div class="mt-16">
        <?php include '../template/components/hero.php'; ?>
    </div>
    <div class="mt-16">
        <?php include '../template/components/card_small.php' ?>
    </div>
    
<?php include_once '../template/components/footer.php'; ?>
    