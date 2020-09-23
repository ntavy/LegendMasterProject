
<div class="cart-list">
    <?php
    $subTotal = 0;
    if(!empty($_SESSION["cart_items"])){
        foreach ($_SESSION["cart_items"] as $itemKey => $itemVal) {
            $subTotal += $itemVal["quantity"] * $itemVal["salePrice"];
            ?>
            <div class="product-item-card clearfix">
                <div class="card-item-image">
                    <a><img src="<?php echo dirname($_SERVER['PHP_SELF']) . '/uploads/' . $itemVal['imagePath'] ?>"  alt="<?php echo $itemVal['proName']; ?>">
                    </a></div>
                <div class="card-item-body">
                    <h5><?php echo $itemVal['proName']; ?></h5>
                    <p><b>Size:</b> <?php echo $itemVal['sizePerPack'] ?></p>
                    <p><b>Price:</b> <?php echo number_format($itemVal['salePrice'], 2, '.','') ?></p>
                    <div><b>Quantity:</b> <input name="cardQuantity" id="cardQuantity" type="number" value="<?php echo $itemVal['quantity'] ?>" ></div>
                    <p></p>
                </div>
                <div class="card-item-action"><a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/shopping-cart/processCart/remove/' . $itemVal['proCode'] ?>">Remove</a></div>
            </div>
            <?php
        }
        ?>
        <div class="card-item-total">Subtotal: <span class="">$<?php echo $subTotal;?></span> </div>
        <a class="btn btn-primary btn-legend" id="checkoutBtn" href="<?php echo dirname($_SERVER['PHP_SELF']) . '/shipping-address' ?>" >CHECKOUT</a>
        <?php
    }else{
        ?>
        <h1>Your Shopping Cart is Empty</h1>
        <p></p>
        <a class="btn btn-primary btn-legend" href="<?php echo dirname($_SERVER['PHP_SELF']) . '/shopping' ?>">Continue Shopping</a>

    <?php
    }
    ?>
</div>
