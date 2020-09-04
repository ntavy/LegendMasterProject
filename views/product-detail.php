<div class="container">
    <br><br>
    <div class="row">
        <div class="col-sm-6 center-items">
            <img id="imageProduct" name="imageProduct" class="img-fluid"
                 src="<?php echo dirname($_SERVER['PHP_SELF']) . '/uploads/' . $data['listProducts'][0]['imagePath']; ?>"
                 alt="Card image"/>
        </div>
        <div class="col-sm-6">
            <h4><?php echo $data['listProducts'][0]['proName']; ?></h4>
            <hr>
            <p><label class="product-label">Price: </label> $<?php echo $data['listProducts'][0]['salePrice']; ?></p>
            <p><label class="product-label">Size(per
                    pack): </label> <?php echo $data['listProducts'][0]['sizePerPack']; ?></p>
            <p><label class="product-label">Brand: </label> <?php echo $data['listProducts'][0]['name']; ?> </p>
            <p><label class="product-label">Qty: </label> <input class="input-legend-sml" type="text"
                                                                 placeholder="Enter no. of Quantity" name="prodQty"
                                                                 id="prodQty" value="1" required/></p>
            <button type="submit" class="btn btn-primary btn-lg btn-legend btn-legend-xsml" name="btnAddToCart">Add to
                Cart
            </button>
            <button type="submit" class="btn btn-primary btn-lg btn-legend btn-legend-xsml" name="btnBuyItNow"
                    onclick="location.href ='../../payment'">Buy It Now
            </button>
        </div>
    </div>
    <br>
    <div class="row">
        <div class=col-sm-12>
            <p>Description about the product</p>
            <hr>
            <p><?php echo $data['listProducts'][0]['proDescription']; ?></p>
        </div>
    </div>
</div>
