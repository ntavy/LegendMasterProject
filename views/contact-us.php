<div class="container">
    <div style="text-align:center">
        <h2>Contact Us</h2>
        <p>Drop us a message:</p>
        <hr>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <img src="<?php echo SITE_URL ?>/public/images/legend-coffee-logo.png" alt="Image"
                 style="width:50%">

            <ul class="contact-text">
                <li><b>Address: </b> 123 head st, Adelaide SA 5000</li>
                <li><b>Phone: </b> (123) 456 789</li>
                <li><b>Email: </b> info@legend.com.au</li>
            </ul>
        </div>
        <div class="col-sm-6">

            <?php
            if (isset($data['resMessage'])) {
                //success
                if ($data['resMessage'] == '1') {
                    echo "<div class=\"alert alert-success\">Thank you for contacting us. Your message has been submitted successfully.</div>";
                } else { //failed
                    echo "<div class=\"alert alert-danger\">" . $data['resMessage'] . "</div>";
                }

                //send page back to contact-us
                header("refresh:5; url=" . SITE_URL . "/contact-us");
            }
            ?>

            <form action="<?php echo SITE_URL ?>/contact-us/send" method="POST">
                <label for="fname">First Name</label>
                <input class="input-legend" type="text" id="fname" name="firstname" placeholder="First Name"
                       minlength="2" required>

                <label for="lname">Last Name</label>
                <input class="input-legend" type="text" id="lname" name="lastname" placeholder="Last Name" minlength="2"
                       required>

                <label for="email">Email</label>
                <input class="input-legend" type="email" id="email" name="emailId" placeholder="Email ID" required>

                <label for="company">Company</label>
                <input class="input-legend" type="text" id="company" name="company" placeholder="Company Name">

                <label for="subject">Subject</label>
                <textarea class="input-legend" id="subject" name="subject" placeholder="Write something.."
                          style="height:170px" required></textarea>
                <br><br>
                <input type="submit" value="Submit" class="btn btn-legend btn-legend-lrg">
            </form>
        </div>
    </div>
</div>