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
//            echo '<option value='.$item[brandID].'>'.$item[name].'</option>';
        echo '<tr>
                    <td>'.$item['proCode'].'</td>
                    <td>'.$item['proName'].'</td>
                    <td>'.substr($item['proDescription'], 0, 20).'</td>
                    <td>'.$item['brandID'].'</td>
                    <td>'.$item['supplierCode'].'</td>
                    <td>'.$item['importedQuantity'].'</td>
                    <td>'.$item['remainQuantity'].'</td>
                    <td>'.$item['typeCode'].'</td>
                    <td>'.$item['purchasedPrice'].'</td>
                    <td>'.$item['salePrice'].'</td>
                    <td>'.$item['sizePerPack'].'</td>
                    <td>'.$item['imagePath'].'</td>
                    <td>'.$item['addedDate'].'</td>
                    <td>'.$item['updatedDate'].'</td>
                    <td><a href="manage-products/edit/'.$item['proCode'].'">Edit</a>
                   </tr>';

    } ?>
    </tbody>
</table>
