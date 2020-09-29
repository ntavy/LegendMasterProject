<div class="container-fluid">
    <div class="row sign-div">
        <div class="col-sm-12">
            <h3>Verify Email</h3><br>
            <p>Enter your 6-digit verification code below</p>
            <form action="<?php echo dirname($_SERVER['PHP_SELF']) ?>/sign-in/verify" method="post">
                <input type="hidden" name="userID" class="input-legend-sml" value="<?php echo $data['userID']; ?>">
                <input type="text" name="code" class="input-legend-sml" placeholder="Enter verification code">

                <br><br>
                <input type="submit" class="btn btn-legend btn-legend-sml" name="verify" value="Verify">
                <br>
                <?php
                if (isset($data['verMessage'])) {
                    echo '<br>' . $data['verMessage'];
                }
                ?>
                <br>
            </form>
        </div>

    </div>
</div>