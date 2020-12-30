<?php include_once "inc/header.php"; ?>
<?php include_once "inc/navbar.php"; ?>
<link rel="stylesheet" href="assets/css/blog_style.css">
<body>
    <section class="custom-head-section">
        <div class="custom-header">
            <div class="custom-header-name">
                <h5>BLOG</h5>
            </div>
            <div class="custom-header-dir">
                <p><a href="index.php" class="">Home</a> / Blog</p>
            </div>
        </div>
        <span class="custom-tip custom-tip-down"></span>
    </section>

    <section class="custom-form">
        <div class="blog-form-section">
            <div class="custom-contact-header-label">
                <h5>Leave a comment</h5>
            </div>
            <div class="custom-child-contact-form">
                <form action="" method="POST">
                    <input type="text" required><label for="name">Name</label><br>
                    <input type="email" required><label for="email">E-mail</label><br>
                    <input type="text" required><label for="website">Website</label><br>
                    <textarea name="comment" cols="30" rows="10"required></textarea><br>
                    <button type="submit" id="form-btn">SEND</button>
                </form>
            </div>
        </div>
    </section>
    <?php include_once "inc/footer.php"; ?>
</body>