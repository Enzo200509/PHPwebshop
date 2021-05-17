<?php
include('core/header.php');
?>

<div class="titel-container">
    <h1>Producten overzicht</h1>
</div>
<div class="titel-container">
    <h2>buitenlampen</h2>
</div>

<section class="section-products">
    <?php
    $productsql = "SELECT product_id, product.name, price , category.name AS category FROM product INNER JOIN category on product.category_id = category.category_id WHERE category.name = 'buitenlamp' AND category.active = 1 AND product.active = 1";
    $productqry = $con->prepare($productsql);
    if ($productqry === false) {
        echo mysqli_error($con);
    } else {
        $productqry->bind_result($productID, $productName, $productPrice, $categoryNameProduct);
        if ($productqry->execute()) {
            $productqry->store_result();
            while ($productqry->fetch()) {
    ?>
                <a class="random-products-a" href="<?php echo BASEURL; ?>/product_detail.php?uid=<?php echo $productID ?>">
                    <div class="product-block">
                        <h3 class="id-hidden"><?php echo $productID ?></h3>
                        <h3><?php echo $productName ?></h3>
                        <p><?php echo '$', $productPrice ?></p>
                        <p><?php echo $categoryNameProduct ?></p>
                    </div>
                </a>
    <?php
            }
        }
        $productqry->close();
    }
    ?>

    <div class="titel-container">
        <h2>Designlampen</h2>
    </div>

    <?php

    $productsql = "SELECT product_id,product.name, price , category.name AS category FROM product INNER JOIN category on product.category_id = category.category_id WHERE category.name = 'designlamp' AND category.active = 1 AND product.active = 1";
    $productqry = $con->prepare($productsql);
    if ($productqry === false) {
        echo mysqli_error($con);
    } else {
        $productqry->bind_result($productID, $productName, $productPrice, $categoryNameProduct);
        if ($productqry->execute()) {
            $productqry->store_result();
            while ($productqry->fetch()) {
    ?>
                <a class="random-products-a" href="<?php echo BASEURL; ?>/product_detail.php?uid=<?php echo $productID ?>">
                    <div class="product-block">
                        <h3 class="id-hidden"><?php echo $productID ?></h3>
                        <h3><?php echo $productName ?></h3>
                        <p><?php echo '$', $productPrice ?></p>
                        <p><?php echo $categoryNameProduct ?></p>
                    </div>
                </a>
    <?php
            }
        }
        $productqry->close();
    }
    ?>

    <div class="titel-container">
        <h2>bureaulamp</h2>
    </div>

    <?php

    $productsql = "SELECT product_id ,product.name, price , category.name AS category FROM product INNER JOIN category on product.category_id = category.category_id WHERE category.name = 'bureaulamp' AND category.active = 1 AND product.active = 1";
    $productqry = $con->prepare($productsql);
    if ($productqry === false) {
        echo mysqli_error($con);
    } else {
        $productqry->bind_result($productID, $productName, $productPrice, $categoryNameProduct);
        if ($productqry->execute()) {
            $productqry->store_result();
            while ($productqry->fetch()) {
    ?>
                <a class="random-products-a" href="<?php echo BASEURL; ?>/product_detail.php?uid=<?php echo $productID ?>">
                    <div class="product-block">
                        <h3 class="id-hidden"><?php echo $productID ?></h3>
                        <h3><?php echo $productName ?></h3>
                        <p><?php echo '$', $productPrice ?></p>
                        <p><?php echo $categoryNameProduct ?></p>
                    </div>
                </a>
    <?php
            }
        }
        $productqry->close();
    }
    ?>

    <div class="titel-container">
        <h2>Tafellampen</h2>
    </div>

    <?php

    $productsql = "SELECT product.name, price , category.name AS category FROM product INNER JOIN category on product.category_id = category.category_id WHERE category.name = 'tafellamp' AND category.active = 1 AND product.active = 1";
    $productqry = $con->prepare($productsql);
    if ($productqry === false) {
        echo mysqli_error($con);
    } else {
        $productqry->bind_result($productName, $productPrice, $categoryNameProduct);
        if ($productqry->execute()) {
            $productqry->store_result();
            while ($productqry->fetch()) {
    ?>
                <a class="random-products-a" href="<?php echo BASEURL; ?>/product_detail.php?uid=<?php echo $productID ?>">
                    <div class="product-block">
                        <h3 class="id-hidden"><?php echo $productID ?></h3>
                        <h3><?php echo $productName ?></h3>
                        <p><?php echo '$', $productPrice ?></p>
                        <p><?php echo $categoryNameProduct ?></p>
                    </div>
                </a>
    <?php
            }
        }
        $productqry->close();
    }
    ?>




</section>

<?php
include('core/footer.php');
?>