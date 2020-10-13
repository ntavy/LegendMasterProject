<?php
if (isset($_SESSION['userData']['cusAccID'])) {
    $msg = 'Welcome, ' . $_SESSION['userData']['firstName'];

?>
    <div class="myaccount">
        <h3><?php echo $msg; ?></h3>
        <h4>MY ACCOUNT</h4>
        <div >
            <a class="mylink" href="<?php echo SITE_URL?>/my-account/profile">
                    View Profile<span class="linkarrow"><i class="fas fa-angle-right"></i></span>
            </a>
        </div>
        <div>
            <a class="mylink" href="<?php echo SITE_URL?>/orders">
                    View Orders <span class="linkarrow"><i class="fas fa-angle-right"> </span></i>
            </a>
        </div>
    </div>


<?php } ?>