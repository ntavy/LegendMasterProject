<h1>Mange Products</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Code</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Brand</th>
        <th scope="col">Supplier</th>
        <th scope="col">Imported Quantity</th>
        <th scope="col">Remain Quantity</th>
        <th scope="col">Type</th>
        <th scope="col">Purchase Price ($)</th>
        <th scope="col">Sale Price ($)</th>
        <th scope="col">Size Per Pack</th>
        <th scope="col">Image Path</th>
        <th scope="col">Added Date</th>
        <th scope="col">Updated Date</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
        //print_r($data['listBrands']);
    foreach ($data['listProducts'] as $item){
        ?>
        <tr>
                    <td><?php echo $item['proCode']; ?></td>
                    <td><?php echo $item['proName']; ?></td>
                    <td><?php echo substr($item['proDescription'], 0, 20); ?></td>
                    <td><?php echo $item['brandID']; ?></td>
                    <td><?php echo $item['supplierCode']; ?></td>
                    <td><?php echo $item['importedQuantity']; ?></td>
                    <td><?php echo $item['remainQuantity']; ?></td>
                    <td><?php echo $item['typeCode']; ?></td>
                    <td><?php echo $item['purchasedPrice']; ?></td>
                    <td><?php echo $item['salePrice']; ?></td>
                    <td><?php echo $item['sizePerPack']; ?></td>
                    <td><?php echo $item['imagePath']; ?></td>
                    <td><?php echo $item['addedDate']; ?></td>
                    <td><?php echo $item['updatedDate']; ?></td>
                    <td><a href="<?php echo SITE_URL?>/admin/manage-products/edit/<?php echo $item['proCode']?>">Edit</a>
                   </tr>
    <?php

    } ?>
    </tbody>
</table>
