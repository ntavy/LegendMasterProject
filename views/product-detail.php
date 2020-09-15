<div class="container">
    <br><br>
     <form id="addProductDetail" action="<?php echo dirname($_SERVER['PHP_SELF'])?>/payment" method="post" name="submit" enctype="multipart/form-data">
		 <div class="row">
        <div class="col-sm-6 center-items">
            <img id="imageProduct" name="imageProduct" class="img-fluid"
                 src="<?php echo dirname($_SERVER['PHP_SELF']) . '/uploads/' . $data['listProducts'][0]['imagePath']; ?>"
                 alt="Card image"/>
                 <input id="imgSrc" name="imgSrc" value="<?php echo dirname($_SERVER['PHP_SELF']) . '/uploads/' . $data['listProducts'][0]['imagePath']; ?>" hidden/>
        </div>
        <div class="col-sm-6 ">
            <h4 > <input id="proName" name="proName" class="prodDetail" type="text" value="<?php echo $data['listProducts'][0]['proName']; ?>"></input></h4>
            <hr>
            <p><label for="salePrice" class="product-label">Price: </label> $<input id="salePrice" name="salePrice" class="prodDetail" type="text" value="<?php echo $data['listProducts'][0]['salePrice']; ?>"</input></p>
            <p><label  class="product-label">Size(per
                    pack): </label> <input id="sizePerPack" name="sizePerPack" class="prodDetail" type="text" value="<?php echo $data['listProducts'][0]['sizePerPack']; ?>"> </input></p>
            <p><label class="product-label">Brand: </label> <input id="brandName" name="brandName" class="prodDetail" type="text" value="<?php echo $data['listProducts'][0]['name']; ?>"></input> </p>
            <p><label class="product-label">Qty: </label> <input class="input-legend-sml" type="text"
                                                                 placeholder="Enter no. of Quantity" name="prodQty"
                                                                 id="prodQty" value="1" required/></p>
                                                                 
            <button type="submit" class="btn btn-secondary btn-legend btn-legend-xsml " name="btnAddToCart">Add to
                Cart
            </button> 
            	<button type="submit" id="submit" name="submit" class="btn btn-primary btn-legend btn-legend-xsml">Buy It Now</button>
          <!--   <a href= "<?php echo dirname($_SERVER['PHP_SELF']).'/payment/viewPayment/'.$data['listProducts'][0]['proCode']; ?>"
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
            <p><?php echo $data['listProducts'][0]['proDescription']; ?></p>
        </div>
    </div>
</div>
