
<?php
if (isset($_SESSION['userData'])) {
//    print_r($_SESSION['userData']);
    $errorMsg = '';
    if(isset($data['error-message'])){
        $errorMsg = $data['error-message'];
    }

    ?>
    <div class="myaccount">
        <form id="frmProfile" class="login-form" action="<?php echo SITE_URL?>/my-account/updateProfile" method="post" name="submit" enctype="multipart/form-data">
            <h4>Profile</h4>
            <p><?php echo $errorMsg; ?></p>
            <input type="text" id="firstname" name="firstname" class="input-legend" placeholder="First Name" value="<?php echo $_SESSION['userData']['firstName']; ?>" >
            <input type="text" id="lastname" name="lastname" class="input-legend" placeholder="Last Name" value="<?php echo $_SESSION['userData']['lastName']; ?>">
            <input type="email" id="email" name="email" class="input-legend" placeholder="Email" value="<?php echo $_SESSION['userData']['email']; ?>">
            <input type="text" id="username" name="username" class="input-legend" placeholder="Username" value="<?php echo $_SESSION['userData']['username']; ?>">
            <div >
                <a class="mylink" href="<?php echo SITE_URL?>/my-account/change-password">
                    Change Password<span class="linkarrow"><i class="fas fa-angle-right"></i></span>
                </a>
            </div>
            <br><br>
            <input type="submit" class="btn btn-legend btn-legend-lrg" id="signUpBtn" name="SignUp" value="Save Changes" disabled>
            <br>
            <?php
            if (isset($data['regResult'])) {
                echo "<br><div class=\"alert alert-danger\">" . $data['regResult'] . "</div>";
            }
            ?>
            <br>
        </form>
    </div>

<?php } ?>

