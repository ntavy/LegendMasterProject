
<div class="cart-list">
    <?php
    $subTotal = 0;
    if(!empty($_SESSION["cart_items"])){
        foreach ($_SESSION["cart_items"] as $itemKey => $itemVal) {
            $subTotal += $itemVal["quantity"] * $itemVal["salePrice"];
            $changeUrl =  SITE_URL . '/shopping-cart/processCart/change/' . $itemVal['proCode'];
            ?>
            <div class="product-item-card clearfix">
                <div class="card-item-image">
                    <a><img src="<?php echo SITE_URL . '/uploads/' . $itemVal['imagePath'] ?>"  alt="<?php echo $itemVal['proName']; ?>">
                    </a></div>
                <div class="card-item-body">
                    <h5><?php echo $itemVal['proName']; ?></h5>
                    <p><b>Size:</b> <?php echo $itemVal['sizePerPack'] ?></p>
                    <p><b>Price:</b> <?php echo number_format($itemVal['salePrice'], 2, '.','') ?></p>
                    <p><label for="cardQuantity"><b>Quantity:</b></label>
                        <input name="cardQuantity" id="cardQuantity" type="number" value="<?php echo $itemVal['quantity'] ?>"
                               onchange="changeQuantity(this.value, '<?php echo $changeUrl;?>')" >
                    </p>
                    <p></p>
                </div>
                <div class="card-item-action"><a href="<?php echo SITE_URL . '/shopping-cart/processCart/remove/' . $itemVal['proCode'] ?>">Remove</a></div>
            </div>
            <?php
        }
        ?>
        <div class="card-item-total">Subtotal: <span class="">$<?php echo number_format($subTotal, 2, '.', '');?></span> </div>
        <a class="btn btn-primary btn-legend" id="checkoutBtn" href="<?php echo SITE_URL . '/shipping-address' ?>" >CHECKOUT</a>
        <?php
    }else{
        ?>
        <h1>Your Shopping Cart is Empty</h1>
        <p></p>
        <a class="btn btn-primary btn-legend" href="<?php echo SITE_URL . '/shopping' ?>">Continue Shopping</a>

    <?php
    }
    ?>
</div>
