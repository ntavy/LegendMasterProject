<div class="container-fluid">
    <div class="row sign-div">
        <div class="col-sm-6 right-border">
            <h3>Sign Up</h3><br>
            <form action="<?php echo SITE_URL ?>/sign-in/register" method="post">
                <input type="text" name="firstName" class="input-legend" placeholder="First Name">
                <input type="text" name="lastName" class="input-legend" placeholder="Last Name">
                <input type="email" name="email" class="input-legend" placeholder="Email">
                <input type="text" name="userName" class="input-legend" placeholder="Username">
                <input type="password" name="password" class="input-legend" placeholder="Password">
                <input type="password" name="confirmPassword" class="input-legend" placeholder="Confirm Password">
                <br><br>
                <input type="submit" class="btn btn-legend btn-legend-lrg" name="SignUp" value="Sign Up">
                <br>
                <?php
                if (isset($data['regResult'])) {
                    echo "<br><div class=\"alert alert-danger\">" . $data['regResult'] . "</div>";
                }
                ?>
                <br>
            </form>
        </div>
        <div class="col-sm-6">
            <h3>Sign In</h3><br>
            <form action="<?php echo SITE_URL ?>/sign-in/verifyLogin" method="post">
                <input type="text" name="username" class="input-legend" placeholder="Username">
                <input type="password" name="password" class="input-legend" placeholder="Password">
                <br><br>
                <input type="submit" class="btn btn-legend btn-legend-lrg" name="SignUp" value="Sign In">
                <br>
                <?php
                if (isset($data['verResult'])) {
                    echo "<br><div class=\"alert alert-danger\">" . $data['verResult'] . "</div>";
                }
                ?>
                <br>
            </form>
        </div>
    </div>
</div>