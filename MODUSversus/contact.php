<?php include_once "inc/header.php";?>
<?php include_once "inc/navbar.php"; ?>
<link rel="stylesheet" href="assets/css/contact_style.css">
<body>
    <section class="custom-header-section">
        <div class="custom-header">
            <div class="custom-header-name">
                <h5>CONTACT US</h5>
            </div>
            <div class="custom-header-dir">
                <p><a href="index.php">Home</a> / Contacts</p>
            </div>
        </div>
         <span class="custom-tip custom-tip-down"></span>
    </section>
    <main>
        <section class="map-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" 
            width="100%" height="500" frameborder="0" style="border:0">
            </iframe>
        </section>
        <section class="paragraph-section">
            <div class="paragraph">
                <p class="mb-0">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe asperiores 
                    alias hic inventore illo, quis aspernatur suscipit obcaecati odio quidem 
                    ducimus, porro consequuntur? Ex, sapiente in. Assumenda et impedit 
                    voluptatem?
                </p>
            </div>
        </section>
        <section class="contact-form-address-section">
            <div class="contact-form-address">
                <div class="custom-parent-contact-form">
                    <div class="custom-contact-header-label">
                        <h5>SEND INQUIRY</h5>
                    </div>
                    <div class="custom-child-contact-form">
                        <form action="" method="POST">
                            <input type="text" required><label for="name">Name</label><br>
                            <input type="email"  required><label for="email">E-mail</label><br>
                            <input type="text"  required><label for="website">Website</label><br>
                            <textarea name="comment" cols="30" rows="10" required></textarea><br>
                            <button type="submit">SEND</button>
                        </form>
                    </div>
                </div>
                <div class="parent-contact-address">
                    <div class="custom-contact-header-label">
                        <h5>ADDRESS</h5>
                    </div>
                    <div class="conatct-address-info">
                        <div class="conatct-address">
                            <div class="maker">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="address">
                                <p> Lorem ipsum dolor sit amet.</p>
                            </div>
                            
                        </div>
                        <div class="conatct-phone-number-email">
                            <div class="conatct-phone-number">
                                <p><i class="fa fa-phone" aria-hidden="true"></i> 111 5698 5698</p>
                            </div>
                            <div class="conatct-email">
                               <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href=""> modus@versus.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "inc/footer.php"; ?>
</body>