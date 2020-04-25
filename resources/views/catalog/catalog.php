<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . "/autoload.php";
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/views/inc/head.php"; ?>
<?php //include $_SERVER['DOCUMENT_ROOT'] . "/resources/views/inc/nav.php"; ?>
<?php

use app\User;

$user = new User();

?>
<style>
    .sidenav {
        width: 250px;
    }

    .catalog-sort {
        padding: 20px 10px !important;
        overflow-x: hidden;
    }

    input[type=search], nav form, .input-field {
        margin: 0;
    }

    ul {
        padding-left: 20px;
    }

    @media only screen and (min-width: 994px) {
        header, main, footer {
            margin-left: 250px;
        }
    }
</style>
<ul class="sidenav sidenav-fixed catalog-sort">
    <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/">Home</a></li>
    <h5>Filter</h5>
    <form action="?" method="get">
        <li class="search">
            <div class="search-wrapper input-field col s6">
                <input placeholder="Search" maxlength="30" id="name_product" name="name_product" type="text"
                       class="validate" value="<?php echo $_GET['name_product']; ?>">
            </div>
        </li>
        <li>
            <div class="input-field col s6">
                <select name="category_item">
                    <option value="" <?php echo @($_GET['category_item'] == "" ? 'selected' : ''); ?>>All</option>
                    <option value="purge"<?php echo @($_GET['category_item'] == "purge" ? 'selected' : ''); ?>>Purge
                    </option>
                    <option value="bag"<?php echo @($_GET['category_item'] == "bag" ? 'selected' : ''); ?>>Bag</option>
                    <option value="cup"<?php echo @($_GET['category_item'] == "cup" ? 'selected' : ''); ?>>Cup</option>
                </select>
            </div>
        </li>
        <li>
            <div class="input-field col s6">
                <input type="text"
                       maxlength="70"
                       class="js-range-slider"
                       id="range"
                       value=""/>

                <div class="row">
                    <div class="col s12 m6">
                        <input type="number"
                               class="form-control mt-3 mb-1"
                               id="price_one"
                               min="0"
                               max="2000"
                               name="from"
                               value="<?php echo(isset($_GET['from']) ? $_GET['from'] : '0'); ?>"/>
                    </div>
                    <div class="col s12 m6">
                        <input type="number"
                               class="form-control"
                               id="price_two"
                               min="0"
                               max="2000"
                               name="to"
                               value="<?php echo(isset($_GET['to']) ? $_GET['to'] : '2000'); ?>"/>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="row">
                <div class="col s12 m6">
                    <button class="waves-effect waves-brown waves-ripple btn-small" type="submit" name="action">Filter
                        <i class="material-icons right">send</i>
                    </button>
                </div>
                <div class="col s12 m6">
                    <a class="waves-effect waves-brown waves-ripple btn-small" href="?"
                       class="btn btn-primary">Reset</a>
                </div>
            </div>


        </li>
    </form>
</ul>
<main>
    <div class="row">
        <?php
        $name_product = $_GET['name_product'];
        $category_item = $_GET['category_item'];
        $from = $_GET['from'];
        $to = $_GET['to'];

        if (!empty($_GET)) {
            $item = $user->catalog($category_item, $from, $to, $name_product);
        } else {
            $item = $user->catalogAll();
        }

        while ($items = $item->fetch_assoc()) {
            ?>

            <div class="col s12 m6 l4 xl3" style="margin: 0; padding: 10px;">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" style="min-height: 300px;"
                             src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/public/img/goods/<?php echo $items['image']; ?>">
                    </div>
                    <div class="card-content">
                        <strong><p><?php echo $items['price']; ?>₴</p></strong>
                        <span class="card-title activator grey-text text-darken-4"><?php echo $items['title']; ?><i
                                        class="material-icons right">more_vert</i></span>

                    </div>
                    <div class="card-action">
                        <a href="<?php echo '/goods/' . $items['id']; ?>">Купить</a>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><?php echo $items['title']; ?><i
                                    class="material-icons right">close</i></span><br>
                        <span class="card-title grey-text text-darken-4"><?php echo $items['description']; ?></span><br>
                        <span class="card-title grey-text text-darken-4">
                                <b>Производитель:</b>
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
            </div>
        <?php } ?>
    </div>
</main>
<script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/public/js/sort.js" defer></script>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/views/inc/footer.php"; ?>

