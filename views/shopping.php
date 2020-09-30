<div class="container-fluid">
<!--    sorting feature-->
    <form action="<?php echo SITE_URL?>/shopping/searchProduct" method="post" name="submit" enctype="multipart/form-data">
        <div class="row prod-sorter">
            <div class="col-sm-3">
                Choose Beverage type:
                <select name="beverage" id="" class="custom-select">
                    <option value="">All</option>
                    <option value="coffee" <?php if(isset($_SESSION['searchByBeverage']) && $_SESSION['searchByBeverage'] == 'coffee') echo 'selected'; ?>>Coffee</option>
                    <option value="tea" <?php if(isset($_SESSION['searchByBeverage']) && $_SESSION['searchByBeverage'] == 'tea') echo 'selected'; ?>>Tea</option>
                </select>
            </div>
            <div class="col-sm-3">
                Choose Brand:
                <select name="brand" id="" class="custom-select">
                    <option value="">All</option>
                    <?php
                        foreach ($data['listBrands'] as $item){
                            ?>
                            <option value="<?echo $item['brandID'];  ?>" <?php if(isset($_SESSION['searchByBrand']) && $_SESSION['searchByBrand'] == $item['brandID']) echo 'selected'; ?> >
                                <?php echo $item['name']; ?>
                            </option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div class="col-sm-3">
                Sort By:
                <select name="sort_by" id="" class="custom-select">
                    <option value="name" <?php if(isset($_SESSION['sortBy']) && $_SESSION['sortBy'] == 'name') echo 'selected'; ?> >Name</option>
                    <option value="price_low" <?php if(isset($_SESSION['sortBy']) && $_SESSION['sortBy'] == 'price_low') echo 'selected'; ?> >Price, low to high</option>
                    <option value="price_high" <?php if(isset($_SESSION['sortBy']) && $_SESSION['sortBy'] == 'price_high') echo 'selected'; ?> >Price, high to low</option>
                    <option value="best" <?php if(isset($_SESSION['sortBy']) && $_SESSION['sortBy'] == 'best') echo 'selected'; ?> >Best seller</option>
                    <option value="new" <?php if(isset($_SESSION['sortBy']) && $_SESSION['sortBy'] == 'new') echo 'selected'; ?> >Newest</option>
                    <option value="old" <?php if(isset($_SESSION['sortBy']) && $_SESSION['sortBy'] == 'old') echo 'selected'; ?> >Oldest</option>
                </select>
            </div>
            <div class="col-sm-3">
                <br>
                <input type="submit" class="btn btn-secondary btn-legend btn-legend-def" name="submit" value="Search">
            </div>
        </div>
    </form>

    <!--    all product images-->
    <div class="row">
    <?php
    foreach ($data['listProducts'] as $item){ 
    ?>
   <div class="col product-item">
            <div class="card">
               <img id="imageProduct" name="imageProduct" class="card-img-top product-img" src="<?php echo SITE_URL . '/uploads/' . $item['imagePath']; ?>" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title proName"> <?php echo $item['proName']; ?></h4>
                   <a class="btn btn-primary  stretched-link btn-legend btn-legend-def" href="<?php echo SITE_URL.'/product-detail/viewproduct/' . $item['proCode'] ?>" >
                       $<?php echo number_format($item['salePrice'], 2, '.', ''); ?>
                   </a>
                </div>
            </div>
        </div>
        <?php
   }
   ?>         
    </div>
    <ul class="pagination justify-content-center">
        <?php
                $previous = 1;
                $next = $data['totalPages'];
                if($data['currentPage'] > 1){
                    $previous = $data['currentPage'] -1;
                }
                if($data['currentPage'] < $data['totalPages']){
                    $next = $data['currentPage'] + 1;
                }
        ?>
        <li class="page-item"><a class="page-link" href="<?php echo SITE_URL.'/shopping/page/'.$previous ?>">Previous</a></li>
        <?php for ($i = 1; $i<= $data['totalPages']; $i++){
                    if($data['currentPage'] == $i){
                        echo '<li class="page-item"><a class="page-link active-page" href="'.SITE_URL.'/shopping/page/'.$i.'">'.$i.'</a></li>';
                    }else{
                        echo '<li class="page-item"><a class="page-link" href="'.SITE_URL.'/shopping/page/'.$i.'">'.$i.'</a></li>';
                    }

        }
      ?>
        <li class="page-item"><a class="page-link" href="<?php echo SITE_URL.'/shopping/page/'.$next ?>">Next</a></li>
    </ul>
        </div>
    </div>
</div>



