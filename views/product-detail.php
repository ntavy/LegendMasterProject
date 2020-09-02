<div class="container-fluid ">
		<div class="row">
		 <?php 
		foreach ($data['listProducts'] as $item){ 
		   echo 
             '<div class="col">
			 <img id="imageProduct" name="imageProduct" class="card-img-top product-img" src="'.dirname($_SERVER['PHP_SELF']).'/uploads/'.$item['imagePath'].'" alt="Card image">
	            Product Name: <input type="text" id="proName" class="proName border-0"  name="proName" value="'.$item['proName'].'" >
				<hr />
					Price:  <input type="text" id="salePrice" class="salePrice border-0"  name="salePrice" value="'.$item['salePrice'].'" > 
				Size(per pack): <input type="text" id="sizePerPack" class="sizePerPack border-0"  name="sizePerPack" value="'.$item['sizePerPack'].'" >
			     Brand: Nescafe
				<div class="prod-item-qty row">
					<div class="col-xs-4">Qty: </div>
					<div class="col-xs-2">
						<input placeholder="Enter no. of Quantity" class="form-control" type="text"
							name="prodQty" id="prodQty" required>
					</div>
				</div>
				<div class="prod-item-add-to-cart row form-group">
					<div class="col-xs-6">
						<button type="submit" class="btnAddToCart btn-primary btn-lg" name="btnAddToCart">Add
							to Cart</button>
						<a href="payment">
							<button type="submit" class="btnBuyItNow btn-primary btn-lg" name="btnBuyItNow">Buy
								It Now</button>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
		<div class=col-md-12>
				<p>
				Description about the product
				<hr />
				<input type="textarea" id="proDescription" class="proDescription border-0"  name="proDescription" value="'.$item['proDescription'].'" >
				</p>
			</div>';
			
		}
		 ?>
		 
		</div>
	</div>
