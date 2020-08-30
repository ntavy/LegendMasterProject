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
           <input type="submit" class="btn btn-secondary btn-legend" name="submit" value="Search">
        </div>
    </div>

<!--    all product images-->
    <div class="row">
    <?php
    for($i=0; $i<=11; $i++){
        echo '<div class="col-sm-2">
            <div class="card">
               <img class="card-img-top" src="public/images/products/nescafe.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title" name="name">Nescafe Coffee Mixer Sachets Cappuccino 10 pack</h4>
                    <a href="product-detail" class="btn btn-primary stretched-link btn-legend">$22.00</a>
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



