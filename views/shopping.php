<div class="container-fluid">
<!--    sorting feature-->
    <div class="row prod-sorter">
        <div class="col-sm-3">
            Choose Beverage type:
            <select name="beverage" id="" class="custom-select">
                <option value="">All</option>
                <option value="Coffee">Coffee</option>
                <option value="Tea">Tea</option>
            </select>
        </div>
        <div class="col-sm-3">
            Choose Brand:
            <select name="brand" id="" class="custom-select">
                <option value="">All</option>
                <?php
                    foreach ($data['listBrands'] as $item){
                        echo '<option value="'.$item['brandID'].'">'.$item['name'].'</option>';
                    }
                ?>
            </select>
        </div>
        <div class="col-sm-3">
            Sort By:
            <select name="sort_by" id="" class="custom-select">
                <option value="Name">Name</option>
                <option value="Price_low">Price, low to high</option>
                <option value="Price_high">Price, high to low</option>
                <option value="Best">Best seller</option>
                <option value="New">Newest</option>
                <option value="Old">Oldest</option>
            </select>
        </div>
        <div class="col-sm-3">
            <br>
            <input type="submit" class="btn btn-secondary btn-legend btn-legend-def" name="submit" value="Search">
        </div>
    </div>

    <!--    all product images-->
    <div class="row">
    <?php
    foreach ($data['listProducts'] as $item){ 
    echo
   '<div class="col product-item">
            <div class="card">
               <img id="imageProduct" name="imageProduct" class="card-img-top product-img" src="' . dirname($_SERVER['PHP_SELF']) . '/uploads/' . $item['imagePath'] . '" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title proName"> ' . $item['proName'] . '</h4>
                   <a href="product-detail/viewproduct/' . $item['proCode'] . '" class="btn btn-primary  stretched-link btn-legend btn-legend-def">$' . $item['salePrice'] . '</a>
                </div>
            </div>
        </div>';
   }        
   ?>         
    </div>
    <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
    </ul>
        </div>
    </div>
</div>



