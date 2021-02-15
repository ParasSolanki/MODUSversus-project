<?php include_once "includes/header.php"; ?>
<?php include_once "includes/navbar.php"; ?>

    <!--  Start Contact header  -->
    <div class="custom-header-section"> 
        <div class="custom-container">
            <div class="custom-row">
                <div class="custom-header-name">
                    <h4>CONTACT</h4>
                </div>
                <div class="custom-header-url">
                    <p><a href="../">Home</a> / Contact</p>
                </div>
            </div>
        </div>
    </div>
    <span class="custom-tip custom-tip-down"></span> 
    <!-- End Contact header -->

    <!-- Start Map Section -->
    <div class="section">
        <div class="custom-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463.20600521677807!2d72.15332303927683!3d21.755166395483343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5b822fcababb%3A0x8c5dfe7f62e2cb5f!2sJagdish%20Arcade!5e0!3m2!1sen!2sin!4v1613133610552!5m2!1sen!2sin" 
                width="100%" height="500px" 
                frameborder="0" style="border:0;" 
                allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
        </div>
    </div>
    <!-- End Map Section -->
    
    <!-- Start Paragraph Section -->
    <div class="section">
        <div class="custom-container custom-row-bg">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim 
                sed, unde repellendus impedit non tempora necessitatibus alias, 
                laboriosam voluptatem possimus pariatur reiciendis temporibus facere 
                hic provident illo modi consectetur asperiores.
            </p>
        </div>
    </div>
    <!-- End Paragraph Section -->
    
    <div class="section">
        <div class="custom-container">
            <div class="custom-row align-flex-start">
                <div class="contact-form custom-col-6">
                    <h4>SEND INQUIRY</h4>
                    <form action="" method="post">
                        <div class="form-element">
                            <input type="text" name="name" required><label for="name">Name</label>
                        </div>
                        <div class="form-element">
                            <input type="email" name="email" required><label for="email">Email</label>
                        </div>
                        <div class="form-element">
                            <input type="text" name="website" required><label for="website">Website</label>
                        </div>
                        <div class="form-element">
                            <textarea name="comment" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-element">
                            <input type="submit" value="SEND">
                        </div>
                    </form>
                </div>
                <div class="custom-col-6 address">
                    <h4>ADDRESS</h4>
                    <div class="">
                        <p><i class="fas fa-map-marker-alt"></i> Lorem ipsum dolor sit amet.</p>
                        <p><i class="fas fa-phone"></i> 111 5698 5698</p>
                        <a href="mailto:modus@versus.com"><i class="far fa-envelope"></i> modus@versus.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include_once "includes/footer.php"; ?>

</body>