<form class="login-form" action="<?php echo SITE_URL?>/admin/form-login/submit" method="post" name="submit" enctype="multipart/form-data">
    <h3>Login</h3>
    <div class="form-group">
        <div class="red"><?php if(isset($data['error-message'])) echo $data['error-message']; ?></div>
        <label for="username">Username</label>
        <input class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>