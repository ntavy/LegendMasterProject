
<h1>Product Details</h1>
<iframe name="hiddenFrame" width="0" height="0" border="0"
	style="display: none;"></iframe>
<form id="product-details" action="payment" method="post" name="product-details" >
	<div class="container ">
		<div class="row">
			<div class="col">
				<div class="items d-flex flex-wrap">
					<div class="prod-item">
						<a href=""><img src="public/images/products/nescafe.jpg"></a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="prod-item-description row form-group"> 
				<input type="text" class="border-0" id="proName" name="proName" value="<?php echo $_POST['proName']; ?>" readonly>
				</div>
				<hr />
				<div class="prod-item-price row form-group">
					Price: <input type="text" id="salePrice" class="border-0" name="salePrice" value="<?php echo $_POST['salePrice']; ?>" readonly>
				</div>
				<div class="prod-item-size row form-group">Size(per pack): <input type="text" id="sizePerPack" class="border-0" name="sizePerPack" value="<?php echo $_POST['sizePerPack']; ?> gm" readonly></div>
				<div class="prod-item-brand row form-group">Brand: Nescafe</div>
				<div class="prod-item-qty row form-group">
					<div class="col-xs-4">Qty:</div>
					<div class="col-xs-2">
						<input placeholder=1 class="form-control" type="text"
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
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu
				eleifend augue. Morbi porta elit turpis, vel auctor felis efficitur
				id. Maecenas efficitur ultricies eros vitae interdum.Sed cursus et
				ex vitae feugiat. Fusce porta elit sem, a sodales mi venenatis sit
				amet. In sed quam vitae sem imperdiet ornare. Vivamus id tincidunt
				arcu, sit amet bibendum ex. Mauris lobortis vel nisi eget pretium.
				Nullam rutrum, justo ut sollicitudin ultrices, ex felis porta dui,
				nec dapibus libero sem eu sem. Sed vel erat a leo scelerisque
				euismod ut nec nunc. Nunc sagittis posuere orci, sit amet dapibus
				elit tempus vulputate. Nulla vestibulum odio eros, et maximus felis
				mollis quis. Sed sit amet neque vel augue viverra bibendum. Mauris
				pretium lacus a felis vehicula, in placerat risus auctor. Ut quis
				justo pellentesque, iaculis lacus vel, accumsan quam. Pellentesque
				vel lectus at neque facilisis pulvinar in sit amet lacus. Nam rutrum
				velit at justo aliquam, sit amet pharetra sapien cursus. Nullam non
				augue et lorem eleifend blandit.
				</p>
			</div>
		</div>
	</div>
</form>
