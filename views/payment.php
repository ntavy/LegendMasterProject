<?php
/*$proName = $_POST['proName'];
$salePrice = $_POST['salePrice'];
$img = $_POST['imgSrc'];
$size = $_POST['sizePerPack'];
$prodQty = $_POST['prodQty'];
$calcPrice = ltrim($salePrice, '$');
$total = $calcPrice * $prodQty;
*/
?>
<h1>Payment</h1>
<iframe name="hiddenFrame" width="0" height="0" border="0"
	style="display: none;"></iframe>
<form id="payment-form">
	<div class="row payment-form">
		<div class="col-md-8">
			<hr />
			<div class="form-group row">
				<label for="paymentMethod" class="col-sm-3 col-form-label">Payment
					Method: </label> <a class="col-sm-2" href="#"><img
					src="<?php  echo SITE_URL . '/public/images/ImagesPayment/masterCard.jpg' ; ?>" width="80"
					height="35"></a> <a class="col-sm-2" href="#"><img
					src="<?php  echo SITE_URL . '/public/images/ImagesPayment/PayPalCard.png' ; ?>" width="80"
					height="35"></a> <a class="col-sm-2" href="#"><img
					src="<?php  echo SITE_URL . '/public/images/ImagesPayment/visaCard.jpg' ; ?>" width="80"
					height="35"></a> <a class="col-sm-2" href="#"><img
					src="<?php  echo SITE_URL . '/public/images/ImagesPayment/visaDebitCard.jpg' ; ?>" width="80"
					height="35"></a>
			</div>
			<div class="form-group row">
				<label for="cardNo" class="col-sm-3 col-form-label">Card Number: </label>
				<input type="text" class="form-control col-sm-8" name="cardNo"
					id="cardNo">
			</div>
			<div class="form-group row">
				<label for="cardHolderName" class="col-sm-3 col-form-label">Card
					Holder Name: </label> <input type="text"
					class="form-control col-sm-8" name="cardHolderName"
					id="cardHolderName">
			</div>
			<div class="form-group row">
				<label for="expiryDate" class="col-sm-3 col-form-label">Expiry Date:
				</label> <label for="month" class="col-sm-1 col-form-label">Month: </label>
				<select class="form-control col-sm-3" id="month">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
				</select> <label for="year" class="col-sm-1 col-form-label">Year: </label>
				<select class="form-control col-sm-3" id="year">
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option>29</option>
					<option>30</option>
					<option>31</option>
				</select>
			</div>
			<div class="form-group row">
				<label for="csvSecurity" class="col-sm-3 col-form-label">CSV/Security
					Code:</label> <input type="text" class="form-control col-sm-8"
					name="csvSecurity" id="csvSecurity">
			</div>
			<div class="form-group row">
				<label for="billingAddress" class="col-sm-3 col-form-label">Billing
					Address: </label> <input type="text" class="form-control col-sm-6"
					name="billingAddress" id="billingAddress"> 
					<a class="btn btn-primary btn-legend btnAddBillingAddress" href="<?php echo dirname($_SERVER['PHP_SELF']) . '/shipping-address' ?>">Billing Address
					</a>
			</div>
			<div class="form-group row">
				<button type="button" class="btnPay btn btn-primary btn-legend btn-legend-sml">Pay</button>
			</div>
		</div>
		<div class="col-md-4">
			<!-- this field is to show the item and its details -->
				
	<div class="card">
    <?php
    $subTotal = 0;
    if(!empty($_SESSION["cart_items"])){
        foreach ($_SESSION["cart_items"] as $itemKey => $itemVal) {
            $subTotal += $itemVal["quantity"] * $itemVal["salePrice"];
            ?>
            <div>
                <div class="card-item-image">
                    <a><img src="<?php echo dirname($_SERVER['PHP_SELF']) . '/uploads/' . $itemVal['imagePath'] ?>"  alt="<?php echo $itemVal['proName']; ?>">
                    </a></div>
                <div class="card-item-body">
                    <h6><?php echo $itemVal['proName']; ?></h6>
                    <b>Size:</b> <?php echo $itemVal['sizePerPack'] ?>
                    <b>Price:</b> <?php echo number_format($itemVal['salePrice'], 2, '.','') ?>
                    <b>Quantity:</b> <?php echo $itemVal['quantity'] ?> 
                </div>
            </div>
            <?php
        }
        ?>
        <hr/>
        <div class="card-item-total">Subtotal: $<?php echo $subTotal;?> </div>
        <?php
    }else{
    }
        ?>
</div>
				
				
				</div>
		
</form>



















