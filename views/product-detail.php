<?php
    $productItem = $data['productItem'];
?>
<div class="container">
    <br><br>
     <form id="addProductDetail" action="<?php echo SITE_URL?>/shopping-cart/processCart/add/<?php echo $productItem['proCode']?>" method="post" name="submit" enctype="multipart/form-data">
		 <div class="row">
        <div class="col-sm-6 center-items">
            <img id="imageProduct" name="imageProduct" class="img-fluid"
                 src="<?php echo SITE_URL . '/uploads/' . $productItem['imagePath']; ?>"
                 alt="Card image"/>
                 <input id="imgSrc" name="imgSrc" value="<?php echo SITE_URL . '/uploads/' . $productItem['imagePath']; ?>" hidden/>
        </div>
        <div class="col-sm-6 ">
            <h4 > <input id="proName" name="proName" class="prodDetail" type="text" value="<?php echo $productItem['proName']; ?>"></input></h4>
            <hr>
            <p><label for="salePrice" class="product-label">Price: </label>
                $<input id="salePrice" name="salePrice" class="prodDetail" type="text" value="<?php echo number_format($productItem['salePrice'], 2, '.',''); ?>"</input>
            </p>
            <p><label  class="product-label">Size(per
                    pack): </label> <input id="sizePerPack" name="sizePerPack" class="prodDetail" type="text" value="<?php echo $productItem['sizePerPack']; ?>"> </input></p>
            <p><label class="product-label">Brand: </label> <input id="brandName" name="brandName" class="prodDetail" type="text" value="<?php echo $productItem['name']; ?>"></input> </p>
            <p><label class="product-label">Quantity: </label> <input class="input-legend-sml" type="text"
                                                                 placeholder="Enter no. of Quantity" name="quantity"
                                                                 id="quantity" value="1" required/></p>

            <button type="submit" class="btn btn-secondary btn-legend btn-legend-xsml " name="btnAddToCart">Add to
                Cart
            </button>
<!--            	<button type="submit" id="submit" name="submit" class="btn btn-primary btn-legend btn-legend-xsml">Buy It Now</button>-->
          <!--   <a href= "<?php echo SITE_URL.'/payment/viewPayment/'.$productItem['proCode']; ?>"
            class="btn btn-primary btn-legend btn-legend-xsml">Buy It Now</a>
             -->
        </div>
    </div>
    </form>
    <br>
    <div class="row">
        <div class=col-sm-12>
            <p>Description about the product</p>
            <hr>
            <p><?php echo $productItem['proDescription']; ?></p>
        </div>
    </div>
</div>
