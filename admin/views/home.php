<?php
//    echo $data['isUpdate'];
//    echo $data['proCode'];
print_r()
?>
<h1>Add new product</h1>
<!--    <iframe name="hiddenFrame" width="0" height="0" border="0" style="display: none;"></iframe>-->
<!--    <form id="addProductForm" action="--><?php //echo dirname($_SERVER['PHP_SELF'])?><!--/home/addProduct" method="post" name="submit" target="hiddenFrame">-->
    <form id="addProductForm" action="<?php echo dirname($_SERVER['PHP_SELF'])?>/home/addProduct" method="post" name="submit" enctype="multipart/form-data">
		<div class="row add-product-form">
			<div class="col">
				<div class="form-group row">
					<label for="proType" class="col-sm-2 col-form-label">Product Type:</label>
					<select id="proType" name="proType" class="form-control col-sm-9">
						<option value="tea">Tea</option>
						<option value="coffee">Coffee</option>
					</select>
				</div>
				<div class="form-group row">
						<label for="proName" class="col-sm-2 col-form-label">Product Name:</label>
						<input type="text" id="proName" name="proName" class="form-control col-sm-9">
				</div>
				<div class="form-group row">
					<label for="proDesc" class="col-sm-2 col-form-label">Product Description:</label>
					<textarea id="proDesc" name="proDesc" rows="3" class="form-control col-sm-9"></textarea>

				</div>
				<div class="form-group row">
					<label for="proBrand" class="col-sm-2 col-form-label">Product Brand:</label>
					<select id="proBrand" name="proBrand" class="form-control col-sm-9">
                        <?php foreach ($data['listBrands'] as $item){
                            echo '<option value='.$item['brandID'].'>'.$item['name'].'</option>';

                        } ?>
					</select>
				</div>
                <div class="form-group row">
                    <label for="proSupplier" class="col-sm-2 col-form-label">Supplier:</label>
                    <select id="proSupplier" name="proSupplier" class="form-control col-sm-9">
                        <?php foreach ($data['listSuppliers'] as $item){
                            echo '<option value='.$item['supplierCode'].'>'.$item['supplierName'].'</option>';
                            //echo '<option value='.$item['supplierCode'].'>'.$item['supplierName'].'</option>';

                        } ?>
                    </select>
                </div>
			</div>
			<div class="col">
                <div class="form-group row">
                    <label for="proSize" class="col-sm-2 col-form-label">Size (per pack):</label>
                    <input type="text" id="proSize" name="proSize" class="form-control col-sm-9">
                </div>
				<div class="form-group row">
                    <label for="proPurchasedPrice" class="col-sm-2 col-form-label">Purchased Price:</label>
                    <input type="text" id="proPurchasedPrice" name="proPurchasedPrice" class="form-control col-sm-9">
                </div>
				<div class="form-group row">
					<label for="proSalePrice" class="col-sm-2 col-form-label">Sale Price:</label>
					<input type="text" id="proSalePrice" name="proSalePrice" class="form-control col-sm-9">
				</div>
				<div class="form-group row">
					<label for="proQuantity" class="col-sm-2 col-form-label">Quantity:</label>
					<input type="text" id="proQuantity" name="proQuantity" class="form-control col-sm-9">
				</div>
				<div class="form-group row">
					<label for="proPhoto" class="col-sm-2 col-form-label">Photo:</label>
                    <input type="file" class="form-control-file col-sm-9" id="proPhoto" name="proPhoto">
				</div>
			</div>
		</div>
		<div>
			<button type="submit" id="submit" name="submit" class="btn btn-secondary btn-lg">Save</button>
		</div>
	</form>


