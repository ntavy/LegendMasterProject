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
                <option value="Nescafe">Nescafe</option>
                <option value="Coles">Coles</option>
                <option value="Moccona">Moccona</option>
                <option value="Jarrah">Jarrah</option>
                <option value="Bickfords">Bickfords</option>
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
   '<form class="form-group" action="product-detail" method="post">
        <div class="col-sm-8">
            <div class="card">
               <img class="card-img-top" src="public/images/products/nescafe.jpg" alt="Card image">
                <div class="card-body">
                    <input name="sizePerPack" id="sizePerPack" class="sizePerPack" type="hidden" value="'.$item['sizePerPack'].'">
                    <h4 class="card-title row"> 
                    <input type="text" id="proName" class="proName border-0" readonly name="proName" value="'.$item['proName'].'"></h4>
                   <input id="salePrice" name="salePrice" type="submit" class="btn btn-primary  stretched-link btn-legend btn-legend-def row" value="$'.$item['salePrice'].'">
                </div>
            </div>
        </div>
    </form>';
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



