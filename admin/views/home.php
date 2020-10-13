<?php
//    echo $data['isUpdate'];
//    echo $data['proCode'];

?>
<h1>
    <?php
    $actionUrl = SITE_URL.'/admin/home/saveProduct';
    if(isset($data['editItem'])){
        echo "Edit Product";
        $editItem = $data['editItem'];
//        print_r($editItem);
    }else{
        echo "Add new product";
    }
    ?>

</h1>
    <form id="addProductForm"
          action="<?php echo $actionUrl; ?>"
          method="post" name="submit" enctype="multipart/form-data">
		<div class="row add-product-form">
			<div class="col">
                <input type="hidden" value="<?php echo $editItem['proCode']; ?>">
				<div class="form-group row">
					<label for="proType" class="col-sm-2 col-form-label">Product Type:</label>
					<select id="proType" name="proType" class="form-control col-sm-9">
						<option value="tea" <?php if(isset($editItem) && $editItem['typeCode'] == 'tea') echo 'selected'  ?>>Tea</option>
						<option value="coffee" <?php if(isset($editItem) && $editItem['typeCode'] == 'coffee') echo 'selected'  ?> >Coffee</option>
					</select>
				</div>
				<div class="form-group row">
						<label for="proName" class="col-sm-2 col-form-label">Product Name:</label>
						<input type="text"
                               id="proName"
                               name="proName"
                               class="form-control col-sm-9"
                               value="<?php if(isset($editItem)) echo $editItem['proName'] ?>">
				</div>
				<div class="form-group row">
					<label for="proDesc" class="col-sm-2 col-form-label">Product Description:</label>
					<textarea id="proDesc" name="proDesc" rows="3" class="form-control col-sm-9"
                              ><?php if(isset($editItem)) echo $editItem['proDescription'] ?></textarea>
				</div>
				<div class="form-group row">
					<label for="proBrand" class="col-sm-2 col-form-label">Product Brand:</label>
					<select id="proBrand" name="proBrand" class="form-control col-sm-9">
                        <?php foreach ($data['listBrands'] as $item){
                            ?>
                            <option value="<?php echo $item['brandID']; ?>"
                                <?php if(isset($editItem) && $editItem['brandID'] == $item['brandID']) echo 'selected'; ?> >
                                <?php echo $item['name']; ?>
                            </option>;
                        <?php
                        } ?>
					</select>
				</div>
                <div class="form-group row">
                    <label for="proSupplier" class="col-sm-2 col-form-label">Supplier:</label>
                    <select id="proSupplier" name="proSupplier" class="form-control col-sm-9">
                        <?php foreach ($data['listSuppliers'] as $item){
                            ?>
                            <option value="<?php echo $item['supplierCode']; ?>"
                                <?php if(isset($editItem) && $editItem['supplierCode'] == $item['supplierCode']) echo 'selected'; ?> >
                                <?php echo $item['supplierName'] ?>
                            </option>
                            <?php
                        } ?>
                    </select>
                </div>
			</div>
			<div class="col">
                <div class="form-group row">
                    <label for="proSize" class="col-sm-2 col-form-label">Size (per pack):</label>
                    <input type="text" id="proSize" name="proSize" class="form-control col-sm-9"
                           value="<?php if(isset($editItem)) echo $editItem['sizePerPack'] ?>"
                    >
                </div>
				<div class="form-group row">
                    <label for="proPurchasedPrice" class="col-sm-2 col-form-label">Purchased Price:</label>
                    <input type="text" id="proPurchasedPrice" name="proPurchasedPrice" class="form-control col-sm-9"
                           value="<?php if(isset($editItem)) echo $editItem['purchasedPrice'] ?>"
                    >
                </div>
				<div class="form-group row">
					<label for="proSalePrice" class="col-sm-2 col-form-label">Sale Price:</label>
					<input type="text" id="proSalePrice" name="proSalePrice" class="form-control col-sm-9"
                           value="<?php if(isset($editItem)) echo $editItem['salePrice'] ?>"
                    >
				</div>
				<div class="form-group row">
					<label for="proQuantity" class="col-sm-2 col-form-label">Quantity:</label>
					<input type="text" id="proQuantity" name="proQuantity" class="form-control col-sm-9"
                           value="<?php if(isset($editItem)) echo $editItem['importedQuantity'] ?>"
                    >
				</div>
                <div class="form-group row">
                    <div class="col-sm-2 col-form-label">Photo</div>
                    <input disabled class="form-control-file col-sm-9" value="<?php if(isset($editItem)) echo $editItem['imagePath'] ?>" >
                </div>
                <div class="form-group row">
					<label for="proPhoto" class="col-sm-2 col-form-label">Upload Photo:</label>
                    <input type="file" class="form-control-file col-sm-9" id="proPhoto" name="proPhoto">
				</div>

			</div>
		</div>
		<div>
			<button type="submit" id="submit" name="submit" class="btn btn-secondary btn-lg">Save</button>
		</div>
	</form>


