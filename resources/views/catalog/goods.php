<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . "/autoload.php";
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/views/inc/head.php"; ?>
<?php //include $_SERVER['DOCUMENT_ROOT'] . "/resources/views/inc/nav.php"; ?>

<?php

use app\User;

$user = new User();

$id = $_GET['id'];
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/views/inc/head.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/views/inc/nav.php"; ?>

    <div class="container">
        <div class="row">
            <?php
            $item = $user->catalogItem($id);
            while ($items = $item->fetch_assoc()) {
            ?>
            <h3><?php echo $items['title']; ?></h3>
            <div class="col s12 m16 l6 xl6">
                <img class="materialboxed" width="650"
                     src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/public/img/goods/<?php echo $items['image']; ?>">

                <span class="card-title activator grey-text text-darken-4"></span>
                <strong><p sty><?php echo $items['price']; ?>₴</p></strong>
        </div>


        <div class="col s12 m12 l6 xl6">
            <div class="card-panel">
                <span class="grey-text text-darken-4"><?php echo $items['description']; ?></span><br/>
                <span class="grey-text text-darken-4"><b>Производитель:</b>
                        <?php
                        if ($items['grade'] == 1) {
                            echo 'Украина';
                        } else {
                            echo 'Китай';
                        }
                        ?>
                    </span>
            </div>
        </div>
        <?php } ?>
    </div>
    </div>
    <style>
        nav {
            background-color: var(--main-color) !important;
        }
    </style>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/views/inc/footer.php"; ?>